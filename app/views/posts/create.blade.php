@extends('layouts.master')

@section('content')
    <form method="POST" action="{{{ action('PostsController@store') }}}">
        {{ $errors->first('title', '<span class="help-block">:message</span>') }}
        <input type="text" name="title" value="{{{ Input::old('title') }}}" placeholder="title">
        {{ $errors->first('body', '<span class="help-block">:message</span>') }}
        <input type="text" name="body" value="{{{ Input::old('body') }}}" placeholder="body">
        <button type="submit">Save Post</button>
    </form>
</form>
