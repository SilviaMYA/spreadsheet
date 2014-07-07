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

Route::get('/', array('before' => 'auth', function () {
			return Redirect::to('transactions');
		}));

// =======================================
// Login Routes
// =======================================

//shows the login form
Route::get('login', array(
		'uses' => 'HomeController@showLogin',
	));

Route::post('login', array(
		'uses' => 'HomeController@doLogin',
	));

Route::get('logout', array(
		'uses' => 'HomeController@doLogout',
	));

// =======================================
// UserCRUD
// =======================================

Route::group(array('before' => 'auth'), function () {
		Route::resource('users', 'UsersController');
	});


// =======================================
// TRANSACTION ROUTES
// =======================================

Route::group(array('before' => 'auth'), function () {
		Route::resource('transactions', 'TransactionController');
	});

// =======================================
// CATCH C'HALL
// =======================================
App::missing(function ($exception) {
		return Redirect::to('transactions');
	});
