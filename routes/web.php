<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Home's route
Route::get('/', function () {
    return view('home');
})->name('home');

// Movie's route
Route::get('/movies', function () {
    return view('movies');
})->name('movies');

// Tv's route
Route::get('/tv', function () {
    return view('tv');
})->name('tv');