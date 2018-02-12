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

Route::group(['prefix' => 'student'], function(){
	Route::get('/votenew', 'StudentDashboardController@index');
	Route::get('/courses/specified', 'StudentDashboardController@showSpecifiedCourse');
	Route::get('/courses/party/{party}', 'StudentDashboardController@showPartyPages');

	Route::get('/courses/candidate/{candidate}', 'StudentDashboardController@showCandidate');
	
	Route::post('/votes', 'StudentDashboardController@store');

	// Route::get('/votenew', function(){
	// 	return view('studentviews.maincontent.vote');
	// });

	Route::get('/view/candidates', function(){
		return view('studentviews.maincontent.ViewCandidate');
	});

	Route::get('/view/parties', 'HomeController@displayProgramParties');

	
});



Route::get('storage/{filename}', function ($filename)
{
    $path = storage_path('public/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    

    return $response;
});



Route::group(['prefix' => 'api'], function(){
	Route::get('/get/allPosition', 'StudentDashboardController@showMainData');
});

Route::group(['prefix' => 'admin'], function(){
	Route::get('/login', 'AdminLoginController@showLogin');
	Route::post('/login', 'AdminLoginController@login');
	Route::get('/', 'AdminController@index');

	// posting candidates
	Route::post('/candidates', 'AdminController@store');
	// posting parties
	Route::post('/', 'AdminController@storeParty');
	// text burst winners
	Route::get('/send', 'AdminController@sendBurstSms');
	Route::get('/delete/{candidate}', 'AdminController@deleteCandidate');








	Route::get('/add', function(){
		return view('adminviews.admin_sub_views.AddCandidate');
	});
	Route::get('/view', function(){
		return view('adminviews.admin_sub_views.ViewCandidate');
	});

	// Parties
	Route::get('/add/parties', function(){
		return view('adminviews.admin_sub_views.AddParty');
	});
	Route::get('/view/parties', function(){
		return view('adminviews.admin_sub_views.ViewParty');
	});

});
