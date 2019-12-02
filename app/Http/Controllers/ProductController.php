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
        $products = Product::latest()->paginate(10);
  
        return view('products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
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
}


?>