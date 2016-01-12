@extends('layouts.master')

@section('content')
    {{ Form::open(array('action' => array('PostsController@update', $post->id), 'method' => 'PUT')) }}

        <div class="form-group {{ ($errors->has('title')) ? 'has-error' : '' }}">
            <label class="control-label" for="title">Title {{ $errors->first('title', '<span class="error">:message</span>') }}</label>
            
            <input id="title" class="form-control " type="text" name="title" placeholder="Enter your title here" value="{{{ $post->title }}}">
        </div>

        <div class="form-group">
            <label class="control-label" for="body">Enter blog</label>
            {{ $errors->first('body', '<div class="alert alert-danger" role="alert">:message</div>') }}
            <textarea id="body" class="form-control" name="body" placeholder="Enter your blog here">{{{ $post->body }}}</textarea>
        </div>

        <button class="btn btn-primary">Enter post</button>
    {{ Form::close() }}
@stop