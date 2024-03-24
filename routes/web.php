<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('beranda');
// });

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', function () {
        return view('beranda');
    });
    Route::get('/login', function () {
        return view('auth.login');
    });
});
