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
    //coverlist: image con và cả video(thiếu video cho sp)
    //them kieu type cho product de tra ve theo kieu: 1: keo, 2: kieu tag, 3: checkbox, type_show: 1 hoac 2
    Route::get('productDetail', 'CustomerProductApiController@getDetail');
    //add product to cart
    Route::post('addProduct', 'CustomerProductApiController@addProduct');
    //get list product by customer_id
    //param: customer_id, customer_token
    Route::post('cart/list_product', 'CustomerProductApiController@cartListProduct');

});