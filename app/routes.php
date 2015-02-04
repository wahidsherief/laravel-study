<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/* Route pages */

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/home', function(){
	return View::make('pages.home');
});

Route::get('/about', function(){
	return View::make('pages.about');
});

Route::get('/service', function(){
	return View::make('pages.service');
});

Route::get('/contact', function(){
	return View::make('pages.contact');
});

Route::get('/login', function(){
	return View::make('pages.login');
});


/* Route post */

Route::post('login','LoginController@doLogIn');
Route::get('logout', 'LoginController@doLogout');

Route::get('admin', array(
	'before' => 'auth',
  	'uses' => 'AdminController@showAdmin',
  	'as' => 'pages.admin'
	)
);