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


	Route::prefix('admin')->group(function () {
	Route::get('/Fani', function () {
    return view('welcome');
	});

	Route::get('/Coba', function () {
    echo '<h1 style="text-align: center"><u>Selamat datang di kelas XII RPL 1</u></h1>';
	});
	
    Route::get('/{nama}', function ($nama) {
	    echo $nama;
	});

});

Route::fallback( function () {
    return "Maaf Salah alamat(Url)";
	});