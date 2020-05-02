<?php
Route::group([
    'namespace' => 'ASTairov\Seat\Vision\Http\Controllers',
    'middleware' => 'bouncer:superuser',
    'prefix' => 'vision'
], function () {
    Route::get('/vision', function () {
        return view('vision');
    });
});
