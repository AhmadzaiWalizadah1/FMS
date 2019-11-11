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
// route the welcome page
Route::get('/', function () {
  return view('welcome');
});
// Routes to the Authentication middlwares
Auth::routes();

// Route to the Home page
Route::get('/home', 'HomeController@index')->name('home');

// ADMIN GROUP
Route::group([ 'middleware' => 'auth' ], function() {
  // MAIN DASHBOARD
Route::get('/admin/attendance', 'HomeController@attendance')->name('attendance');

  // change the staff controller
// Route::get('/admin/staff', 'StaffController@index')->name('staff');
// Route::post('/admin/staff',[
//   'uses' => 'StaffController@store'
// ]);
Route::resource('/admin/staff', 'StaffController');
Route::get('/admin.staff','StaffController@store')->name('staff');
Route::post('/admin.staff',"StaffController@store")->name('staff');


  // other functionality
  Route::any('/search',function(){
    $q = Input::get ( 'q' );
    $user = Staff::where('Staff_ID','LIKE','%'.$q.'%')->orWhere('Name','LIKE','%'.$q.'%')->get();
    if(count($user) > 0)
    return view('admin.staff')->withDetails($user)->withQuery ( $q );
    else return view ('admin.staff')->withMessage('No Details found. Try to search again !');
  });

  Route::get ( '/', function () {
    return view ( 'welcome' );
  });

  Route::any ( '/search', function () {
    $q = Input::get ( 'q' );
    $user =Staff::where ( 'Staff_ID', 'LIKE', '%' . $q . '%' )
    ->orWhere ( 'Name', 'LIKE', '%' . $q . '%' )
    ->orWhere ( 'F_Name', 'LIKE', '%' . $q . '%' )
    ->orWhere ( 'Last_name', 'LIKE', '%' . $q . '%' )
    ->orWhere ( 'Position', 'LIKE', '%' . $q . '%' )
    ->orWhere ( 'Degree', 'LIKE', '%' . $q . '%' )
    ->orWhere ( 'Contact', 'LIKE', '%' . $q . '%' )->get ();
    if (count ( $user ) > 0)
    return view ( 'welcome' )->withDetails ( $user )->withQuery ( $q );
    else
    return view ( 'welcome' )->withMessage ( 'No Details found. Try to search again !' );
  } );
  // end of the OTHER search


  Route::get('/admin/transcript', 'HomeController@transcript')->name('transcript');
  Route::get('/admin/kankor', 'Kankor_ResultController@index')->name('kankor');
  Route::get('/admin/semister_result', 'HomeController@semister_result')->name('semister_result');
  Route::get('/admin/subject', 'HomeController@subject')->name('subject');
  Route::get('/admin/kankorForm', 'HomeController@kankorForm')->name('kankorForm');
  Route::get('/admin/sawaneh', 'HomeController@sawaneh')->name('sawaneh');
  Route::get('/admin/sawanehForm', 'HomeController@sawanehForm')->name('sawanehForm');
  Route::get('/admin/exam_result', 'HomeController@exam_result')->name('exam_result');
  Route::get('/admin/transcript_dari', 'HomeController@transcript_dari')->name('transcript_dari');
  Route::get('/admin/transcript_english', 'HomeController@transcript_english')->name('transcript_english');

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
