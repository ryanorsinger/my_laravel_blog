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
    $data = array(
        'name' => 'Codeup',
        'cohorts' => array(
            'Arches',
            'Badlands',
            'Carlsbad',
            'Denali',
            'Everglades',
            'Franklin',
            'Glacier',
            'Hapmton',
            'Ike',
            'Apollo',
            'Balboa'
        )
    );
	return View::make('hello', $data);
});

Route::get('/resume', function()
{
    return View::make('resume');
});

Route::get('/portfolio', function()
{
    return View::make('portfolio');
});


Route::get('/howdy/{name?}', function($name = '')
{
   $data = ['name' => $name, 'cohorts' => []];

   return View::make('hello', $data);
});

Route::get('rolldice/{guess}', function($guess)
{
    $value = mt_rand(1, 6);
    
    $data = array(
        'userGuess' => $guess,
        'diceRoll'  => $value
    );
    
    return View::make('roll-dice', $data);
});
