<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('app.name', 'Fantasy Soccer') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ url('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="{{ url('vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ url('vendor/simple-line-icons/css/simple-line-icons.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">


    <link rel="icon" type="image/png" href="{{ url('img/logo.png')}}" sizes="32x32" />


    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{ url('device-mockups/device-mockups.min.css')}}">

    <!-- Custom styles for this template -->
    <link href="{{ url('css/new-age.css')}}" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
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

    <header class="masthead">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-lg-7 my-auto">
            <div class="header-content mx-auto">
              <h1 class="mb-5">Play World Class fantasy football. Simply sign-up and use your £95million budget to build your team to score points based on real life matches.</h1>
              <a  href="javascript:;"  data-toggle="modal" data-target="#loginModal" class="btn btn-outline btn-xl js-scroll-trigger">Start Now for Free!</a>
            </div>
          </div>
          <div class="col-lg-5 my-auto">
            <img src="{{ url('img/ooo.png')}}" class="img-responsive" height="500">
          </div>
        </div>
      </div>
    </header>

    <section class="download bg-primary text-center" id="download">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <h2 class="section-heading">Play anywhere, anytime!</h2>
            <p>Wherever you want to play Goal Fantasy Football, we've got it covered! You can play on desktop, on your tablet or you can download the app and be truly mobile, the choice is yours</p>
            
          </div>
        </div>
      </div>
    </section>

    <section class="features" id="features">
      <div class="container">
        <div class="section-heading text-center">
          <h2>Unlimited Features, Unlimited Fun</h2>
          <p class="text-muted">Check out what you can do with Fantasy Soccer!</p>
          <hr>
        </div>
        <div class="row">
          <div class="col-lg-4 my-auto">
            <img src="{{ url('img/7.png')}}" class="img-responsive" height="550">           
          </div>
          <div class="col-lg-8 my-auto">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-shuffle text-primary"></i>
                    <h3>WEEKLY TRANSFERS</h3>
                    <p class="text-muted">
Make transfers each gameround and monitor the unique player DAQ index to make profits and boost your budget by reviewing player prices throughout the tournament.
</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-cloud-upload text-primary"></i>
                    <h3>STAY UPDATED</h3>
                    <p class="text-muted">

View live scores, results and fixture details to keep track of what's happening on and off the pitch, all powered by Opta. Our feeds are updated in real time so you'll always be in touch with the very latest developments and fantasy football tips.</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-present text-primary"></i>
                    <h3>WIN GREAT PRIZES</h3>
                    <p class="text-muted">

Top the gameround and tournament long leaderboards in our World Cup competition and you could win some fantastic prizes.</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-people text-primary"></i>
                    <h3>PLAY WITH FRIENDS</h3>
                    <p class="text-muted">

Connect with Facebook and Twitter and you’ll get a league view of all your social friends. Join a friend's mini league or create your own or challenge other teams to head-to-head matches.
</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="cta">
      <div class="cta-content">
        <div class="container">
          <h2>Stop waiting.<br>Start playing.</h2>
          <a  href="javascript:;"  data-toggle="modal" data-target="#loginModal" class="btn btn-outline btn-xl js-scroll-trigger">Get Started!</a>
        </div>
      </div>
      <div class="overlay"></div>
    </section>

    <section class="contact bg-primary" id="contact">
      <div class="container">
        <h2>Follow us for Updates. <br /> We 
          <i class="fa fa-heart"></i>
          new friends!</h2>
        <ul class="list-inline list-social">
          <li class="list-inline-item social-twitter">
            <a href="#">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li class="list-inline-item social-facebook">
            <a href="#">
              <i class="fa fa-facebook"></i>
            </a>
          </li>
          <li class="list-inline-item social-google-plus">
            <a href="#">
              <i class="fa fa-google-plus"></i>
            </a>
          </li>
        </ul>
      </div>
    </section>

    <footer>
      <div class="container">
        <p>&copy; Copyright 2018 Fantasy Soccer. All Rights Reserved.</p>
        <br />
        <ul class="list-inline">
          <li class="list-inline-item">
            <a href="#">Privacy</a>
          </li>|
          <li class="list-inline-item">
            <a href="#">Terms</a>
          </li>|
          <li class="list-inline-item">
            <a href="#">FAQ</a>
          </li>
        </ul>
        <br />
        <p>
          Neither Fantasy Soccer nor Associates are affiliated with the Barclays Premier League, Uefa nor any of their sponsors.
        </p>
      </div>
    </footer>

    <div class='modals'>
      <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #2c2811 !important;color:#fff;">
        <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="    color: #2c2811 !important;
    border-radius: 100%;
    background-color: #ffffff;
    width: 60px;
    height: 60px; margin:0px;">
          <span aria-hidden="true">&times;</span> 
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('login.custom') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="loginemail" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="loginpassword" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-outline">
                                    {{ __('Login') }}
                                </button>

                                
                            </div>
                        </div>

                        <div class="form-group row" style="text-align:center !important;">
                          <center>
                          <a class="btn btn-link" href="{{ route('password.request') }}" style="text-align:center !important;">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                <a class="btn btn-link" href="javascript:;" data-dismiss="modal" data-toggle="modal" data-target="#registerModal" style="text-align:center !important;">
                                    {{ __('Don\'t have an account? Register') }}
                                </a>
                              </center>
                        </div>
                    </form>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #2c2811 !important;color:#fff;">
        <h4 class="modal-title" id="exampleModalLongTitle">Register</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="    color: #2c2811 !important;
    border-radius: 100%;
    background-color: #ffffff;
    width: 60px;
    height: 60px; margin:0px;">
          <span aria-hidden="true">&times;</span> 
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-outline">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                        <div class="form-group row" style="text-align:center !important;">
                          <div class="col-md-1"></div>
                                <div class="col-md-9">
                                <a class="btn btn-link" data-dismiss="modal" href="javascript:;"  data-toggle="modal" data-target="#loginModal" style="text-align:center !important;">
                                    {{ __('Already have an account? Login') }}
                                </a>
                              </div>
                        </div>
                    </form>
      </div>
    </div>
  </div>
</div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ url('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ url('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ url('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{ url('js/new-age.min.js')}}"></script>

  </body>

</html>
