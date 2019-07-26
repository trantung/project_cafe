<?php
Route::group([
    'prefix' => 'api/v1/frontend',
    'namespace' => 'APV\Frontend\Http\Controllers\API',
    'middleware' => ['api'],
], function () {
    Route::get('home-page', 'FrontendApiController@getHomePage');
    Route::get('products/{product}', 'ProductApiController@getProductDetail');
    Route::get('categories/root-category-list', 'CategoryApiController@getRootCategoryList');
});
