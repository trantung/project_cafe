<?php

namespace APV\Product\Services;

use APV\Category\Models\Category;
use APV\Topping\Models\Topping;
use APV\Product\Models\ProductTopping;
use APV\Product\Constants\ProductDataConst;
use APV\Product\Models\Product;
use APV\Base\Services\BaseService;
use League\Fractal\Resource\Collection;
use Illuminate\Database\Eloquent\Collection as Collect;
use Illuminate\Support\Facades\Storage;

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

    public function createToppingCategories($productId, $categories)
    {
        dd($categories);
    }

    public function create($input)
    {
        $productId = Product::create($input)->id;
        if (!$productId) {
            return false;
        }
        //upload avatar: todo
        //upload nhieu anh: todo
        return $productId;
    }

    public function getList()
    {
        $product = Product::all();
        return $product->toArray();
    }

    public function getCategoriesByProduct($productId)
    {
        $data = [];
        $product = Product::find($id);
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

    public function getDetail($productId)
    {
        $product = Product::find($productId);
        if (!$product) {
            return false;
        }
        $data = $product->toArray();
        $data['categories'] = $this->getCategoriesByProduct($productId);
        $data['product_images'] = $this->getProductImages($productId);
        return $data;
    }

    public function edit($productId, $input)
    {
        $product = Product::find($productId);
        if (!$product) {
            return false;
        }
        //upload avatar: todo
        //upload nhieu anh: todo
        $product->update($input);
        return true;
    }

    public function delete($productId)
    {
        $product = Product::find($productId);
        if (!$product) {
            return false;
        }
        Product::destroy($productId);
        //xoa anh: todo
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
        //todo
    }
    
}
