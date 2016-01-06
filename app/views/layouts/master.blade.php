<!DOCTYPE html>
<html>
<head>
    <title>My Blog is Bloggy</title>
    
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    
    @yield('top-script')
</head>
<body>
    @yield('content')
    
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    
    @yield('bottom-script')
</body>
</html>
