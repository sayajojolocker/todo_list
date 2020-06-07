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

Route::get('/', 'TodoController@index')->name('index');
Route::post('/create', 'TodoController@create')->name('create');
Route::post('/delete', 'TodoController@delete')->name('delete');
Route::post('/finish', 'TodoController@finish')->name('finish');
Route::post('/refinish', 'TodoController@refinish')->name('refinish');
