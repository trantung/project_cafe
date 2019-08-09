<?php
use Illuminate\Support\Facades\Auth;
Route::group([
    'prefix' => 'api/size',
    'namespace' => 'APV\Size\Http\Controllers\API',
    'middleware' => ['api', 'auth:api'],
], function () {
    Route::get('list_size', 'SizeApiController@getList');
    Route::post('create_size', 'SizeApiController@postCreate');
    Route::get('detail_size/{id}', 'SizeApiController@getDetail');
    Route::post('edit_size/{id}', 'SizeApiController@postEdit');
    Route::post('delete_size/{id}', 'SizeApiController@postDelete');
    //config size product: 1 product có nhiều size sẽ có giá tiền khác nhau với từng size và sẽ được default là giá niêm yết cho sản phẩm đấy(trong config size product có checkbox chọn default)
    //thông tin size product với 1 size_product
    Route::get('list_size_product/{size_id}/{product_id}', 'SizeApiController@getListSizeProduct');
    Route::post('create_size_product/{size_id}/{product_id}', 'SizeApiController@postCreateSizeProduct');
    Route::get('detail_size_product/{size_id}/{product_id}', 'SizeApiController@getDetailSizeProduct');
    Route::post('edit_size_product/{size_id}/{product_id}', 'SizeApiController@postEditSizeProduct');
    Route::post('delete_size_product/{size_id}/{product_id}', 'SizeApiController@postDeleteSizeProduct');
});