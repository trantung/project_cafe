<?php
use Illuminate\Support\Facades\Auth;
Route::group([
    'prefix' => 'api/topping',
    'namespace' => 'APV\Topping\Http\Controllers\API',
    'middleware' => ['api', 'auth:api'],
], function () {
    Route::get('list_topping', 'ToppingApiController@getList');
    Route::post('create_topping', 'ToppingApiController@postCreate');
    Route::get('detail_topping/{id}', 'ToppingApiController@getDetail');
    Route::post('edit_topping/{id}', 'ToppingApiController@postEdit');
    Route::post('delete_topping/{id}', 'ToppingApiController@postDelete');
});