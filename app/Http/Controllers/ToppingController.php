<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\AdminController;
use APV\Topping\Models\Topping;
use APV\Topping\Models\ToppingCategory;
use APV\Product\Models\ProductTopping;


class ToppingController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Topping::all();
        return view('topping.index')->with(compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('topping.create');
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
        $toppingId = Topping::create(['name' => $input['name'], 'price' => $input['price']])->id;
        //tao moi topping category
        if (isset($input['category_id'])) {
            Topping::createToppingForListCategory($toppingId, $input['category_id']);
        }
        return Redirect::action('ToppingController@index');
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
        $topping = Topping::find($id);
        $categories = ToppingCategory::where('topping_id', $id)->pluck('category_id')->toArray();
        // dd($categories);
        return view('topping.edit')->with(compact('topping', 'categories'));
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
        $topping = Topping::find($id);
        $topping->update(['name' => $input['name'], 'price' => $input['price']]);
        $this->deleteRelationTopping($id);
        if (isset($input['category_id'])) {
            Topping::createToppingForListCategory($id, $input['category_id']);
        }
        return Redirect::action('ToppingController@index'); 
    }

    private function deleteRelationTopping($id)
    {
        ProductTopping::where('topping_id', $id)->delete();
        ToppingCategory::where('topping_id', $id)->delete();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->deleteRelationTopping($id);
        Topping::destroy($id);
        return Redirect::action('ToppingController@index');
    }
}
