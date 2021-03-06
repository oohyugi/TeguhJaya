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

Route::get('/admin','AdminController@index');
Route::group(['middleware'=> ['web']],function(){

	Route::resource('/admin/karyawan','KaryawanController');
});

Route::group(['middleware'=> ['web']],function(){

	Route::resource('admin/gudang','GudangController');
});

// Route::get('admin/tambahkaryawan','KaryawanController@create');
Route::get('/home', 'HomeController@index');
