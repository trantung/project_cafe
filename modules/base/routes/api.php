<?php

Route::group([
    'prefix' => 'api/v1',
    'namespace' => 'APV\Base\Http\Controllers\API',
    'middleware' => ['api'],
], function () {
    Route::get('welcome', 'WelcomeController@index');
});
