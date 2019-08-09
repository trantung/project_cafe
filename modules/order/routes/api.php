<?php
use Illuminate\Support\Facades\Auth;

//nguyen lieu
Route::group([
    'prefix' => 'api/order',
    'namespace' => 'APV\Order\Http\Controllers\API',
    'middleware' => ['api', 'auth:api'],
], function () {
    Route::get('list_order', 'OrderApiController@getList');
    Route::post('create_order', 'OrderApiController@postCreate');
    Route::get('detail_order/{id}', 'OrderApiController@getDetail');
    Route::post('edit_order/{id}', 'OrderApiController@postEdit');
    Route::post('delete_order/{id}', 'OrderApiController@postDelete');
});
