<?php
Route::group([
    'prefix' => 'api/product',
    'namespace' => 'APV\Product\Http\Controllers\API',
    'middleware' => ['api'],
], function () {
	Route::post('login',function(){
		dd('product');
	});
    Route::get('/search', 'ProductApiController@search');
});
