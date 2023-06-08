<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/comics', function () {
    return view('comics');
})->name('comics');

Route::get('/movies', function () {
    return view('error');
})->name('movies');

Route::get('/tv', function () {
    return view('error');
})->name('tv');

Route::get('/games', function () {
    return view('error');
})->name('games');

Route::get('/collectibles', function () {
    return view('error');
})->name('collectibles');

Route::get('/videos', function () {
    return view('error');
})->name('videos');

Route::get('/fans', function () {
    return view('error');
})->name('fans');

Route::get('/news', function () {
    return view('error');
})->name('news');

Route::get('/shop', function () {
    return view('error');
})->name('shop');
