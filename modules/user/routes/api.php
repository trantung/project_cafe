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
    // Route::group([
    //     'prefix' => 'my-page',
    // ], function () {
    //     Route::get('/top', 'UserApiController@getMyPageTop');
    // });
});