<?php

namespace App\Http\Controllers;

use APV\Product\Models\Product;
use APV\Product\Services\ProductService;
use APV\Size\Models\SizeProduct;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class Product_sizeController extends Controller
{
    public function index()
    {
        $size_product = SizeProduct::all();
        // dd($size_product);
        return view('size_product.index')->with(compact('size_product'));
    }
    public function create()
    {
        return view('size_product.create');
    }
    public function store(Request $request)
    {
        $input = $request->all();
        $sizeId = SizeProduct::create($input)->id;
        return Redirect::action('Product_sizeController@index');
    }
    public function getListProduct()
    {
        $data = Product::all();
        return $data->toArray();
    }
}
