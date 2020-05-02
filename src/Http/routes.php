<?php
/*
Route::group([
    'namespace' => 'ASTairov\Seat\Vision\Http\Controllers',
    'middleware' => 'bouncer:superuser',
    'prefix' => 'vision'
], function () {
    Route::get('/vision', function () {
        return view('vision');
    });
});
*/

Route::group([
    'namespace' => 'ASTairov\Seat\Vision\Http\Controllers',
    'prefix' => 'vision'
], function () {
    Route::group([
        'middleware' => 'bouncer:superuser',
    ], function () {
        Route::get('/', [
            'as'   => 'vision.view',
            'uses' => 'VisionController@getVisionView',
        ]);
    });
});
