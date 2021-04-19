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
Route::resource('/about', 'AboutController');
Route::resource('/mahasiswa', 'MahasiswaController');
Route::get('/generate','MahasiswaController@generate');
Route::get('/getdatachunk','MahasiswaController@getdatachunk');
Route::get('/getdatanochunk','MahasiswaController@getdatanochunk');

