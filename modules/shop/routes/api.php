<?php
Route::group([
    'prefix' => 'api/shop',
    'namespace' => 'APV\Shop\Http\Controllers\API',
    'middleware' => ['api', 'auth:api'],
], function () {
    Route::post('create_shop', 'ShopApiController@postCreate');
    Route::post('edit_shop/{id}', 'ShopApiController@postEdit');
    Route::post('delete_shop/{id}', 'ShopApiController@postDelete');
    Route::get('list_shop', 'ShopApiController@getList');
});