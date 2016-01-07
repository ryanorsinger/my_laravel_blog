@extends('layouts.master')

@section('content')
    <h1>You rolled a {{{ $diceRoll }}}</h1>
    <h1>Your guess was {{{ $userGuess }}}</h1>

    @if ($diceRoll == $userGuess)
        <h2>You were right!</h2>
    @else
        <h2>You were wrong!!</h2>
    @endif
@stop
