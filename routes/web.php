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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('admin/register', 'Cms\AdminController@showregisterForm')->name('admin.register');

Route::post('admin/register', 'Cms\AdminController@register')->name('admin.registerpost');

Route::get('admin/login', 'Cms\AdminController@showloginForm')->name('admin.login');

Route::post('admin/login', 'Cms\AdminController@login')->name('admin.loginpost');

Route::get('admin/logout', 'Cms\AdminController@logout')->name('admin.logout');

Route::get('admin/news', 'Cms\NewsController@index')->name('admin.news');

Route::get('admin/edit/{news_id}', 'Cms\NewsController@edit')->name('news.edit');

Route::post('admin/edit/{news_id}', 'Cms\NewsController@edit')->name('news.editpost');
Route::post('admin/delete', 'Cms\NewsController@delete')->name('news.delete');