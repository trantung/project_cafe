<?php
namespace App\Http\Controllers;
  
use App\Product;
use Illuminate\Http\Request;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(5);
  
        return view('products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
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
        request()->validate([
 
            'avatar' => 'required',
            'avatar.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
 
        ]);
        $file = request()->file('avatar');
        $imageUrl = '';
        $input = $request->all();
        $ProductId = Product::create($input)->id;
        if ($file) {
            $fileNameImage = $file->getClientOriginalName();
            request()->file('avatar')->move(public_path("/uploads/products/". $ProductId . '/'), $fileNameImage);
            $imageUrl = '/uploads/products/'. $ProductId . '/'. $fileNameImage;
           // dd($imageUrl);
        }
       // Category::where('id', $categoryId)->update(['path' => $path, 'image' => $imageUrl]);
        Product::where('id',$ProductId)->update(['avatar' => $imageUrl]);
        Product::create($request->all());
        return redirect()->route('products.index')
                        ->with('success','Thêm thành công.');
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
        
        $product = Product::find($id);
        $imageUrl = $product->avatar;
        $file = request()->file('avatar');
        $input = $request->all();
        if ($file) {
            $fileNameImage = $file->getClientOriginalName();
            request()->file('avatar')->move(public_path("/uploads/products/". $product . '/'), $fileNameImage);
            $imageUrl = '/uploads/products/'. $product . '/'. $fileNameImage;
           // dd($imageUrl);
        }
       // Category::where('id', $categoryId)->update(['path' => $path, 'image' => $imageUrl]);
        Product::where('id',$product)->update(['avatar' => $imageUrl]);
        $product->update($request->all());
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
}


?>