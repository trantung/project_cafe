<?php

Route::group([
    'prefix' => 'api/user',
    'namespace' => 'APV\User\Http\Controllers\API',
    'middleware' => ['api'],
], function () {
    Route::post('login', 'UserLoginController@login');
});

Route::group([
    'prefix' => 'api/user',
    'namespace' => 'APV\User\Http\Controllers\API',
    'middleware' => ['api', 'auth:api'],
], function () {
    Route::post('logout', 'UserLoginController@logout');
    Route::get('list_role', 'UserApiController@getListRole');
    Route::post('delete_user/{id}', 'UserApiController@postDeleteUser');
    Route::group([
        'prefix' => '/shop',
    ], function () {
        Route::post('/create_user', 'UserApiController@postCreate');
    });
});