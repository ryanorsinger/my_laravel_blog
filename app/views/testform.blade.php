@extends('layouts.master')

@section('content')
    <form method="POST" action="{{{ action('HomeController@handleForm') }}}">
      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{{ Input::old('email') }}}">
      </div>
      <div class="form-group">
        <label for="first_name">First name</label>
        <input type="text" name="first_name" class="form-control" id="first_name" placeholder="Enter First name" value="{{{ Input::old('first_name') }}}">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
      </div>
      <input type="checkbox" name="test" value="{{{ Input::old('test') }}}"> test<br>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
@stop