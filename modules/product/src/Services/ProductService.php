<?php

namespace APV\Product\Services;

use APV\Shop\Models\Shop;
use APV\Category\Models\Category;
use APV\Topping\Models\Topping;
use APV\Product\Models\Product;
// use APV\Product\Models\CommonStep;
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
use League\Fractal\Resource\Collection;
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
        if (count($input['images']) > 0) {
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

    public function getSizeProduct($productId)
    {
        $listSizeId = SizeProduct::where('product_id', $productId)->pluck('id');
        $listSize = Size::whereIn('id', $listSizeId)->get();
        $data = [];
        foreach ($listSize as $key => $value) {
            $data[$key]['size_id'] = $value->id;
            $data[$key]['size_name'] = $value->name;
            $data['material'] = $this->getMaterialProduct($productId, $value->id);
        }
        return $data;
    }

    public function getStep($productId, $sizeId, $materialId)
    {
        // $listStep = Step::where('product_id', $productId)->where('size_id', $sizeId)
        //     ->where('material_id', $materialI)->get();
        // $data = new CommonStep();
        // foreach ($listStep as $key => $step) {
        //     $stepQuantity = $step->quantity;
        //     $data->$stepQuantity = [
        //         'step_name' = $step->name, 
        //         'step_id' = $step->id, 
        //         'step_quantity' = $step->quantity, 
        //     ];
        }
        return $data;
    }
    public function getMaterialProduct($productId, $sizeId)
    {
        $data = [];
        // $materialIds = SizeResource::where('product_id', $productId)->where('size_id', $sizeId)->pluck('material_id');
        // $materialList = Material::whereIn('id', $materialIds)->get();
        // foreach ($materialList as $key => $value) {
        //     $data[$key]['material_name'] = $value->name;
        //     $data[$key]['material_id'] = $value->id;
        //     $data[$key]['size_product_material_detail'] = $this->getStep($productId, $sizeId, $value->id);
        // }
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
        //xoa SizeResource, SizeProduct, TagProduct, ProductTopping
        SizeResource::where('product_id')->delete();
        SizeProduct::where('product_id')->delete();
        TagProduct::where('product_id')->delete();
        ProductTopping::where('product_id')->delete();

        $product = Product::find($productId);
        if (!$product) {
            return false;
        }
        CommonImage::where('model_name', 'Product')->where('model_id', $productId)->delete();
        ProductTopping::where('product_id', $productId)->delete();
        Product::destroy($productId);
        return true;
    }

    public function createProductTopping($productId, $input)
    {
        $toppingId = Topping::create($input)->id;
        ProductTopping::create(['product_id' => $productId, 'topping_id' => $toppingId]);
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
}
