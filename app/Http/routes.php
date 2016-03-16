<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {

    Route::auth();

    Route::get('/home', 'HomeController@index');

	Route::get('/', function() {
    	return view('home');
	});

	Route::get('/contact', function() {
		return view('contact');
	});

	Route::get('/createBAP', function() {
		return view('createBAP');
	});

	Route::get('/facebook', function() {
		return view('facebook');
	});

	Route::get('/facebook-login', [
		'uses' => 'facebookController@facebookLogin',
		'as' => 'facebooklogin',
	]);

	Route::get('/facebook-callback', [
		'uses' => 'facebookController@facebookCallback',
		'as' => 'facebookcallback',
	]);

	Route::resource('/user', 'UserController');

	Route::resource('/post', 'PostController');

    Route::resource('/comment', 'CommentController');

	Route::get('/admin', function() {
		return 'admin';
	})->middleware('isadmin');

});

