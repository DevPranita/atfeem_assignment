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

Route::get('/','App\Http\Controllers\LoginController@index')->name('login_view');
Route::get('/login','App\Http\Controllers\LoginController@index');
Route::post('/login','App\Http\Controllers\LoginController@login')->name('login');

Route::get('/register','App\Http\Controllers\LoginController@register')->name('register');
Route::post('/register','App\Http\Controllers\LoginController@store')->name('register_store');

Route::get('/logout','App\Http\Controllers\LoginController@logout')->name('logout')->middleware('auth');
Route::get('/home','App\Http\Controllers\DashboardController@dashboard')->name('home')->middleware('auth');

Route::post('/state','App\Http\Controllers\DashboardController@getState')->name('getState');
Route::post('/city','App\Http\Controllers\DashboardController@getCity')->name('getCity');