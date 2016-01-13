@extends('layouts.master')

@section('content')

    @foreach($posts as $post)
        <h2>{{{ $post->title }}}</h2>
        <p>{{{ $post->body }}}</p>
    @endforeach

    {{ $posts->links() }}

    <p><small>{{ $posts->getPerPage() }} of {{ $posts->getTotal() }}</small></p>
@stop

