<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/test', 'TestController@index');

Auth::routes();

Route::get('admin','AdminController@index');
Route::get('admin/karyawan','KaryawanController@index');
Route::get('/home', 'HomeController@index');