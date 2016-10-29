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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/get',  ['uses' => 'UserController@index']);
Route::get('dashboard', function() {
  return View::make('dashboard');
});
Route::get('register', function() {
  return View::make('register');
});
Route::post('register', 'UserController@create');
//POST route
Route::post('login', 'UserController@login');

Route::get('social/login/redirect/{provider}', ['uses' => 'Auth\AuthController@redirectToProvider', 'as' => 'social.login']);
Route::get('social/login/{provider}', 'Auth\AuthController@handleProviderCallback');
Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');
//Route::get('auth/facebook/callback', 'Auth\AuthController@handleProviderCallback');
Route::get('logout', array('uses' => 'UserController@logout'));
