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


Route::get('/', 'App\Http\Controllers\HomeController@index')->name('list');
Route::get('/create', 'App\Http\Controllers\UserController@index')->name('create');
Route::get('/edit/{id}', 'App\Http\Controllers\UserController@edit')->name('edit');

Route::post('/create/save', 'App\Http\Controllers\UserController@save')->name('save');
Route::put('/update/{user}', 'App\Http\Controllers\UserController@update')->name('update');
Route::get('/delete/{id}', 'App\Http\Controllers\UserController@destroy')->name('delete');