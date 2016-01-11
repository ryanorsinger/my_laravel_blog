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

Route::get('/posts/search/{search}', 'PostsController@search');
Route::get('/posts/my-posts/{username}', 'PostsController@showAuthorPosts');
Route::resource('/posts', 'PostsController');


// These are the manually added routes that perform the same work
// As our Route::resource(/posts', 'PostsController');
//
// Route::get('/posts', 'PostsController@index');
// Route::get('/posts/create', 'PostsController@create');
// Route::get('/posts/{id}', 'PostsController@show');
// Route::get('/posts/{id}/edit', 'PostsController@edit');
// Route::post('/posts', 'PostsController@store');
// Route::put('/posts/{post}', 'PostsController@update');
// Route::delete('/posts/{post}', 'PostsController@destroy');
