@extends('layouts.master')

@section('content')
    {{ Form::open(array('action' => 'HomeController@postLogin')) }}
    
        <div class="form-group">
            {{ Form::label('email', 'eMail') }}
            {{ Form::email('email', Input::old('email'), ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password', ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::submit('Log In', array('class' => 'btn btn-primary')) }}
        </div>
    
    {{ Form::close() }}
@stop
