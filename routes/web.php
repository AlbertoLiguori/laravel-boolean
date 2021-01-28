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

Route::get('/corso', function () {
    return view('corso');
})->name('corso');

Route::get('/dopoIlCorso', function () {
    return view('dopoIlCorso');
})->name('dopoIlCorso');

Route::get('/campGratuito', function () {
    return view('campGratuito');
})->name('campGratuito');

Route::get('/candidatiOra', function () {
    return view('candidatiOra');
})->name('candidatiOra');


Route::get('/dischi','DischiController@index')->name('dischi');

Route::get('/dischi/{id}', 'DischiController@show')->name('dischi.show');

Route::get('/utenti','UtentiController@index')->name('utenti');

Route::get('/utenti/{id}', 'UtentiController@show')->name('utenti.show');
