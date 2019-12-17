<?php

namespace App\Http\Controllers;

use APV\Product\Models\Product;
use APV\Product\Services\ProductService;
use APV\Size\Models\Size;
use APV\Size\Models\SizeProduct;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class Product_sizeController extends Controller
{
    public function index()
    {
        //$table = new SizeProduct();
         $size_product = SizeProduct::all();
        // dd($size_product);
        return view('size_product.index')->with(compact('size_product'));
    }

    public function size($id)
    {
       // dd($id);
        // $size_product = SizeProduct::find($id);
        $size_product= SizeProduct::where('size_id',$id)->get();
       // dd($size_product);
        //$size_product = SizeProduct::where('size_id', '=', $id)->firstOrFail();
        
        // $sizes = $size_product->where($size_id = 1);
        // dd($size_product);
        return view('size.list_size_product')->with(compact('size_product'));
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
    public function show(SizeProduct $SizeProduct)
    {
       //dd($SizeProduct);

        return view('size_product.show',compact('SizeProduct'));
    }
    public function edit($id)
    {
        $size_product = SizeProduct::find($id);
        return view('size_product.edit')->with(compact('size_product'));
    }
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $size_product = SizeProduct::find($id);
        $size_product->update($input);
        return Redirect::action('Product_sizeController@index'); 
    }
    public function destroy($id)
    {
        // Size::where('size_id', $id)->delete();
        // Product::where('product_id', $id)->delete();
        SizeProduct::destroy($id);
        return Redirect::action('Product_sizeController@index')->with('success','Xóa thành công');
    }
   
}
