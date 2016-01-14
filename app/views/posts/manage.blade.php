@extends('layouts.master')

@section('bottom-script')
    <script type="text/javascript" src="/js/angular.min.js"></script>
    <script type="text/javascript" src="/js/postsModule.js"></script>
@stop

@section('content')
    <div ng-app="posts">
        <div ng-controller="ManageController">
        </div>
    </div>
@stop
