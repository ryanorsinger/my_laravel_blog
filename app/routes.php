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

Route::resource('/posts', 'PostsController'); // RESTful API (crud)

Route::get('/form', 'HomeController@showForm');
Route::post('/handle', 'HomeController@handleForm');

Route::get('/test', function() {

    dd(Input::get('name', 'Bob'));

    // dd(Input::all());
    // dd(Input::get('today'));
    // if (Input::has('name')) {
    //     dd('yes it exists ' . Input::get('name'));
    // } else {
    //     dd('no it does not');
    // }


});















// C = POST (create)
// R = GET (index, show, create form, edit form)
// U = PUT (update)
// D = DELETE (delete)












