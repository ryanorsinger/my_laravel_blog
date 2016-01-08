@extends('layouts.master')

@section('content')
    <h1>Your guess was {{{ $userGuess }}}</h1>
    <h1>You rolled a {{{ $diceRoll }}}</h1>

    <h2>Let's play roll-dice</h2>
    <a class="btn btn-primary" href="{{{ action('HomeController@rollDice', array(1)) }}}">Guess 1</a>
    <a class="btn btn-primary" href="{{{ action('HomeController@rollDice', array(2)) }}}">Guess 2</a>
    <a class="btn btn-primary" href="{{{ action('HomeController@rollDice', array(3)) }}}">Guess 3</a>
    <a class="btn btn-primary" href="{{{ action('HomeController@rollDice', array(4)) }}}">Guess 4</a>
    <a class="btn btn-primary" href="{{{ action('HomeController@rollDice', array(5)) }}}">Guess 5</a>
    <a class="btn btn-primary" href="{{{ action('HomeController@rollDice', array(6)) }}}">Guess 6</a>

    @if ($diceRoll == $userGuess)
        <h2>You were right!</h2>
    @else
        <h2>You were wrong!!</h2>
    @endif
@stop
