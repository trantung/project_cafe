<?php

namespace APV\Product\Services;

use APV\Shop\Models\Shop;
use APV\Category\Models\Category;
use APV\Topping\Models\Topping;
use APV\Product\Models\Product;
use APV\Product\Models\GroupOption;
use APV\Product\Models\GroupOptionProduct;
use APV\Product\Models\Option;
use APV\Product\Models\OptionProduct;
use APV\Product\Models\CommonStep;
use APV\Topping\Models\ToppingCategory;
use APV\Product\Models\ProductTopping;
use APV\Product\Constants\ProductDataConst;
use APV\Product\Models\CommonImage;
use APV\Tag\Models\TagProduct;
use APV\Tag\Models\Tag;
use APV\Size\Models\SizeProduct;
use APV\Size\Models\Size;
use APV\Size\Models\SizeResource;
use APV\Size\Models\Step;
use APV\Material\Models\Material;
use APV\Base\Services\BaseService;
use APV\Category\Services\CategoryService;
//use League\Fractal\Resource\Collection;
use Illuminate\Database\Eloquent\Collection as Collect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

/**
 * Class ProductService
 * @package APV\Product\Services
 */

class ProductService extends BaseService
{
   public function __construct(Product $model)
    {
        parent::__construct($model);
        $categoryService = new CategoryService(new Category);
        $this->categoryService = $categoryService;
    }

    public function create($input)
    {
        $file = request()->file('avatar');
        if (!$file) {
            return false;
        }
        $productId = Product::create($input)->id;
        if (!$productId) {
            return false;
        }
        //update barcode
        $productBarcode = getBarCodeProduct($productId);
        //upload avatar: todo
        $fileNameImage = $file->getClientOriginalName();
        $file->move(public_path("/uploads/products/" . $productId . '/avatar/'), $fileNameImage);
        $imageUrl = '/uploads/products/' . $productId . '/avatar/' . $fileNameImage;
        Product::where('id', $productId)->update(['avatar' => $imageUrl, 'barcode' => $productBarcode]);
        //upload nhieu anh: todo
        if (is_countable($input['images']) && count($input['images']) > 0) {
            $this->postCreateImages($productId, $input['images']);
        }
        return $productId;
    }

    public function getList()
    {
        // $myTime = '19:30';
        // if (date('H:i') == date('H:i', strtotime($myTime))) {
        //     // do something
        // }
        // $shop = Shop::find(1);
        // $openTime = $shop->open_time;
        // $closeTime = $shop->close_time;
        $products = Product::all();
        // foreach ($products as $key => $product) {
        //     if ($product->open_time) {
        //         # code...
        //     }
        // }
        return $products->toArray();
    }

    public function getCategoriesByProduct($productId)
    {
        $data = [];
        $product = Product::find($productId);
        $categoryId = $product->category_id;
        $category = Category::find($categoryId);
        if (!$categoryId) {
            $data['category_id'] = '';
            $data['category_name'] = '';
            return $data;
        }
        $data['category_id'] = $categoryId;
        $data['category_name'] = $category->name;
        return $data;
    }

    public function getTagByProduct($productId)
    {
        $listTagId = TagProduct::where('product_id')->pluck('tag_id');
        $data = [];
        foreach ($listTagId as $key => $tagId) {
            $tag = Tag::find($tagId);
            $data[$key]['id'] = $tagId;
            $data[$key]['name'] = $tag->name;
        }
        return $data;
    }
    
    public function getSizeProductDetail($productId, $sizeId, $field)
    {
        $data = SizeProduct::where('product_id', $productId)->where('size_id', $sizeId)->first();
        if (!$data) {
            return null;
        }
        return $data->$field;
    }

    public function getSizeProduct($productId, $material = null)
    {
        $listSizeId = SizeProduct::where('product_id', $productId)->pluck('size_id');
        $listSize = Size::whereIn('id', $listSizeId)->get();
        $data = [];
        foreach ($listSize as $key => $value) {
            $data[$key]['size_id'] = $sizeId = $value->id;
            $data[$key]['size_price'] = (int)$this->getSizeProductDetail($productId, $sizeId, 'price');
            $data[$key]['size_name'] = $value->name;
            $data[$key]['weight_number'] = $this->getSizeProductDetail($productId, $sizeId, 'weight_number');
            if ($material == null) {
                $data[$key]['material'] = $this->getMaterialProduct($productId, $value->id);
            }
        }
        return $data;
    }

    public function getStep($productId, $sizeId, $materialId)
    {
        $data = [];
        $listStep = Step::where('product_id', $productId)->where('size_id', $sizeId)
            ->where('material_id', $materialId)->get();
        // $data = new CommonStep();
        foreach ($listStep as $key => $step) {
            $stepQuantity = $step->quantity;
            $data[$stepQuantity] = [
                'step_name' => $step->name,
                'step_id' => $step->id, 
                'step_quantity' => $step->quantity, 
            ];
        }
        return $data;
    }
    public function getMaterialProduct($productId, $sizeId)
    {
        $data = [];
        $materialIds = SizeResource::where('product_id', $productId)->where('size_id', $sizeId)->pluck('material_id');
        $materialList = Material::whereIn('id', $materialIds)->get();
        foreach ($materialList as $key => $value) {
            $data[$key]['material_name'] = $value->name;
            $data[$key]['material_id'] = $value->id;
            $data[$key]['size_product_material_detail'] = $this->getStep($productId, $sizeId, $value->id);
        }
        return $data;
    }

    public function getDetail($productId, $field = null)
    {
        $product = Product::find($productId);
        if (!$product) {
            return false;
        }
        if ($field) {
            return $product->$field;
        }
        $data = $product->toArray();
        $data['price_origin'] = (int) $product->price_origin;
        $data['price_pay'] = (int) $product->price_pay;
        $data['categories'] = $this->getCategoriesByProduct($productId);
        $data['product_images'] = $this->getProductImages($productId);
        $data['product_topping_own'] = $this->getToppingOwn($product);
        $data['product_topping_by_category'] = $this->getToppingByCategory($product);
        $data['product_tags'] = $this->getTagByProduct($productId);
        $data['product_size'] = $this->getSizeProduct($productId);
        return $data;
    }
    public function getToppingOwn($product)
    {
        $result = [];
        $data = ProductTopping::where('product_id', $product->id)->get();
        foreach ($data as $key => $value) {
            $result[$key]['topping_name'] = $result[$key]['topping_price'] = '';
            if ($topping = Topping::find($value->topping_id)) {
                $result[$key]['topping_id'] = $topping->id;
                $result[$key]['topping_name'] = $topping->name;
                $result[$key]['topping_price'] = $topping->price;
            }
        }
        return $result;
    }
    public function getToppingByCategory($product)
    {
        $categoryId = $product->category_id;
        $result = [];
        $toppingCategories = ToppingCategory::where('category_id', $categoryId)->get();
        foreach ($toppingCategories as $key => $value) {
            $result[$key]['topping_name'] = $result[$key]['topping_price'] = '';
            if ($topping = Topping::find($value->topping_id)) {
                $result[$key]['topping_id'] = $topping->id;
                $result[$key]['topping_name'] = $topping->name;
                $result[$key]['topping_price'] = $topping->price;
            }
        }
        return $result;
    }

    public function edit($productId, $input)
    {
        $product = Product::find($productId);
        if (!$product) {
            return false;
        }
        $file = request()->file('avatar');
        if ($file) {
            $fileNameImage = $file->getClientOriginalName();
            $file->move(public_path("/uploads/products/" . $productId . '/avatar/'), $fileNameImage);
            $imageUrl = '/uploads/products/' . $productId . '/avatar/' . $fileNameImage;
            $input['avatar'] = $imageUrl;
        }
        $product->update($input);

        if (count($input['images']) > 0) {
            $this->postUpdateImages($productId, $input['images']);
        }

        return true;
    }

    public function delete($productId)
    {
        $product = Product::find($productId);
        if (!$product) {
            return false;
        }
        //xoa SizeResource, SizeProduct, TagProduct, ProductTopping, Step, CommonImage
        Step::where('product_id', $productId)->delete();
        SizeResource::where('product_id', $productId)->delete();
        SizeProduct::where('product_id', $productId)->delete();
        TagProduct::where('product_id', $productId)->delete();
        ProductTopping::where('product_id', $productId)->delete();
        CommonImage::where('model_name', 'Product')->where('model_id', $productId)->delete();
        Product::destroy($productId);
        return true;
    }

    public function updateProductTopping($productToppingId, $input)
    {
        $productTopping = ProductTopping::find($productToppingId);
        $productId = $productTopping->product_id;
        Topping::destroy($productTopping->topping_id);
        ProductTopping::destroy($productToppingId);
        $this->createProductTopping($productId, $input);
        return true;
    }

    public function createProductTopping($productId, $input)
    {
        $toppingId = Topping::create($input)->id;
        ProductTopping::create([
            'product_id' => $productId, 
            'topping_id' => $toppingId,
            'source' => 0
        ]);
        return true;
    }

    public function getProductImages($productId)
    {
        $data = CommonImage::where('model_name', 'Product')->where('model_id', $productId)->pluck('image_url');
        return $data;
    }

    public function postCreateImages($productId, $images)
    {
        foreach ($images as $key => $value) {
            $fileNameImage = $value->getClientOriginalName();
            $value->move(public_path("/uploads/products/" . $productId . '/images/'), $fileNameImage);
            $imageUrl = '/uploads/products/' . $productId . '/images/' . $fileNameImage;
            CommonImage::create(['model_id' => $productId, 'model_name' => 'Product', 'image_url' => $imageUrl]);
        }
    }

    public function postUpdateImages($productId, $images)
    {
        CommonImage::where('model_id', $productId)->where('model_name', 'Product')->delete();
        foreach ($images as $key => $value) {
            $fileNameImage = $value->getClientOriginalName();
            $value->move(public_path("/uploads/products/" . $productId . '/images/'), $fileNameImage);
            $imageUrl = '/uploads/products/' . $productId . '/images/' . $fileNameImage;
            CommonImage::create(['model_id' => $productId, 'model_name' => 'Product', 'image_url' => $imageUrl]);
        }
    }

    public function searchProduct($input)
    {
        //product_id, product_name, category_id,
        $data = Product::whereNull('deleted_at');

        return $data;
    }

    public function getNameCategory($categoryId)
    {
        $cate = Category::find($categoryId);
        if ($cate) {
            return $cate->name;
        }
        return '';
    }
    //product to do
    public function getImportant($productId)
    {
        return 1;
    }
    public function getSpecialTagByCate($categoryId)
    {
        return 'Món được ưa thích';
    }
    //end to do
    public function getSalePrice($product)
    {
        return $product->price_pay;
    }

    public function getInfoProduct($product)
    {
        $res = [];
        $res['product_id'] = $product->id;
        $res['product_name'] = $product->name;
        $res['product_short_desc'] = $product->short_desc;
        $res['product_description'] = $product->description;
        $res['product_base_price'] = $product->price_pay;
        $res['product_sale_price'] = $this->getSalePrice($product);
        $res['product_image_thumbnail'] = $product->avatar;
        return $res;
    }

    public function getProductByCategory($cateId)
    {
        $res = [];
        $listCategory = $this->categoryService->getListCategoryByRoot($cateId);
        $listProduct = Product::whereIn('category_id', $listCategory)->get();
        $res['product_count'] = count($listProduct);
        foreach ($listProduct as $key => $value) {
            $res[$key] = $this->getInfoProduct($value);
        }
        return $res;
    }

    public function customerGetList($input)
    {
        $orderType = $shopLocation = $deliveryAddress = '';
        if (isset($input['order_type'])) {
            $orderType = $input['order_type'];
        }
        if (isset($input['location_id'])) {
            $locationId = $input['location_id'];
        }
        if (isset($input['delivery_address'])) {
            $deliveryAddress = $input['delivery_address'];
        }
        $res = [];
        $listCate = null;
        if (isset($input['category_id'])) {
            $categoryId = $input['category_id'];
            $arrayCate = $this->categoryService->getListCategoryByRoot($input['category_id']);
            $listCate = Category::whereIn('id', $arrayCate)->get();
        } else {
            $listCate = Category::all();
        }
        $res['category_count'] = count($listCate);
        foreach ($listCate as $key => $value) {
            $res[$key]['category_id'] = $value->id;
            $res[$key]['category_name'] = $value->name;
            $res[$key]['special_tag'] = $this->getSpecialTagByCate($value);
            $res[$key]['list_product'] = $this->getProductByCategory($value->id);
        }
        return $res;
    }

    public function getVideoByProduct($product)
    {
        $res = [];
        return $res;
    }

    public function getCoverListProduct($product)
    {
        $res = [];
        $data = $this->getProductImages($product->id)->toArray();
        $dataVideo = $this->getVideoByProduct($product);
        $res = array_merge($data, $dataVideo);

        return $res;
    }

    public function getGroupOptionName($groupOptionId)
    {
        $res = GroupOption::find($groupOptionId);
        if ($res) {
            return $res->name;
        }
        return null;
    }

    public function getOptionProduct($product, $groupOptionId)
    {
        $res = [];
        $data = OptionProduct::where('product_id', $product->id)->pluck('option_id');
        $listOptions = Option::whereIn('id', $data)->where('group_option_id', $groupOptionId)->get();
        foreach ($listOptions as $key => $value) {
            $res[$key]['option_id'] = $value->id;
            $res[$key]['option_name'] = $value->name;
        }
        return $res;
    }

    public function getGroupOptionDetail($product)
    {
        $res = [];
        $data = GroupOptionProduct::where('product_id', $product->id)->get();
        foreach ($data as $key => $value) {
            $res[$key]['group_option_id'] = $value->group_option_id;
            $res[$key]['group_option_name'] = $this->getGroupOptionName($value->group_option_id);
            $res[$key]['group_option_product_type'] = $value->type;
            $res[$key]['group_option_product_type_show'] = $value->type_show;
            $res[$key]['option_list'] = $this->getOptionProduct($product, $value->group_option_id);
        }
        return $res;
    }

    public function getToppingByProduct($product)
    {
        $res = [];
        $data = ProductTopping::where('product_id', $product->id)->pluck('topping_id');
        $listTopping = Topping::whereIn('id', $data)->get();
        foreach ($listTopping as $key => $value) {
            $res[$key]['topping_id'] = $value->id;
            $res[$key]['topping_name'] = $value->name;
            $res[$key]['topping_price'] = $value->price;
        }
        return $res;
    }

    public function customerGetDetail($input)
    {
        $productId = '';
        $res = [];
        if (isset($input['product_id'])) {
            $productId = $input['product_id'];
            $product = Product::find($productId);
            if (!$product) {
                return [];
            }
            $res = $this->getInfoProduct($product);
            $res['cover_list'] = $this->getCoverListProduct($product);
            $res['group_option'] = $this->getGroupOptionDetail($product);
            $res['size'] = $this->getSizeProduct($product->id, true);
            $res['product_topping'] = array_merge($this->getToppingOwn($product), $this->getToppingByCategory($product));
            // $res['product_topping_own'] = $this->getToppingOwn($product);
            // $res['product_topping_by_category'] = $this->getToppingByCategory($product);
            $res['product_tags'] = $this->getTagByProduct($productId);
            // return $this->getDetail($productId);
            return $res;
        }
        return [];
    }
}
