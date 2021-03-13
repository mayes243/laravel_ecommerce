<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="description" content="Metro Admin Template.">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!-- end: Meta -->
    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Login</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- start: CSS -->
    <link id="bootstrap-style" href="{{asset('login/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('login/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
    <link id="base-style" href="{{asset('login/css/style.css')}}" rel="stylesheet">
    <link id="base-style-responsive" href="{{asset('login/css/style-responsive.css')}}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    <!-- end: CSS -->
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- start: Favicon -->
    <link rel="icon" href="{{asset('login/img/logo.png')}}">
    <!-- end: Favicon -->
    <style type="text/css">
            body { background: url({{asset('login/img/bg-login.jpg')}}) !important; }
        </style>
</head>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
