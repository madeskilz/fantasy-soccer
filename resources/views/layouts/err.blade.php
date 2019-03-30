<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Fantasy Soccer') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ url('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="{{ url('css/new-age.css')}}" rel="stylesheet">


    <link rel="icon" type="image/png" href="{{ url('img/logo.png')}}" sizes="32x32" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" style="background-color:#6c757d;">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="{{url('/')}}"><h2 style="font-weight:500;">Fantasy Soccer</h2></a>
      </div>
    </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
