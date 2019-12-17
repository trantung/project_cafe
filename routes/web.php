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
    // sản phẩm controller
    Route::resource('/products','ProductController');
    // product_size
    Route::resource('/size_product','SizeProductController');
    Route::get('/size_product/size/{size_id}','SizeProductController@size')->where(['size_id'=>'[0-9]+']);
    //Topping cho category
    Route::resource('/topping', 'ToppingController');

});

