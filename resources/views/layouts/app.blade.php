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

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="{{ url('vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ url('vendor/simple-line-icons/css/simple-line-icons.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">


    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{ url('device-mockups/device-mockups.min.css')}}">

    <!-- Custom styles for this template -->
    <link href="{{ url('css/new-age.css')}}" rel="stylesheet">


    <link rel="icon" type="image/png" href="{{ url('img/logo.png')}}" sizes="32x32" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><h2 style="font-weight:500;">Fantasy Soccer</h2></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            @guest
              <li class="nav-item">
                  <a class="nav-link" href="javascript:;"  data-toggle="modal" data-target="#loginModal">{{ __('Login') }}</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="javascript:;" data-toggle="modal" data-target="#registerModal">{{ __('Register') }}</a>
              </li>
              @else
                @if (Auth::user()->role_id === 1)
                  <li class="nav-item">
                      <a class="nav-link" href="{{ url('/admin/home') }}">{{ __('Dashboard') }}</a>
                  </li>
                @endif
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="javascript:;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();"><span class="fa fa-sign-out"></span>
                                  {{ __('Logout') }}
                              </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ url('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ url('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ url('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ url('js/new-age.min.js')}}"></script>
</html>
