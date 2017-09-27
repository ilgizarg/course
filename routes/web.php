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

Route::get('/courses','CourseController@all')->name('courses');
Route::get('/course/add', 'CourseController@add')->name('addcourse');
Route::post('/course/add', 'CourseController@store')->name('addcourse');


Route::get('/course/{id}','CourseController@index')->name('course')->where(['id'=>'[0-9]+']);
Route::get('/course/view/{id}','CourseController@view')->name('courseview')->where(['id'=>'[0-9]+']);

Route::get('/users','UsersController@all')->name('users');
Route::get('/user/{id}','UsersController@profile')->name('user');
Route::get('/profile','ProfileController@index')->name('profile');

Route::get('/groups','GroupController@all')->name('groups');
Route::get('/group/{id}','GroupController@group')->name('group');
Route::get('/group/{id}/members','GroupMembersController@index')->name('groupmembers');

Route::get('/roles','RoleController@index')->name('roles');
Route::get('/access','AccessController@index')->name('access');






