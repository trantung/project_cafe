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
    Route::post('api_customer/register','CustomerApiController@apiRegister');

});

Route::group([
    'prefix' => 'api_customer/',
    'namespace' => 'APV\Customer\Http\Controllers\API',
], function () {
    Route::get('friend/friendList', 'CustomerApiController@getFriendList');
    Route::get('register', 'CustomerApiController@postRegister');
});