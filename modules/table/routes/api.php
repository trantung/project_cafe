<?php
use Illuminate\Support\Facades\Auth;
Route::group([
    'prefix' => 'api/table',
    'namespace' => 'APV\Table\Http\Controllers\API',
    'middleware' => ['api', 'auth:api'],
], function () {
    Route::get('list_table', 'TableApiController@getList');
    Route::post('create_table', 'TableApiController@postCreate');
    Route::get('detail_table/{id}', 'TableApiController@getDetail');
    Route::post('edit_table/{id}', 'TableApiController@postEdit');
    Route::post('delete_table/{id}', 'TableApiController@postDelete');
});