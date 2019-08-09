<?php
use Illuminate\Support\Facades\Auth;

//nguyen lieu
Route::group([
    'prefix' => 'api/material',
    'namespace' => 'APV\Material\Http\Controllers\API',
    'middleware' => ['api', 'auth:api'],
], function () {
    Route::get('list_material', 'MaterialApiController@getList');
    Route::post('create_material', 'MaterialApiController@postCreate');
    Route::get('detail_material/{id}', 'MaterialApiController@getDetail');
    Route::post('edit_material/{id}', 'MaterialApiController@postEdit');
    Route::post('delete_material/{id}', 'MaterialApiController@postDelete');
});
//don vi tinh(gram, ml, ...)
Route::group([
    'prefix' => 'api/material_type',
    'namespace' => 'APV\Material\Http\Controllers\API',
    'middleware' => ['api', 'auth:api'],
], function () {
    Route::get('list_material_type', 'MaterialTypeApiController@getList');
    Route::post('create_material_type', 'MaterialTypeApiController@postCreate');
    Route::get('detail_material_type/{id}', 'MaterialTypeApiController@getDetail');
    Route::post('edit_material_type/{id}', 'MaterialTypeApiController@postEdit');
    Route::post('delete_material_type/{id}', 'MaterialTypeApiController@postDelete');
});