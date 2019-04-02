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


Route::get('admin/login', 'Cms\AdminController@showloginForm')->name('admin.login');

Route::post('admin/login', 'Cms\AdminController@login')->name('admin.loginpost');