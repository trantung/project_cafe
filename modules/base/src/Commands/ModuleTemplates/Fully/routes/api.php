<?php
Route::group([
    'prefix' => 'api/v1/_NAME_LOWERCASE_',
    'namespace' => 'APV\_NAME_CAPITALIZE_\Http\Controllers\API',
    'middleware' => ['api'],
], function () {
    // Route here
});
