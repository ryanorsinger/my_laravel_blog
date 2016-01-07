<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function rollDice($guess)
	{
		$value = mt_rand(1, 6);

	    $data = array(
	        'userGuess' => $guess,
	        'diceRoll'  => $value
	    );

	    return View::make('roll-dice', $data);
	}

	public function sayHello($name = '')
	{
		$data = ['name' => $name, 'cohorts' => []];

   		return View::make('hello', $data);
	}

	public function showResume()
	{
		return View::make('resume');
	}

	public function showPortfolio()
	{
		return View::make('portfolio');
	}

	public function showWelcome()
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
	}

}
