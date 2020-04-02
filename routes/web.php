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
use Illuminate\Support\Facades\Route;
use APV\Order\Models\Order;

Route::get('/admin/login', ['uses' => 'AdminController@getLogin', 'as' =>'login']);
Route::post('/admin/login', ['uses' => 'AdminController@postLogin']);
Route::post('/admin/logout', ['uses' => 'AdminController@postLogout', 'as' =>'logout']);

Route::group(['prefix' => '/admin', 'middleware' => 'auth:web'], function () {
    Route::get('/update_order_code', function (){
        $order = Order::all();
        foreach ($order as $key => $value) {
            $code = renderCodeOrder();
            Order::where('id', $value->id)->update(['code' => $code]);
        }
        dd('done');
    });
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
    //Schoolbocks
    Route::resource('/schoolbock', 'SchoolbocksController');
    //User
    Route::resource('/user', 'UserController');
    //Class
    Route::resource('/class', 'ClassController');
    
    //Material type: don vi tinh cua nguyen lieu(kg, g...)
    Route::resource('/material_type', 'MaterialTypeController');
    //Material
    Route::resource('/material', 'MaterialController');
    //Product
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
    //Order
    Route::get('/order/process/{id}', 'OrderController@process');
    Route::resource('/order', 'OrderController');

});

