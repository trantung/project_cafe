<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//use Illuminate\Routing\Route;

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use APV\Product\Models\GroupOption;
use APV\Product\Models\GroupOptionProduct;
use APV\Product\Models\Option;
use APV\Product\Models\OptionProduct;
use APV\Product\Models\Product;

Route::get('/default_group_option', function(){
    $data = ['Độ ngọt', 'Độ chua'];
    foreach ($data as $key => $value) {
        GroupOption::create(['name' => $value]);
    }
    dd('group option');
});
Route::get('/default_option', function(){
    $data = ['Nhiều', 'ít', 'Không có'];
    $group = GroupOption::all();
    foreach ($group as $key => $value) {
        foreach ($data as $k => $v) {
            Option::create(['name' => $v,'group_option_id' => $value->id, 'status' => 1]);
        }
    }
    dd('option');
});
Route::get('/default_product_group_option', function(){
    $data = Product::all();
    $group = GroupOption::all();
    foreach ($data as $product) {
        foreach ($group as $value) {
            $type = getRandomType();
            if ($type == 2) {
                $typeShow = GROUP_OPTION_PRODUCT_TYPE_SHOW_CHECKBOX;
            } else {
                $typeShow = getRandomTypeShow();
            }
            GroupOptionProduct::create([
                'product_id' => $product->id,
                'group_option_id' => $value->id,
                'type' => $type,
                'type_show' => $typeShow,
            ]);
        }
    }
    dd('default_product_group_option');
});
Route::get('/default_product_option', function(){
    $data = Product::all();
    $options = Option::all();
    foreach ($data as $product) {
        foreach ($options as $value) {
            OptionProduct::create([
                'product_id' => $product->id,
                'option_id' => $value->id,
            ]);
        }
    }
    dd('default_product_option');
});


Route::get('/admin/login', ['uses' => 'AdminController@getLogin', 'as' =>'login']);
Route::post('/admin/login', ['uses' => 'AdminController@postLogin']);
Route::post('/admin/logout', ['uses' => 'AdminController@postLogout', 'as' =>'logout']);

Route::group(['prefix' => '/admin', 'middleware' => 'auth:web'], function () {
    Route::get('/dashboard', 'AdminController@index');
    Route::get('/error', 'AdminController@getError');
    Route::get('/blank', 'AdminController@getBlank');
    Route::get('/tables', 'AdminController@getTables');
    Route::get('/charts', 'AdminController@getCharts');
    Route::get('/register', 'AdminController@getRegister');
    //Role
    Route::resource('/role', 'RoleController');
    //Tầng(level)
    Route::resource('/level', 'LevelController');
    //Category
    Route::resource('/category', 'CategoryController');
    //Table
    Route::resource('/table', 'TableController');
    //User
    Route::resource('/user', 'UserController');
    //Size
    Route::resource('/size', 'SizeController');
    
    //Material type: don vi tinh cua nguyen lieu(kg, g...)
    Route::resource('/material_type', 'MaterialTypeController');
    //Material
    Route::resource('/material', 'MaterialController');
    //Product
    Route::get('/uploadFile','CommonImagesController@index')->name('products.index');;
    Route::post('/uploadFile/file','CommonImagesController@store')->name('products.store');
    Route::resource('/products','ProductController');
    // product_size
    Route::get('/size_product/size/{size_id}','SizeProductController@size')->where(['size_id'=>'[0-9]+']);
    Route::resource('/size_product','SizeProductController');
    //Topping cho category
    Route::resource('/topping', 'ToppingController');
    //Topping cho product
    Route::get('/product_topping/{id}', 'ProductToppingController@list');
    Route::get('/product_topping/{id}/create', 'ProductToppingController@create');
    Route::post('/product_topping/{id}/create', 'ProductToppingController@store');
    Route::get('/product_topping/{id}/edit/{product_topping_id}', 'ProductToppingController@edit');
    Route::post('/product_topping/{id}/edit/{product_topping_id}', 'ProductToppingController@update');
    Route::post('/product_topping/{id}/destroy/{product_topping_id}', 'ProductToppingController@destroy');
    //config material cho size_product
    Route::get('/size_product/{size_product_id}/config_material', 'SizeProductMaterialController@list');
    Route::get('/size_product/{size_product_id}/config_material/create', 'SizeProductMaterialController@create');
    Route::post('/size_product/{size_product_id}/config_material/create', 'SizeProductMaterialController@store');
    Route::get('/size_product/{size_product_id}/config_material/{size_product_material_id}/edit', 'SizeProductMaterialController@edit');
    Route::post('/size_product/{size_product_id}/config_material/{size_product_material_id}/edit', 'SizeProductMaterialController@update');
    Route::post('/size_product/{size_product_id}/config_material/{size_product_material_id}/destroy', 'SizeProductMaterialController@destroy');

});

