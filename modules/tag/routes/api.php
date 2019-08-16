<?php
use Illuminate\Support\Facades\Auth;
Route::group([
    'prefix' => 'api/tag',
    'namespace' => 'APV\Tag\Http\Controllers\API',
    'middleware' => ['api', 'auth:api'],
], function () {
    Route::get('list_tag', 'TagApiController@getList');
    Route::post('create_tag', 'TagApiController@postCreate');
    Route::get('detail_tag/{id}', 'TagApiController@getDetail');
    Route::post('edit_tag/{id}', 'TagApiController@postEdit');
    Route::post('delete_tag/{id}', 'TagApiController@postDelete');
   
    Route::get('list_tag_product/{tag_id}', 'TagApiController@getListTagProduct');
    Route::post('create_tag_product/{tag_id}/{product_id}', 'TagApiController@postCreateTagProduct');
    Route::get('detail_tag_product/{tag_id}/{product_id}', 'TagApiController@getDetailTagProduct');
    Route::post('edit_tag_product/{tag_id}/{product_id}', 'TagApiController@postEditTagProduct');
    Route::post('delete_tag_product/{tag_id}/{product_id}', 'TagApiController@postDeleteTagProduct');
});