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
    //dd(config('fumetti'));
    $fumetti = config('fumetti');
    // dd($fumetti);
    return view('comics', compact('fumetti'));
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


Route::get('/shop', function () {
    return view('error');
})->name('shop');

Route::get('/comics-detail/{slug}', function ($slug) {
    $fumetti = config('fumetti');

    $fumetto_array = array_filter($fumetti, fn($item) => $item['slug'] === $slug);
    //dd($fumetto_array);
    $fumetto = $fumetto_array[array_key_first($fumetto_array)];

    return view('comics-detail', compact('fumetto'));
})->name('comics-detail');


