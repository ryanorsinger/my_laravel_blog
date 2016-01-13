<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->    <title>My Blog is Bloggy</title>

    <link rel="stylesheet" href="/bootstrap/bootstrap.min.css">

    @yield('top-script')
</head>
<body>
    <div class="container-fluid">
        <header class="row">
            <div class="col-sm-10 col-sm-offset-1">
                @include('partials.nav-bar')
            </div>
        </header>

        @if (Session::has('successMessage'))
            <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
        @endif
        @if (Session::has('errorMessage'))
            <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
        @endif

        <main class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                @yield('content')
            </div>
        </main>
    </div>

    <script src="/js/jquery-2.1.4.min.js"></script>
    <script src="/bootstrap/bootstrap.min.js"></script>

    @yield('bottom-script')
</body>
</html>
