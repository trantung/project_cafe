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
use APV\Customer\Models\Customer;
use APV\Order\Constants\OrderDataConst;
use APV\Order\Models\Order;
use APV\Order\Models\OrderProduct;
use APV\Order\Models\OrderProductTopping;
use APV\Order\Models\OrderProductOption;
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
use APV\Promotion\Models\Voucher;
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
        $res = [];
        $data = CommonImage::where('model_name', 'Product')->where('model_id', $productId)->pluck('image_url');
        foreach ($data as $key => $value) {
            $res[] = url($value);
        }
        return $res;
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
    public function getFieldProductId($productId, $field)
    {
        $product = Product::find($productId);
        if (!$product) {
            return null;
        }
        return $product->$field;
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
        $res['product_image_thumbnail'] = url($product->avatar);
        $res['product_using_at'] = $product->using_at;
        return $res;
    }

    public function getProductByCategory($cateId, $usingAt = null)
    {
        $res = [];
        $listCategory = $this->categoryService->getListCategoryByRoot($cateId);
        if ($usingAt) {
            $arrayUsingAt = [$usingAt, ProductDataConst::PRODUCT_USING_AT_ALL];
            $listProduct = Product::whereIn('category_id', $listCategory)
                ->whereIn('using_at', $arrayUsingAt)
                ->get();
        } else {
            $listProduct = Product::whereIn('category_id', $listCategory)->get();
        }
        foreach ($listProduct as $key => $value) {
            $res[$key] = $this->getInfoProduct($value);
        }
        return $res;
    }

    public function customerGetList($input)
    {
        $orderType = $shopLocation = $deliveryAddress = '';
        $usingAt = ProductDataConst::PRODUCT_USING_AT_SHOP;
        if (isset($input['using_at'])) {
            $usingAt = (int)$input['using_at'];
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
            $arrayCate = $this->categoryService->getListCategoryByRoot($input['category_id']);
            $listCate = Category::whereIn('id', $arrayCate)->get();
        } else {
            $listCate = Category::all();
        }
//        $res['category_count'] = count($listCate);
        foreach ($listCate as $key => $value) {
            $res[$key]['category_id'] = $value->id;
            $res[$key]['category_name'] = $value->name;
            $res[$key]['special_tag'] = $this->getSpecialTagByCate($value);
            $res[$key]['list_product'] = $this->getProductByCategory($value->id, $usingAt);
        }
        $res = $this->formatArray2Array($res);
        return $res;
    }

    public function getVideoByProduct($product)
    {
        $res = ['https://www.youtube.com/watch?v=K_XmTiNojMg'];
        return $res;
    }

    public function getCoverListProduct($product)
    {
        $res = [];
        $data = $this->getProductImages($product->id);
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

    public function getGroupOptionDetail($product, $orderProduct = null)
    {
        $res = [];
        $data = GroupOptionProduct::where('product_id', $product->id)->get();
        foreach ($data as $key => $value) {
            $res[$key]['group_option_id'] = $value->group_option_id;
            $res[$key]['group_option_name'] = $this->getGroupOptionName($value->group_option_id);
            $res[$key]['group_option_product_type'] = $value->type;
            $res[$key]['group_option_product_type_show'] = $value->type_show;
            if ($orderProduct) {
                $res[$key]['option_list'] = $this->getOptionProductOfOrderProduct($orderProduct, true);
            } else {
                $res[$key]['option_list'] = $this->getOptionProduct($product, $value->group_option_id);
            }
            
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
    public function getInfoDetailProduct($product)
    {
        $res = [];
        $res = $this->getInfoProduct($product);
        $res['cover_list'] = $this->getCoverListProduct($product);
        $res['group_option'] = $this->getGroupOptionDetail($product);
        $res['size'] = $this->getSizeProduct($product->id, true);
        $res['product_topping'] = array_merge($this->getToppingOwn($product), $this->getToppingByCategory($product));
        $res['product_tags'] = $this->getTagByProduct($product->id);
        return $res;
    }
    public function customerGetDetail($input)
    {
        if (isset($input['product_id'])) {
            $productId = $input['product_id'];
            $product = Product::find($productId);
            if (!$product) {
                return [];
            }
            $res = $this->getInfoDetailProduct($product);
            return $res;
        }
        return [];
    }

    public function getInfoCustomer($input)
    {
        $res['customer_id'] = OrderDataConst::DEFAULT_CUSTOMER_ID;
        $res['customer_name'] = OrderDataConst::DEFAULT_CUSTOMER_NAME;
        $res['customer_phone'] = OrderDataConst::DEFAULT_CUSTOMER_PHONE;
        if (!isset($input['customer_id'])) {
            return $res;
        }
        $customer = Customer::find($input['customer_id']);
        if ($customer) {
            $res['customer_id'] = $customer->id;
            $res['customer_name'] = $customer->customer_name;
            $res['customer_phone'] = $customer->customer_phone;
        }
        return $res;
    }
    public function formatAddProductToCart($input)
    {
        $order = [];
        $customer = $this->getInfoCustomer($input);
        $order['status'] = OrderDataConst::ORDER_STATUS_CUSTOMER_CREATED;
        $order = array_merge($order, $customer);
        $order['comment'] = $this->getValueDefault($input, 'comment', '');
        $order['created_by'] = $input['customer_id'];
        $order['ship_price'] = $this->getValueDefault($input, 'ship_price', 0);
        $order['ship_id'] = $this->getValueDefault($input, 'ship_id', 1);
        $order['total_product_price'] = $this->getValueDefault($input, 'total_product_price', 0);
        $order['total_topping_price'] = $this->getValueDefault($input, 'total_topping_price', 0);
//        $order['amount'] = $this->getMoneyAmountByProduct($input);
        return $order;
    }
    public function getPriceAfterPromotion($price)
    {
        return $price;
    }

    public function getPriceProductBySize($productId, $sizeId)
    {
        $priceBeforePromotion = $this->getSizeProductDetail($productId, $sizeId, 'price');
        $priceAfterPromotion = $this->getPriceAfterPromotion($priceBeforePromotion);
        return $priceAfterPromotion;
    }

    public function getToppingFromStr($strTopping)
    {
        $arrayTopping = explode(',', $strTopping);
        $data = Topping::whereIn('id', $arrayTopping)->pluck('price', 'id');
        return $data;
    }
    public function getOptionFromStr($strOption)
    {
        $arrayOption = explode(',', $strOption);
        $data = Option::whereIn('id', $arrayOption)->pluck('name', 'id');
        return $data;
    }
    public function getTotalPriceToppingByProduct($strTopping)
    {
        $total = 0;
        if ($strTopping == '') {
            return $total;
        }
        $arrayTopping = explode(',', $strTopping);
        foreach ($arrayTopping as $toppingId)
        {
            $topping = Topping::find($toppingId);
            if ($topping) {
                $total = $total + $topping->price;
            }
        }
        return $total;
    }

    public function getSizeOrderProduct($productId, $sizeId)
    {
        $listSize = $this->getSizeProduct($productId, true);
        foreach ($listSize as $size) {
            if ($size['size_id'] == $sizeId) {
                return $size;
            }
        }
        return false;
    }

    public function checkVoucher($voucherCode = null)
    {
        $percentPromotion = 0;
        //check voucher
        // neu voucher giam gia theo %. vi du: giam gia 10%
        if ($voucherCode) {
            $voucher = Voucher::where('code', $voucherCode)->first();
            if (!$voucher) {
                return false;
            }
            if ($voucher) {
                $percentPromotion = $voucher->percent_promotion;
            } 
        }
        return $percentPromotion;
    }

    public function getAmountOrderAfterPromotion($orderId, $voucherCode = null)
    {
        $percentPromotion = $this->checkVoucher($voucherCode);
        $total_product_price = OrderProduct::where('order_id', $orderId)->where('status', OrderDataConst::ORDER_STATUS_CUSTOMER_CREATED)->sum('total_price');
        $promotionPrice = $total_product_price * $percentPromotion/100;
        $res = $total_product_price - $promotionPrice;
        return $res;
    }
    public function updateOrderCommon($orderId, $voucherCode = null)
    {
        $orderUp = Order::find($orderId);
        $amount_after_promotion = $this->getAmountOrderAfterPromotion($orderId, $voucherCode);
        $total_product_price = OrderProduct::where('order_id', $orderId)
            ->where('status', OrderDataConst::ORDER_STATUS_CUSTOMER_CREATED)
            ->sum('total_price');
        $total_price_topping = OrderProduct::where('order_id', $orderId)
            ->where('status', OrderDataConst::ORDER_STATUS_CUSTOMER_CREATED)
            ->sum('total_price_topping');
        $orderUp->update([
            'total_product_price' => $total_product_price,
            'total_price_topping' => $total_price_topping,
            'amount_after_promotion' => $amount_after_promotion,
        ]);
        return true;
    }
    public function customerAddProduct($input, $orderEditId = null)
    {
        $res = [];
        $checkOrderExist = Order::where('customer_id', $input['customer_id'])->where('status', OrderDataConst::ORDER_STATUS_CUSTOMER_CREATED)->first();
        if ($checkOrderExist) {
            $orderId = $checkOrderExist->id;
        } else {
            $order = $this->formatAddProductToCart($input);
            $orderId = Order::create($order)->id;
        }
        if ($orderEditId) {
            $orderId = $orderEditId;
        }
        $res['size'] = $this->getSizeOrderProduct($input['product_id'], $input['size_id']);
        //tao mới record trong bảng order_product
        $productPrice = $this->getPriceProductBySize($input['product_id'], $input['size_id']);
        $totalPriceTopping = $this->getTotalPriceToppingByProduct($input['topping']);
        $productPriceTotal = $productPrice * $input['product_quantity'];
        $totalPrice = $productPriceTotal + $totalPriceTopping;


        $orderProduct['order_id'] = $orderId;
        $orderProduct['status'] = OrderDataConst::ORDER_STATUS_CUSTOMER_CREATED;
        $orderProduct['customer_id'] = $input['customer_id'];
        $orderProduct['table_id'] = $this->getValueDefault($input, 'table_id', 1);
        $orderProduct['table_qr_code'] = $this->getValueDefault($input, 'table_qr_code', '');
        $orderProduct['level_id'] = $this->getValueDefault($input, 'level_id', 1);
        $orderProduct['ship_id'] = $this->getValueDefault($input, 'ship_id', 1);
        $orderProduct['product_id'] = $res['product_id'] = $input['product_id'];
        $orderProduct['quantity'] = $res['product_quantity'] = $input['product_quantity'];
        $orderProduct['size_id'] = $input['size_id'];
        $orderProduct['order_product_comment'] = $input['product_comment'];
        $orderProduct['product_price'] = $res['product_price'] = $productPrice;
        $orderProduct['price'] = $productPriceTotal;
        $orderProduct['total_price'] = $totalPrice;
        $orderProduct['total_price_topping'] = $totalPriceTopping;
        // $orderProduct['amount_after_promotion'] = $amountAfterPromotion;
        $orderProductId = OrderProduct::create($orderProduct)->id;
        //update order cung voi amount_after_promotion, total_product_price, total_topping_price
        $this->updateOrderCommon($orderId);
        //tao moi record trong bang order_product_topping
        $listTopping = $this->getToppingFromStr($input['topping']);
        foreach ($listTopping as $toppingId => $toppingPrice) {
            OrderProductTopping::create([
                'order_product_id' => $orderProductId,
                'order_id' => $orderId,
                'product_id' => $input['product_id'],
                'topping_id' => $toppingId,
                'topping_price' => $toppingPrice,
            ]);
        }
        //tao moi record trong bang order_product_option
        $arrayOption = $this->getOptionFromStr($input['option']);
        $groupOption = [];
        foreach ($arrayOption as $optionId => $optionName) {
            $groupOption[$optionId]['option_id'] = $optionId;
            $groupOption[$optionId]['option_name'] = $optionName;
            OrderProductOption::create([
                'order_product_id' => $orderProductId,
                'product_id' => $input['product_id'],
                'order_id' => $orderId,
                'option_id' => $optionId,
            ]);
        }
        $res['group_option'] = $this->formatArray2Array($groupOption);
        $res['order_product_id'] = $orderProductId;
        return $res;
    }
    public function getFieldOfToppingById($toppingId, $field)
    {
        $res['topping_name'] = '';
        $data = Topping::find($toppingId);
        if (!$data) {
            return $res;
        }
        return $data->$field;
    }

    public function checkActive($data, $value)
    {
        if ($data == $value) {
            return true;
        }
        return false;
    }
    public function getSizeProductOfOrderProduct($orderProduct, $active = null)
    {
        $sizeId = $orderProduct->size_id;
        $size = Size::find($sizeId);
        $res = [];
        if (!$size) {
            return $res;
        }
        if ($active) {
            $sizeProduct = $this->getSizeProduct($orderProduct->product_id, true);
            foreach ($sizeProduct as $key => $value) {
                $res[$key]['size_id'] = $value['size_id'];
                $res[$key]['size_name'] = $value['size_name'];
                $res[$key]['size_price'] = $value['size_price'];
                $res[$key]['active'] = $this->checkActive($value['size_id'], $sizeId);
            }
            return $res;
        }
        $res['size_id'] = $size->id;
        $res['size_name'] = $size->name;
        return $res;
    }

    public function getToppingProductOfOrderProduct($orderProduct, $active = null)
    {
        $res = [];
        if ($active) {
            // $listTopping = Topping::all();
            $product = Product::find($orderProduct->product_id);
            $listTopping = array_merge($this->getToppingOwn($product), $this->getToppingByCategory($product));
            $listToppingActiveId = OrderProductTopping::where('order_product_id', $orderProduct->id)->pluck('topping_id');
            foreach ($listTopping as $key => $value) {
                $res[$key]['topping_id'] = $value['topping_id'];
                $res[$key]['topping_name'] = $value['topping_name'];
                $res[$key]['topping_price'] = $value['topping_price'];
                if (in_array($value['topping_id'], $listToppingActiveId->toArray())) {
                    $res[$key]['active'] = true;
                } else {
                    $res[$key]['active'] = false;
                }
            }
            return $res;
        }

        $data = OrderProductTopping::where('order_product_id', $orderProduct->id)->get();
        foreach ($data as $key => $value) {
            $res[$key]['topping_id'] = $value->topping_id;
            $res[$key]['topping_name'] = $this->getFieldOfToppingById($value->topping_id, 'name');
            $res[$key]['topping_price'] = $value->topping_price;
        }
        return $res;
    }

    public function getNameOption($optionId)
    {
        $option = Option::find($optionId);
        if (!$option) {
            return '';
        }
        return $option->name;
    }

    public function getOptionProductOfOrderProduct($orderProduct, $active = null)
    {
        $res = [];
        if ($active) {
            // $listTopping = Topping::all();
            $product = Product::find($orderProduct->product_id);
            $listOptions = Option::all();
            $listOptionsActiveId = OrderProductOption::where('order_product_id', $orderProduct->id)->pluck('option_id');
            foreach ($listOptions as $key => $value) {
                $res[$key]['option_id'] = $value->id;
                $res[$key]['option_name'] = $value->name;
                if (in_array($value->id, $listOptionsActiveId->toArray())) {
                    $res[$key]['active'] = true;
                } else {
                    $res[$key]['active'] = false;
                }
            }
            return $res;
        }
        $data = OrderProductOption::where('order_product_id', $orderProduct->id)->get();
        foreach ($data as $key => $value) {
            $res[$key]['option_id'] = $value->option_id;
            $res[$key]['option_name'] = $this->getNameOption($value->option_id);
        }
        return $res;
    }
    public function getStatusProductCanel($orderProductStatus)
    {
        if ($orderProductStatus == OrderDataConst::ORDER_STATUS_CUSTOMER_CREATED) {
            return ProductDataConst::PRODUCT_CANCEL_BY_CUSTOMER_FALSE;
        }
        if ($orderProductStatus == OrderDataConst::ORDER_STATUS_CUSTOMER_CREATED) {
            return ProductDataConst::PRODUCT_CANCEL_BY_CUSTOMER_TRUE;
        }
    }

    public function cartListProduct($input)
    {
        $customerToken = $input['customer_token'];
        $checkToken = $this->checkCustomerToken($customerToken);
        if (!$checkToken || !isset($input['customer_id'])) {
            return false;
        }
        $customerId = $input['customer_id'];
        $order = Order::where('customer_id', $customerId)->where('status', OrderDataConst::ORDER_STATUS_CUSTOMER_CREATED)->first();
        if (!$order) {
            return false;
        }
        $orderProducts = OrderProduct::where('order_id', $order->id)->get();
        // getInfoDetailProduct
        // $data = Product::whereIn('id', $listProduct)->get();
        $res = [];
        foreach ($orderProducts as $key => $orderProduct) {
            $product = Product::find($orderProduct->product_id);
            if (!$product) {
                return false;
            }
            $res[$key] = $this->getInfoProduct($product);
            $res[$key]['order_product_id'] = $orderProduct->id;
            $res[$key]['product_id'] = $orderProduct->product_id;
            $res[$key]['product_cancel'] = $this->getStatusProductCanel($orderProduct->status);
            $res[$key]['product_quantity'] = $orderProduct->quantity;

            // $res[$key]['product_quantity'] = $orderProduct->quantity;
            //size
            $res[$key]['size'] = $this->getSizeProductOfOrderProduct($orderProduct);
            //topping
            $res[$key]['topping'] = $this->getToppingProductOfOrderProduct($orderProduct);
            //option
            $res[$key]['option'] = $this->getOptionProductOfOrderProduct($orderProduct);
        }
        // product_sale_price
        $result['list_product'] = $this->formatArray2Array($res);
        $result['total_price'] = OrderProduct::where('order_id', $order->id)->sum('total_price');
        return $result;

    }

    public function cartEditProduct($input)
    {
        $orderProductId = $input['order_product_id'];
        $productId = $input['product_id'];
        $orderProduct = OrderProduct::find($orderProductId);
        if (!$orderProduct) {
            return false;
        }
        $res = [];
        
        $product = Product::find($productId);
        // $res = $this->getInfoProduct($product);

        // $res['cover_list'] = $this->getCoverListProduct($product);
        // $res['group_option'] = $this->getGroupOptionDetail($product);
        // $res['size'] = $this->getSizeProduct($product->id, true);
        // $res['product_topping'] = array_merge($this->getToppingOwn($product), $this->getToppingByCategory($product));
        

        $res = $this->getInfoProduct($product);
        $res['order_product_id'] = $orderProduct->id;
        $res['cover_list'] = $this->getCoverListProduct($product);
        $res['product_tags'] = $this->getTagByProduct($product->id);
        $res['product_quantity'] = $orderProduct->quantity;
        $res['size'] = $this->getSizeProductOfOrderProduct($orderProduct, true);
        $res['product_topping'] = $this->getToppingProductOfOrderProduct($orderProduct, true);
        // $res['option'] = $this->getOptionProductOfOrderProduct($orderProduct, true);
        $res['group_option'] = $this->getGroupOptionDetail($product, $orderProduct);
        $res['product_comment'] = $orderProduct->order_product_comment;
        return $res;

    }

    public function cartUpdateProduct($input)
    {
        // product_id, product_quantity, product_comment
        // order_product_id, product_id(required), product_quantity, product_comment, topping, option, size
        if (!$input['customer_id']) {
            return false;
        }
        $res = [];
        $productId = $input['product_id'];
        $orderProductId = $input['order_product_id'];
        $orderProduct = OrderProduct::find($orderProductId);
        $orderId = $orderProduct->order_id;
        //xoá bảng order_product_option
        OrderProductOption::where('order_product_id', $orderProductId)->delete();
        //xoá bảng order_product_topping
        OrderProductTopping::where('order_product_id', $orderProductId)->delete();
        //xoá bảng order_product
        OrderProduct::destroy($orderProductId);
        //xoa san pham khoi gio hang
        if ($input['product_quantity'] == 0) {
            return $res;
        }
        if (isset($input['product_delete'])) {
            if ($input['product_delete'] == ProductDataConst::PRODUCT_REMOVE_CART) {
                return $res;
            }
        }
        //tạo mới cùng với orderId
        $res = $this->customerAddProduct($input, $orderId);
        return $res;
    }

    public function checkUsingAtProduct($product, $usingAt)
    {
        if ($product->using_at != $usingAt && $product->using_at != ProductDataConst::PRODUCT_USING_AT_ALL) {
            return false;
        }
        return true;
    }

    public function cartChangeUsingAt($input)
    {
        $customerToken = $input['customer_token'];
        $checkToken = $this->checkCustomerToken($customerToken);
        if (!$checkToken || !isset($input['customer_id'])) {
            return false;
        }
        $customerId = $input['customer_id'];
        $listProductId = explode(',', $input['list_product_id']);
        $usingAt = $input['using_at'];
        $products = Product::whereIn('id', $listProductId)->get();
        foreach ($products as $key => $product) {
            $res[$key]['product_id'] = $product->id;
            $res[$key]['product_can_change'] = $this->checkUsingAtProduct($product, $usingAt);

        }
        return $res;
    }
    public function cartCancelProduct($input)
    {
        $orderProductId = $input['order_product_id'];
        $orderProduct = OrderProduct::find($orderProductId);
        $orderId = $orderProduct->order_id;
        $res = [];
        if ($input['cancel_product'] == ProductDataConst::PRODUCT_CANCEL_BY_CUSTOMER_TRUE) {
            $orderProduct->update(['status' => OrderDataConst::ORDER_STATUS_CUSTOMER_CANCEL]);
        }
        if ($input['cancel_product'] == ProductDataConst::PRODUCT_CANCEL_BY_CUSTOMER_FALSE) {
            $orderProduct->update(['status' => OrderDataConst::ORDER_STATUS_CUSTOMER_CREATED]);
        }
        $this->updateOrderCommon($orderId);
        return $this->cartListProduct($input);
    }

    public function cartFinish($input)
    {
        $customerToken = $input['customer_token'];
        $checkToken = $this->checkCustomerToken($customerToken);
        if (!$checkToken || !isset($input['customer_id'])) {
            return false;
        }
        $customerId = $input['customer_id'];
        $res = [];
        //update order
        $order = Order::where('customer_id', $customerId)->where('status', OrderDataConst::ORDER_STATUS_CUSTOMER_CREATED)->first();
        if (!$order) {
            return false;
        }
        $orderId = $order->id;
        $voucherCode = null;
        if (isset($input['voucher_code'])) {
            $voucherCode = $input['voucher_code'];
        }
        $data = $this->updateOrderCommon($orderId, $voucherCode);
        if (!$data) {
            return false;
        }
        $res['order_code'] = $orderCode = renderCode();
        $order->update(['code' => $orderCode]);
        return $res;
    }
}
