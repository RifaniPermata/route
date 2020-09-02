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
Route::prefix('Rifani')->group(function () {
	Route::get('/Fani', function () {
    return view('welcome');
	});

	Route::get('/Latihan', function () {
    echo "1. Latihan awal";
    echo '<p>Awal memahami route pada laravel</p>';
	});

	Route::redirect('/contact-us', '/Fani');
});

Route::fallback( function () {
    return "Maaf Salah alamat(Url)";
	});