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
Route::get('/home/profile', 'HomeController@profile')->name('layouts.profile');

Route::get('/admin/categories/make', 'AdminController@makecategories')->name('admin.makecategories');
Route::get('/admin/categories', "AdminController@categories")->name('admin.categories');
Route::get('/admin/answers/make', 'AdminController@makeanswers')->name('admin.makeanswers');

Route::get('/lesson/categories', 'HomeController@categories')->name('lesson.categories');
Route::get('/lesson/answers', 'HomeController@answers')->name('lesson.answers');