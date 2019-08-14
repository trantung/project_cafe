<?php
use Illuminate\Support\Facades\Auth;

//nguyen lieu
Route::group([
    'prefix' => 'api/order',
    'namespace' => 'APV\Order\Http\Controllers\API',
    'middleware' => ['api', 'auth:api'],
], function () {
    //hủy đơn hàng
    Route::post('cancel_order/{order_id}', 'OrderApiController@postCancel');
    Route::get('list_order', 'OrderApiController@getList');
    Route::post('create_order', 'OrderApiController@postCreate');
    Route::get('detail_order/{id}', 'OrderApiController@getDetail');
    Route::post('edit_order/{id}', 'OrderApiController@postEdit');
    Route::post('delete_order/{id}', 'OrderApiController@postDelete');
    //param: table_qr_code. URL: field_wanted: file can lay vi du: name
    Route::post('table/qr_code/{field_wanted}', 'OrderApiController@postGetValueByQrCodeTable');
    //bếp confirm là làm order thì ko được edit
});
