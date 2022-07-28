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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'App\Http\Controllers\RestoController@index' );
Route::get('/home', 'App\Http\Controllers\RestoController@home' );
Route::get('/about', 'App\Http\Controllers\RestoController@about' );
Route::get('/admin', 'App\Http\Controllers\RestoController@admin' );
Route::get('/booking', 'App\Http\Controllers\RestoController@booking' );
Route::get('/contact', 'App\Http\Controllers\RestoController@contact' );
Route::get('/login', 'App\Http\Controllers\RestoController@login' );
Route::get('/register', 'App\Http\Controllers\RestoController@register' );