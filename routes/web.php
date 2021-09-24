<?php

// admin page
Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () {
    Route::get('file-manager', 'FileManagerController@index');
});


// MediaManager internal routes
Route::group([
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
], function () {
    ctf0\MediaManager\MediaRoutes::routes();
    Route::get('open-file/{path}','MediaController@openFile')->where('path','.*');
});