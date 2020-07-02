<?php
use Illuminate\Support\Facades\Auth;
Route::group([
    'prefix' => 'api/promotion',
    'namespace' => 'APV\Promotion\Http\Controllers\API',
    'middleware' => ['api', 'auth:api'],
], function () {
    Route::get('list_promotion', 'PromotionApiController@getList');
    Route::post('create_promotion', 'PromotionApiController@postCreate');
    Route::get('detail_promotion/{id}', 'PromotionApiController@getDetail');
    Route::post('edit_promotion/{id}', 'PromotionApiController@postEdit');
    Route::post('delete_promotion/{id}', 'PromotionApiController@postDelete');
});
Route::group([
    'prefix' => 'api_customer/voucher',
    'namespace' => 'APV\Promotion\Http\Controllers\API',
], function () {
    //danh sach voucher
    //param: customer_id, customer_token
    Route::get('list', 'VoucherApiController@voucherGetList');
    //chi tiet 1 voucher
    //param: customer_id, customer_token, voucher_id
    Route::get('detail', 'VoucherApiController@voucherGetDetail');
    //Kiểm tra voucher_code
    //param: customer_id, customer_token, voucher_code
    Route::post('check_code', 'VoucherApiController@voucherCheckCode');
    //Áp dụng voucher
    //param: customer_id, customer_token, voucher_code
    Route::post('apply_code', 'VoucherApiController@voucherApplyCode');
});