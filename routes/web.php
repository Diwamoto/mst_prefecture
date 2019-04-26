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

Route::get('/update','PrefController@update');
Route::get('/delete','PrefController@delete');
Route::get('/add','PrefController@add');


Route::get('/search','PrefController@search');