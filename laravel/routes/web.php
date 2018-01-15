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

/*
	this functions is for authentications
*/
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



/*
	this sections is for student voting transaction pages
*/
Route::get('/student', 'StudentDashboardController@index');

Route::get('/student/courses/specified', 'StudentDashboardController@showSpecifiedCourse');

Route::get('/student/courses/party/{party}', 'StudentDashboardController@showPartyPages');

Route::post('/student/votes', 'StudentDashboardController@store');


/*
	this sections is for admin functionalities
*/
Route::get('/admin/login', 'AdminLoginController@showLogin');
Route::post('/admin/login', 'AdminLoginController@login');
Route::get('/admin', 'AdminController@index');