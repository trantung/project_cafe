<?php

// Route::group(['middleware' => ['api', 'multiauth:admin']], function () {
    // Route::get('api/user', function ($request) {
        // Get the logged admin instance
        // dd(111);
        // return $request->user(); // You can use too `$request->user('admin')` passing the guard.
    // });
// });

// Route::post('api/user/login', 'UserLoginController@login');
// dd('user check route');
Route::group([
    'prefix' => 'api/user',
    'namespace' => 'APV\User\Http\Controllers\API',
    'middleware' => ['api'],
], function () {
    Route::post('login', 'UserLoginController@login');
    // Route::post('login', 'AuthApiController@login');


});
