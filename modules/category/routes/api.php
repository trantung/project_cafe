<?php
use Illuminate\Support\Facades\Auth;
Route::group([
    'prefix' => 'api/cate',
    'namespace' => 'APV\Category\Http\Controllers\API',
    'middleware' => ['api', 'auth:api'],
], function () {
    Route::get('list_category', 'CategoryApiController@getList');
    Route::post('create_category', 'CategoryApiController@postCreate');
    Route::get('detail_category/{id}', 'CategoryApiController@getDetail');
    Route::post('edit_category/{id}', 'CategoryApiController@postEdit');
    Route::post('delete_category/{id}', 'CategoryApiController@postDelete');
});