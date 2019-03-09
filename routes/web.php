<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('index', 'KtpsController@index')->name('ktp.index')->middleware('auth');
Route::get('index/cretae', 'KtpsController@create')->name('ktp.create')->middleware('auth');
Route::post('index', 'KtpsController@store')->name('ktp.store')->middleware('auth');
