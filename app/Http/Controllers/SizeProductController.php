<?php

namespace App\Http\Controllers;

use APV\Product\Models\Product;
use APV\Product\Services\ProductService;
use APV\Size\Models\Size;
use APV\Size\Models\SizeProduct;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use APV\Size\Services\SizeService;

class SizeProductController extends Controller
{
    public function __construct(SizeService $sizeService)
    {
        $this->sizeService = $sizeService;
    }

    public function index()
    {
        $data = SizeProduct::all();
        return view('size_product.index')->with(compact('data'));
    }

    public function size($sizeId)
    {
        $listSizeProduct = SizeProduct::where('size_id',$sizeId)->get();
        return view('size.list_size_product')->with(compact('listSizeProduct'));
    }
    public function create()
    {
        return view('size_product.create');
    }
    public function store(Request $request)
    {
        $input = $request->all();
        $sizeId = SizeProduct::create($input)->id;
        return Redirect::action('SizeProductController@index');
    }
    public function show(SizeProduct $SizeProduct)
    {
        return view('size_product.show',compact('SizeProduct'));
    }
    public function edit($id)
    {
        $sizeProduct = SizeProduct::find($id);
        return view('size_product.edit')->with(compact('sizeProduct'));
    }
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $sizeProduct = SizeProduct::find($id);
        $sizeProduct->update($input);
        return Redirect::action('SizeProductController@index'); 
    }
    public function destroy($id)
    {
        $sizeProduct = SizeProduct::find($id);
        $sizeId = $sizeProduct->size_id;
        $productId = $sizeProduct->product_id;
        $this->sizeService->postDeleteSizeProduct($sizeId, $productId);
        SizeProduct::destroy($id);
        return Redirect::action('SizeProductController@index')->with('success','Xóa thành công');
    }
   
}
