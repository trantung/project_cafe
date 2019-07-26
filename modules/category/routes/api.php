<?php
use Illuminate\Support\Facades\Auth;
// Route::group([
//     'prefix' => 'api/v1/category',
//     'namespace' => 'APV\Category\Http\Controllers\API',
//     'middleware' => ['api'],
// ], function () {
//     Route::get('/root-category-list', 'CategoryApiController@getRootCategoryList');
// });

Route::group([
    'prefix' => 'api/cate',
    'namespace' => 'APV\Category\Http\Controllers\API',
    'middleware' => 'auth:admin',
], function () {
	Route::get('/test', function (){
		$test = Auth::admin();
		dd($test);
	});
    Route::get('/list', 'CategoryApiController@getList');
    Route::post('/create', 'CategoryApiController@postCreate');
});