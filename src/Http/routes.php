<?php
Route::group([
    'namespace' => 'ASTairov\Seat\Vision\Http\Controllers',
    'middleware' => ['web','auth'],
    'prefix' => 'vision'
], function () {
    Route::get('/vision', function () {
        return view('vision');
    });
});
