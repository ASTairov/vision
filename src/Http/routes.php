<?php

Route::group([
    'namespace' => 'ASTairov\Seat\Vision\Http\Controllers',
    'prefix' => 'vision'
], function () {
    Route::group([
        'middleware' => ['web', 'auth'],
    ], function () {
        Route::get('/', [
            'as'   => 'vision.view',
            'uses' => 'VisionController@getVisionView',
            'middleware' => 'bouncer:fitting.reportview'
        ]);
    });
});
