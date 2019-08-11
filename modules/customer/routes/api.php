<?php
use Illuminate\Support\Facades\Auth;
Route::group([
    'prefix' => 'api/customer',
    'namespace' => 'APV\Customer\Http\Controllers\API',
    'middleware' => ['api', 'auth:api'],
], function () {
    Route::get('list_customer', 'CustomerApiController@getList');
    Route::post('create_customer', 'CustomerApiController@postCreate');
    Route::get('detail_customer/{id}', 'CustomerApiController@getDetail');
    Route::post('edit_customer/{id}', 'CustomerApiController@postEdit');
    Route::post('delete_customer/{id}', 'CustomerApiController@postDelete');
    Route::post('check_phone_customer', 'CustomerApiController@postCheckPhoneCustomer');
});