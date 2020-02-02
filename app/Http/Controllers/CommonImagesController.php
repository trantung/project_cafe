<?php

namespace App\Http\Controllers;

use APV\Product\Models\CommonImage;
use Illuminate\Http\Request;

class CommonImagesController extends Controller
{
     public function index()
     {
         return view('products.index',compact('product'));

     }
    public function store(Request $request, $productId)
    {
        var_dump($productId);
        if($request->hasFile('images')){
            $file = $request->file('images');
            $name = $file->getClientOriginalName();
            $exection = $file->getClientOriginalExtension();
            $file->move(public_path("/uploads/products/" . $productId . '/images/'), $name);
            $imageUrl = '/uploads/products/' . $productId . '/images/' . $name;
            CommonImage::create(['model_id' => $productId, 'model_name' => 'Product', 'image_url' => $imageUrl]);
            //echo public_path().'/uploads/';
            return Response()->json(array('success'=>1,'message'=>'Upload success!'));
        }else{
          return Response()->json(array('success'=>0,'message'=>'Upload error!'));
        }
    }
}
