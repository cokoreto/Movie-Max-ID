<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;


// Tambahan route untuk /home agar tidak 404
Route::get('/', function () {
    return view('home');
});
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');

Route::get('/signup', [SignupController::class, 'create']);
Route::post('/signup', [SignupController::class, 'store'])->name('signup.store');

Route::get('/login', function () {
    return view('login');
});

Route::get('/librarymovie', function () {
    return view('librarymovie/librarymovie');
});

// login authenticate
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
// logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// protect moviepage with simple session check
Route::get('/moviepage', function () {
    if (!session('user_id')) {
        return redirect('/login');
    }
    return view('moviepage');
});

// Movie Steaming Route
Route::get('/spiderman', function () {
    return view('/movie_stream/spidermannwh');
});

Route::get('/wolverine', function () {
    return view('/movie_stream/wolverine');
});

Route::get('/world_war_z', function () {
    return view('/movie_stream/world_war_z');
});

Route::get('/loki', function () {
    return view('/movie_stream/loki');
});

Route::get('/john_wick', function () {
    return view('/movie_stream/john_wick');
});

Route::get('/iron_man', function () {
    return view('/movie_stream/iron_man');
});

Route::get('/harry_potter', function () {
    return view('/movie_stream/harry_potter');
});

Route::get('/doctor_strange', function () {
    return view('/movie_stream/doctor-strange');
});

Route::get('/deadpoolxwolverine', function () {
    return view('/movie_stream/deadpoolxwolfreen');
});

Route::get('/deadpool', function () {
    return view('/movie_stream/deadpool');
});

Route::get('/captain_america', function () {
    return view('/movie_stream/captain_america');
});

Route::get('/bumblebee', function () {
    return view('/movie_stream/bumblebee');
});

Route::get('/nyan', function () {
    return view('nyan');
});