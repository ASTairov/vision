<?php
Route::group([
    'namespace' => 'ASTairov\Seat\Vision\Http\Controllers',
    'prefix' => 'vision'
], function () {
    Route::get('/vision', function () {
        return view('vision');
    });
});
