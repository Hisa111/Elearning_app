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
//category
Route::get('/admin/categories/make', 'AdminController@makecategories')->name('admin.makecategories');
Route::post('/admin/categories/post', 'CategoryController@post')->name('admin.postcategories');
Route::get('/admin/categories', "AdminController@categories")->name('admin.categorieslist');
Route::get('/admin/categories/edit/{id}', "AdminController@editcategories")->name('edit.editcategories');
Route::patch('/admin/categories/edit/{id}/post', 'CategoryController@editpost')->name('admin.editpostcategories');
Route::delete('/admin/categories/edit/{id}/delete', 'CategoryController@delete')->name('admin.deletecategories');
//value
Route::get('/admin/categories/{id}/value/list', 'AdminController@valuelist')->name('admin.valuelist');
Route::get('/admin/categories/{id}/value/make', 'AdminController@makevalue')->name('admin.makevalue');
Route::post('/admin/categories/{id}/{num}/value/post', 'QuestionController@post')->name('admin.postquestions');
Route::get('/admin/categories/{id}/{sec}/{num}/value/edit', 'AdminController@editvalue')->name('edit.editvalue');
Route::patch('/admin/categories/{id}/{num}/value/edit/post', 'QuestionController@editpost')->name('admin.editpostquestions');
Route::delete('/admin/categories/{id}/{sec}/value/delete', 'QuestionController@delete')->name('admin.deletevalue');
//answer
Route::post('/admin/answers/post', 'AnswerController@post')->name('admin.postanswers');
Route::patch('/admin/answers/edit/post', 'AnswerController@editpost');
//non admin
Route::get('/lesson/categories', 'HomeController@categories')->name('lesson.categories');
Route::get('/lesson/{id}/answers', 'HomeController@answers')->name('lesson.answers');
Route::post('/lesson/{id}/answers/{choice_id}/post', 'AnswerController@post')->name('lesson.answerpost');
Route::patch('/lesson/answers/delete', 'AnswerController@delete')->name('lesson.answerdelete');

Route::get('/lesson/{id}/result', "HomeController@result")->name('lesson.result');

Route::post('/lesson/{id}/create', 'LessonController@createLesson')->name('lesson.store');
