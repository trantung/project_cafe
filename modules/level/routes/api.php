<?php
use Illuminate\Support\Facades\Auth;
Route::group([
    'prefix' => 'api/level',
    'namespace' => 'APV\Level\Http\Controllers\API',
    'middleware' => ['api', 'auth:api'],
], function () {
    Route::get('list_level', 'LevelApiController@getList');
    Route::post('create_level', 'LevelApiController@postCreate');
    Route::get('detail_level/{id}', 'LevelApiController@getDetail');
    Route::post('edit_level/{id}', 'LevelApiController@postEdit');
    Route::post('delete_level/{id}', 'LevelApiController@postDelete');
});