<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\AdminController;
use APV\Category\Models\Category;
use APV\Product\Models\Product;

class CategoryController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Category::all();
        return view('category.index')->with(compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $imageUrl = '';
        $categoryId = Category::create($input)->id;
        $path = getPathCategory($input['parent_id']);

        $file = request()->file('image');
        if ($file) {
            $fileNameImage = $file->getClientOriginalName();
            request()->file('image')->move(public_path("/uploads/categories/" . $categoryId . '/'), $fileNameImage);
            $imageUrl = '/uploads/categories/' . $categoryId . '/' . $fileNameImage;
        }
        Category::where('id', $categoryId)->update(['path' => $path, 'image' => $imageUrl]);
        return Redirect::action('CategoryController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('category.edit')->with(compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $category = Category::find($id);
        $imageUrl = $category->image;

        $file = request()->file('image');
        if ($file) {
            $fileNameImage = $file->getClientOriginalName();
            request()->file('image')->move(public_path("/uploads/categories/" . $category . '/'), $fileNameImage);
            $imageUrl = '/uploads/categories/' . $category . '/' . $fileNameImage;
        }
        $path = getPathCategory($input['parent_id']);
        $input['path'] = $path;
        $input['image'] = $imageUrl;
        $category->update($input);
        return Redirect::action('CategoryController@index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::where('category_id', $id)->update(['category_id', CATEGORY_NONE]);
        Category::destroy($id);
        return Redirect::action('CategoryController@index');
    }
}
