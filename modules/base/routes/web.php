<?php
Route::group(['namespace' => 'APV\Base\Http\Controllers', 'middleware' => 'web'], function () {
    Route::group(['prefix' => '/'], function () {
        Route::get('/', [
            'as' => 'base.welcome',
            'uses' => 'WelcomeController@index'
        ]);
    });
});
