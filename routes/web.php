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

Route::get('/','PrefController@index');
Route::get('/search','PrefController@search');

Route::post('/update','PrefController@edit');
Route::post('/delete','PrefController@confirm');

Route::match(['get','post'],'/edit','PrefController@edit');
Route::post('/confirm','PrefController@confirm');
Route::post('/complete','PrefController@complete');

