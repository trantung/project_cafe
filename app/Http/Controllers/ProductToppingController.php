<?php
namespace App\Http\Controllers;
use APV\Product\Models\Product;
use APV\Product\Models\ProductTopping;
use APV\Topping\Models\Topping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\AdminController;
use APV\Product\Services\ProductService;

class ProductToppingController extends AdminController
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
    public function list($productId)
    {
        $data = ProductTopping::where('product_id', $productId)->get();
        return view('products.topping.index')->with(compact('data', 'productId'));
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($productId)
    {
        return view('products.topping.create')->with(compact('productId'));
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $productId)
    {
        $input = $request->all();
        $check = $this->productService->createProductTopping($productId, $input);
        if ($check) {
            return Redirect::action('ProductToppingController@list', $productId)->with('success','Thêm thành công.');
        }
        dd('store');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.topping.show',compact('product'));
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($productId, $productToppingId)
    {
        $productTopping = ProductTopping::find($productToppingId);
        $topping = Topping::find($productTopping->topping_id);
        return view('products.topping.edit',compact('productTopping', 'productId', 'topping'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $productId, $productToppingId)
    {
        $input = $request->all();
        $check = $this->productService->updateProductTopping($productToppingId, $input);
        if ($check) {
            return Redirect::action('ProductToppingController@list', $productId)->with('success','Edit thành công.');
        }
        dd('update');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($productId, $productToppingId)
    {
        $data = ProductTopping::find($productToppingId);
        $toppingId = $data->topping_id;
        if ($toppingId) {
            Topping::destroy($toppingId);
        }
        ProductTopping::destroy($productToppingId);
        return Redirect::action('ProductToppingController@list', $productId)->with('success','Delete success');
    }

}
