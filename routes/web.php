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
Route::get('application/home','ApplicationController@index')->name('application.home');
Route::get('application/create','ApplicationController@create')->name('application.create');
Route::post('application/store','ApplicationController@store')->name('application.store');
Route::get('application/search','ApplicationController@search')->name('application.search');
