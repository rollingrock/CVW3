<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@mock');

Route::get('mock', 'WelcomeController@mock');

Route::get('mock_pilot', 'WelcomeController@mock_pilot');
Route::get('mock_mission', 'WelcomeController@mock_mission');

//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);
