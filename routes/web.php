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

Route::get('/', 'CourseController@index')->name('first');
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::get('/courses/{id}','CourseController@select');
Route::get('/detail/{id}','CourseController@detail');
Route::get('/register/{id}','CourseController@register');
Route::post('/course/add','AttendentController@save');
Route::get('/courses/admin/showcourses','AdminController@showcourses');
Route::get('/courses/admin/showattendents','AdminController@showattendents');
Route::get('/courses/admin//showlanguages','AdminController@showlanguages');
Route::get('/courses/admin/courseAdd','AdminController@courseAdd');
Route::post('/courses/admin/addCourses','AdminController@addCourses');
Route::get('/courses/admin/courseEdit/{id}','AdminController@courseEdit');
Route::post('/courses/admin/editCourses/{id}','AdminController@editCourses');
Route::get('/courses/admin/courseDelete/{id}','AdminController@courseDelete');
Route::get('/course/admin/showattendents','AdminController@showAttendents');
Route::get('/courses/admin/addAttendent','AdminController@addAttendent');
Route::post('/courses/admin/addAttendents','AdminController@attendentAdd');
Route::get('/courses/admin/attendentEdit/{id}','AdminController@attendentEdit');
Route::post('/courses/admin/editAttendents/{id}','AdminController@editAttendents');
Route::get('/courses/admin/attendentDelete/{id}','AdminController@attendentDelete');
Route::get('/courses/admin/showlanguages','AdminController@showlanguages');
Route::get('/courses/admin/languageAdd','AdminController@languageAdd');
Route::post('/courses/admin/addLanguages','AdminController@addLanguages');
Route::get('/courses/admin/languageupdate/{id}','AdminController@languageEdit');
Route::post('/courses/admin/editLanguage/{id}','AdminController@editLanguage');
Route::get('/courses/admin/languageDelete/{id}','AdminController@languageDelete');