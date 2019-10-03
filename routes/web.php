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

Route::get('/', 'ControllerCategory@index') -> name('index.category');
Route::get('/create', 'ControllerCategory@create') -> name('create.category');
Route::post('/', 'ControllerCategory@store') -> name('store.category');
