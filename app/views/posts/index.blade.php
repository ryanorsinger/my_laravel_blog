@extends('layouts.master')

@section('content')

    @foreach($posts as $post)
        <h1><a href="{{{ action('PostsController@show', $post->id) }}}">{{{ $post->title }}}</a></h1>
        <p>{{{ $post->body }}} </p>
    @endforeach
@stop
