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

	public function showWelcome()
	{
	    return View::make('hello');
	}

	public function sayHello($name = '')
	{
		$data = ['name' => $name, 'cohorts' => []];

   		return View::make('hello', $data);
	}

	public function rollDice($userGuess)
	{
		$diceRoll = mt_rand(1, 6);

	    $data = array(
	        'userGuess' => $userGuess,
	        'diceRoll'  => $diceRoll
	    );

	    return View::make('roll-dice', $data);
	}

	public function showResume()
	{
		return View::make('resume');
	}

	public function showPortfolio()
	{
		return View::make('portfolio');
	}

	public function showForm()
	{
		return View::make('testform');
	}

	public function handleForm()
	{
		return Redirect::back()->withInput();
		// dd(Input::all());
	}

	public function getLogin()
	{
		return View::make('login');
	}
	public function postLogin()
	{
		$email    = Input::get('email');
		$password = Input::get('password');
		
		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
			Session::flash('successMessage', 'Welcome to the blog, user!');
		    return Redirect::intended('/posts/create');
		} else {
		    // login failed, go back to the login screen
		    Session::flash('errorMessage', 'Login Failed! Please check your username & password and try again.');
		    return Redirect::back()->withInput();
		}
	}
	public function getLogout()
	{
		Auth::logout();
		Session::flash('successMessage', 'Thank you, come again!');
		return Redirect::action('PostsController@index');
	}
}





