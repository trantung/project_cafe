<?php
// Route::group([
//     'prefix' => 'api/v1/user',
//     'namespace' => 'APV\User\Http\Controllers\API',
//     'middleware' => ['api'],
// ], function () {
//     Route::post('login', 'AuthApiController@login');
//     Route::post('register/send', 'AuthApiController@sendRegister');
//     Route::post('register/confirm', 'AuthApiController@confirmRegister');
//     Route::post('register/resend-email', 'AuthApiController@resendEmailRegister');
//     Route::post('register/active/{code}', 'AuthApiController@active');
//     Route::post('reset-password/send-email', 'ResetPasswordApiController@sendEmail');
//     Route::post('reset-password/get-form/{token}', 'ResetPasswordApiController@getForm');
//     Route::post('reset-password/change-password', 'ResetPasswordApiController@changePassword');
//     Route::get('reset-password/get-captcha', 'ResetPasswordApiController@getCaptcha');
// });

// Route::group([
//     'prefix' => 'api/v1/user',
//     'namespace' => 'APV\User\Http\Controllers\API',
//     'middleware' => ['api', 'auth:api'],
// ], function () {
//     Route::post('logout', 'AuthApiController@logout');
//     Route::group([
//         'prefix' => 'my-page',
//     ], function () {
//         Route::get('/top', 'UserApiController@getMyPageTop');
//         Route::get('/personal-info', 'UserApiController@getPersonalInfo');
//         Route::put('/personal-info', 'UserApiController@changePersonalInfo');
//         Route::post('/change-password', 'UserApiController@changePassword');
//         Route::post('/get-token-leave', 'UserApiController@getTokenLeave');
//         Route::post('/leave-service', 'UserApiController@leaveService');
//         Route::group([
//             'prefix' => 'credit-card',
//         ], function () {
//             Route::get('/top', 'UserCreditCardApiController@getTopOfCreditCard');
//             Route::post('/register', 'UserCreditCardApiController@register');
//             Route::post('/delete', 'UserCreditCardApiController@delete');
//         });
//     });
// });

// dd('admin check route');

// Route::group([
//     'prefix' => 'api/admin',
//     'namespace' => 'APV\Admin\Http\Controllers\API',
//     'middleware' => ['api'],
// ], function () {
//     Route::post('login', 'AdminLoginController@login');
// });