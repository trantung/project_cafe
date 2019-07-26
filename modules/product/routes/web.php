<?php
Route::group(['namespace' => 'APV\Product\Http\Controllers', 'middleware' => 'web'], function () {
    Route::group(['prefix' => '/product'], function () {
        // Route here
    });
});
