@extends('layouts.master')

@section('content')

    <h1>{{{ $post->title }}}</h1>
    <p>{{{ $post->body }}}</p>

    <p>Post created at: {{{ $post->created_at->diffForHumans() }}}</p>
    <p>Post created at: {{{ $post->created_at->format('l, F jS Y @ h:i:s A') }}}</p>

    {{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE')) }}
        <button class="btn btn-danger">Delete Post</button>

    {{ Form::close() }}

@stop
