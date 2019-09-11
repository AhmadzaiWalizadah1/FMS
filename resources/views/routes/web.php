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

// ADMIN GROUP
Route::group([ 'middleware' => 'auth' ], function() {
  // MAIN DASHBOARD
  Route::get('/admin/attendance', 'HomeController@attendance')->name('attendance');
  Route::get('/admin/staff', 'HomeController@staff')->name('staff');

  Route::get('/admin/transcript', 'HomeController@transcript')->name('transcript');
  Route::get('/admin/kankor', 'Kankor_ResultController@index')->name('kankor');
  Route::get('/admin/semister_result', 'HomeController@semister_result')->name('semister_result');
  Route::get('/admin/subject', 'HomeController@subject')->name('subject');
  Route::get('/admin/kankorForm', 'HomeController@kankorForm')->name('kankorForm');
  Route::get('/admin/sawaneh', 'HomeController@sawaneh')->name('sawaneh');
  Route::get('/admin/sawanehForm', 'HomeController@sawanehForm')->name('sawanehForm');
  Route::get('/admin/exam_result', 'HomeController@exam_result')->name('exam_result');


  //post method
  Route::post('/admin/kankorForm', 'Kankor_ResultController@store')->name('store_kankor_form');

  // search students
  Route::get('/admin/kankor/search', 'Kankor_ResultController@student_search')->name('student_search');




  Route::get('admin', function () {
    return view('admin.dashboard') ;
  }) ;
  Route::get('/admin/classes', function () {
    return view('admin.classes') ;
  }) ;

  Route::get('admin/users', 'UsersController@index')->name('user.index') ;
});
