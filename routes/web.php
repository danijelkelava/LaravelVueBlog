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

Route::get('/', 'FrontEndController@index')->name('home');

Route::get('/blog', 'FrontEndController@show')->name('blog');

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/admin/posts', 'AdminController@showPosts')->name('admin.posts');



Route::resource('admin/permission', 'AdminController\\PermissionController');
Route::resource('admin/role', 'AdminController\\RoleController');