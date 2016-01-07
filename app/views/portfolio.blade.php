@extends('layouts.master')

@section('content')
    <div class="page-header">
        <h1>Here is my Portfolio</h1>
        <a href="{{{ action('HomeController@showResume') }}}">See the resume</a>
    </div>
@stop

@section('bottom-script')
    <script src="/js/portfolio.js"></script>
@stop
