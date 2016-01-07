@extends('layouts.master')

@section('top-script')
    <link rel="stylesheet" type="text/css" href="resume.css">
@stop

@section('content')
    <div class="page-header">
        <h1>Here is my Resume</h1>
        <a href="{{{ action('HomeController@showPortfolio') }}}">See portfolio of work here</a>
    </div>
@stop
