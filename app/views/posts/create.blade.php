@extends('layouts.master')

@section('content')

    {{ Form::open(array('action' => 'PostsController@store')) }}

        <div class="form-group {{ ($errors->has('title')) ? 'has-error' : '' }}">
            {{ $errors->first('title', '<div class="alert alert-danger" role="alert">:message</div>') }}

            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter your title']) }}

        </div>

        <div class="form-group">
            <label class="control-label" for="body">Enter blog</label>
            {{ $errors->first('body', '<div class="alert alert-danger" role="alert">:message</div>') }}

            {{ Form::textarea('body', null, ['class' => 'form-control']) }}

            <textarea id="body" class="form-control" name="body" placeholder="Enter your blog here">{{ Input::old('body') }}</textarea>
        </div>

        {{ Form::select('size', array('L' => 'Large', 'S' => 'Small')) }}

        <button class="btn btn-primary">Enter post</button>
    {{ Form::close() }}
@stop
