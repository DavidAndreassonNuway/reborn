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
	return View::make('index');
});


Route::get('login', 'HomeController@showLogin');
Route::get('register', 'HomeController@showRegister');
Route::get('about', 'HomeController@showAbout');


Route::post('register', 'HomeController@postRegister');
Route::post('login', 'HomeController@postLogin');