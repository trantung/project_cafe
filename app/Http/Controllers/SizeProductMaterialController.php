<?php
namespace App\Http\Controllers;
use APV\Product\Models\Product;
use APV\Product\Models\ProductTopping;
use APV\Topping\Models\Topping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\AdminController;
use APV\Product\Services\ProductService;
use APV\Size\Models\SizeProduct;
use APV\Size\Models\SizeResource;

class SizeProductMaterialController extends AdminController
{
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list($sizeProductId)
    {
        $sizeProduct = SizeProduct::find($sizeProductId);
        $data = SizeResource::where('size_product_id', $sizeProductId)->get();
        return view('size_product.material.index')->with(compact('data', 'sizeProduct'));
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($sizeProductId)
    {
        $sizeProduct = SizeProduct::find($sizeProductId);
        return view('size_product.material.create')->with(compact('sizeProduct'));
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $sizeProductId)
    {
        $input = $request->all();
        $sizeProduct = SizeProduct::find($sizeProductId);
        $input['size_product_id'] = $sizeProductId;
        $input['product_id'] = $sizeProduct->product_id;
        $input['size_id'] = $sizeProduct->size_id;
        $input['status'] = 1;
        SizeResource::create($input);
        return Redirect::action('SizeProductMaterialController@list', $sizeProductId)->with('success','Add thành công.');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('size_product.material.show',compact('product'));
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($sizeProductId, $sizeProductMaterialId)
    {
        $sizeProductMaterial = SizeResource::find($sizeProductMaterialId);

        return view('size_product.material.edit',compact('sizeProductMaterial'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $sizeProductId, $sizeProductMaterialId)
    {
        $input = $request->all();
        $sizeProductMaterial = SizeResource::find($sizeProductMaterialId);
        $sizeProductMaterial->update($input);
        return Redirect::action('SizeProductMaterialController@list', $sizeProductId)->with('success','Edit thành công.');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($sizeProductId, $sizeProductMaterialId)
    {
        SizeResource::destroy($sizeProductMaterialId);
        return Redirect::action('SizeProductMaterialController@list', $sizeProductId)->with('success','Delete success');
    }

}
