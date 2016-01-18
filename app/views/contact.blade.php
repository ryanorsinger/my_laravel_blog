@extends('layouts.master')

@section('content')

    {{ Form::open(array('action' => 'HomeController@doContact')) }}

        <div class="form-group">
            {{ Form::label('from', 'Your name') }}
            {{ Form::text('from', null, array('class' => 'form-control', 'placeholder' => 'Hi, what\'s your name?')) }}
        </div>

        <div class="form-group">
            {{ Form::label('email', 'Your email') }}
            {{ Form::text('email', null, array('class' => 'form-control', 'placeholder' => 'Enter your email address')) }}
        </div>
        <div class="form-group">
            {{ Form::label('subject', 'Subject') }}
            {{ Form::text('subject', null, array('class' => 'form-control', 'placeholder' => 'Your message subject')) }}
        </div>
        <div class="form-group">
            {{ Form::label('body', 'Message Body') }}
            {{ Form::textarea('body', null, array('class' => 'form-control', 'rows' => '4', 'placeholder' => 'Your complete message')) }}
        </div>

        {{ Form::submit('Send email!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

@stop
