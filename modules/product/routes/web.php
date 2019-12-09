<?php

//use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'APV\Product\Http\Controllers', 'middleware' => 'web'], function () {
    Route::group(['prefix' => '/products'], function () {
        // Route here
    });
});
