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

Route::get('/', function()
{
	return View::make('hello');
});

// Adding the about route
Route::get('about', function() {
	return View::make('about');
});

// Using Controllers
Route::get('contact', 'PagesController@contact');

// Users Routes
Route::resource('users', 'UsersController');