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

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
    Route::resource('/courses','CoursesController');
    Route::resource('/duration','DurationTypesController');
    Route::resource('/trainers','TrainersController');
    Route::resource('/enquiries','EnquiriesController');
    Route::resource('/bookings','BookingsController');
    Route::resource('/shift','ShiftController');
    Route::resource('/payment/students','StudentsPaymentController');
    Route::resource('/payment/staffs/trainers','TrainersPaymentController');


    Route::get('userajax', 'DataController@userajax');
    Route::get('userdata', 'DataController@userdata');
    Route::get('courseajax', 'DataController@courseajax');
    Route::get('coursedata', 'DataController@coursedata');
    Route::get('enquiryajax', 'DataController@enquiryajax');
    Route::get('enquirydata', 'DataController@enquirydata');
    Route::get('trainerajax', 'DataController@trainerajax');
    Route::get('trainerdata', 'DataController@trainerdata');

});
Auth::routes();

Route::get('/admin', 'DashboardController@index')->name('dashboard');



