<?php
Route::group([
    'prefix' => 'api/product',
    'namespace' => 'APV\Product\Http\Controllers\API',
    'middleware' => ['api', 'auth:api'],
], function () {
    Route::get('/search', 'ProductApiController@search');
    Route::get('list_product', 'ProductApiController@getList');
    Route::post('create_product', 'ProductApiController@postCreate');
    Route::get('detail_product/{id}', 'ProductApiController@getDetail');
    Route::post('edit_product/{id}', 'ProductApiController@postEdit');
    Route::post('delete_product/{id}', 'ProductApiController@postDelete');
    Route::post('create_product_topping/{id}', 'ProductApiController@postCreateProductTopping');
});
Route::group([
    'prefix' => 'api_customer/product',
    'namespace' => 'APV\Product\Http\Controllers\API',
], function () {
    Route::get('productList', 'CustomerProductApiController@getList');
    // Route::get('productList', 'CustomerProductApiController@getList');
});