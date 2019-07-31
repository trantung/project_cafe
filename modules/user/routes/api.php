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
    Route::get('list_user', 'UserApiController@getListUser');
    Route::post('create_user', 'UserApiController@postCreate');
    Route::post('edit_user/{id}', 'UserApiController@postEdit');
    Route::post('delete_user/{id}', 'UserApiController@postDeleteUser');
    Route::post('change_password_user/{id}', 'UserApiController@postChangePassword');
    Route::post('reset_password_user/{id}', 'UserApiController@postResetPassword');
});