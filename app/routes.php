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

Route::get('orm-test', function ()
{
    // All posts(index)
    $posts = Post::all();
    // loop through to show each

    // Showing (show)
    $post = Post::find(1);
    echo $post->title;
    echo $post->body;

    // Deleting (destroy)
    $post = Post::find(5);
    $post->delete();

    //Saving (store)
    $post = new Post();
    $post->title = 'Some title';
    $post->body = 'We have body again';
    $post->save();

    // // Editing/Updating (update)
    $post = Post::find(2);
    $post->title = 'A better title 3';
    $post->save();

});
