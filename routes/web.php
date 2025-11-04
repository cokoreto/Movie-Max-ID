<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\Admin\MovieAdminController;


// Tambahan route untuk /home agar tidak 404
Route::get('/', function () {
    return view('home');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/moviepage', function () {
    return view('moviepage');
});

// Movie Steaming Route
Route::get('/spiderman', function () {
    return view('/movie_stream/spidermannwh');
});
