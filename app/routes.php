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

Route::get('/', 'HomeController@showWelcome');

Route::get('/resume', 'HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::get('/howdy/{name?}', 'HomeController@sayHello');

Route::get('rolldice/{guess}', 'HomeController@rollDice');

Route::get('login',  'HomeController@getLogin');
Route::post('login', 'HomeController@postLogin');
Route::get('logout', 'HomeController@getLogout');

Route::get('posts/manage', 'PostsController@managePosts');

Route::resource('/posts', 'PostsController');

Route::resource('tags', 'TagsController');

Route::get('/contact', 'HomeController@getContact');
Route::post('/contact', 'HomeController@doContact');

Route::get('/email-sent-successfully', 'HomeController@getEmailSentPage');
