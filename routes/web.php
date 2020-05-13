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
Route::post('/admin/categories/post', 'CategoryController@post')->name('admin.postcategories');
Route::get('/admin/categories', "AdminController@categories")->name('admin.categorieslist');
Route::get('/admin/categories/edit', "AdminController@editcategories")->name('edit.editcategories');
Route::patch('/admin/categories/edit/post', 'CategoryController@editpost')->name('admin.editpostcategories');

Route::post('/admin/questions/post', 'QuestionController@post')->name('admin.postquestions');
Route::patch('/admin/questions/edit/post', 'QuestionController@editpost')->name('admin.editpostquestions');

Route::get('/admin/lessonvalue/make', 'AdminController@makevalue')->name('amin.makevalue');
Route::get('/admin/lessonvalue/edit', 'AdminController@editvalue')->name('edit.editvalue');

Route::post('/admin/choices/post', 'ChoiceController@post')->name('admin.postchoices');
Route::patch('/admin/choices/edit/post', 'ChoiceController@editpost')->name('admin.editpostchoices');

Route::post('/admin/answers/post', 'AnswerController@post')->name('admin.postanswers');
Route::patch('/admin/answers/edit/post', 'AnswerController@editpost');

Route::get('/lesson/categories', 'HomeController@categories')->name('lesson.categories');
Route::get('/lesson/answers', 'HomeController@answers')->name('lesson.answers');
Route::get('/lesson/result', "HomeController@result")->name('lesson.result');
