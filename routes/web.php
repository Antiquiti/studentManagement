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

Route::get('/create', function () {
    return view('createuser');
});

Route::get('/edit', function () {
    return view('edit');
});

Route::get('/', "StudentController@create");
Route::post('/store', 'StudentController@store');
Route::post('/delete/{id}', 'StudentController@destroy');
Route::post('/edit/{id}', 'StudentController@edit');
Route::post('/update/{id}','StudentController@update');
