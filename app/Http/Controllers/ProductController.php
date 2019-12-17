<?php
namespace App\Http\Controllers;
use APV\Product\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\AdminController;
use APV\Product\Models\CommonImage;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd("adđ");
        $products = Product::all();
       // dd($products);
        // return view('products.index',compact('products'))
        //     ->with('i', (request()->input('page', 1) - 1) * 10);
        return view('products.index')->with(compact('products'));
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    //     return redirect()->route('products.index')
    //                     ->with('success','Thêm thành công.');
        
        $input = $request->all();
        Product::create($input)->id;
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
        return Redirect::action('ProductController@index')->with('success','Thêm thành công.');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        
        $input = $request->all();
        $product = Product::find($id);
        $imageUrl = $product->avatar;
        //dd($imageUrl);
        $file = request()->file('avatar');
       // dd($file);
        if ($file) {
            $fileNameImage = $file->getClientOriginalName();
         //  dd($fileNameImage);
           $file->move(public_path("/uploads/img/"),$fileNameImage);
           $imageUrl = '/uploads/img/'.$fileNameImage;

        }
       // $path = getPathCategory($input['parent_id']);
       // $input['path'] = $path;
        $input['avatar'] = $imageUrl;
        $product->update($input);
        return redirect()->route('products.index')
                        ->with('success','Bạn đã cập nhập thành công');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
  
        return redirect()->route('products.index')
                        ->with('success','Bạn xóa thành công');
    }
    // post 
    public function postCreateImages($productId, $images)
    {
        foreach ($images as $key => $value) {
            $fileNameImage = $value->getClientOriginalName();
            $value->move(public_path("/uploads/products/" . $productId . '/images/'), $fileNameImage);
            $imageUrl = '/uploads/products/' . $productId . '/images/' . $fileNameImage;
            CommonImage::create(['model_id' => $productId, 'model_name' => 'Product', 'image_url' => $imageUrl]);
        }
    }

}


?>