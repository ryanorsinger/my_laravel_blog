@extends('layouts.master')

@section('content')

    {{ Form::open(array('action' => 'PostsController@store')) }}

        <div class="form-group {{ ($errors->has('title')) ? 'has-error' : '' }}">
            {{ $errors->first('title', '<div class="alert alert-danger" role="alert">:message</div>') }}

            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', Input::old('title'), ['class' => 'form-control', 'placeholder' => 'Enter your title']) }}

        </div>

        <div class="form-group">
            {{ $errors->first('body', '<div class="alert alert-danger" role="alert">:message</div>') }}
            
            {{ Form::label('body', 'Body') }}
            {{ Form::textarea('body', Input::old('body'), ['class' => 'form-control']) }}
        </div>

        <button class="btn btn-primary">Enter post</button>
    {{ Form::close() }}
@stop
