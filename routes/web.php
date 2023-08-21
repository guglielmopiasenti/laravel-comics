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

// Comics route
Route::get('/comics', function() {
    $products = config('comics');
    return view('products', compact('products'));
})->name('comics');

// Comic route
Route::get('/comic/{index}', function ($index) {
    $comics = config('comics');
    $comic = $comics[$index];

    return view('comic', compact('comic'));
})->name('comic');

// Movie's route
Route::get('/movies', function () {
    return view('movies');
})->name('movies');

// Tv's route
Route::get('/tv', function () {
    return view('tv');
})->name('tv');