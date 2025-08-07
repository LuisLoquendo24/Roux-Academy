<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsistenteController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/artists', function () {
    return view('artists');
})->name('artists');

Route::get('/schedule', function () {
    return view('schedule');
})->name('schedule');

Route::get('/venue', function () {
    return view('venue');
})->name('venue');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::resource('asistentes', AsistenteController::class);





