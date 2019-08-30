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
