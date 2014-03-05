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

Route::get('/', 'AuthController@isLoggedIn');
Route::get('/index', 'PageController@Index');
Route::get('/login', 'AuthController@Login');
Route::get('/logout', 'AuthController@Logout');
Route::get('/register', 'AuthController@Register');
Route::post('/verify', 'AuthController@Verify');
Route::post('/proceed', 'AuthController@Proceed');