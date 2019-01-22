<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Expense Tracker</title>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/main.css">

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@2.1.6/dist/vue.js"></script>

    <script type="text/javascript">
        // Prevent dropdown menu from closing when click inside the form
        $(document).on("click", ".navbar-right .dropdown-menu", function (e) {
            e.stopPropagation();
        });
    </script>
</head>
<body>
<!-- Start Navbar -->
<nav class="navbar navbar-default navbar-expand-lg navbar-light" style="margin-bottom: 0;">
    <div class="navbar-header d-flex col">
        <a class="navbar-brand" href="#">Expense<b>Tracker</b></a>
    </div>

    <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
        <ul class="nav navbar-nav">
            <li class="nav-item"><a href="#Home" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#OurMission" class="nav-link">Our Mission</a></li>
            <li class="nav-item"><a href="#AboutUs" class="nav-link">About Us</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right ml-auto">


            @if(Auth::guest())
                <li class="nav-item">

                    <a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Login</a>
                    <ul class="dropdown-menu form-wrapper">
                        <li>


                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group">

                                    <input id="email" placeholder="Email" type="email"
                                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                           value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                    @endif
                                </div>

                                <div class="form-group">

                                    <input id="password" placeholder="Password" type="password"
                                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                    @endif

                                </div>

                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember">

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <button type="submit" class="btn btn-danger">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </form>


                        </li>
                    </ul>
                </li>

                <li class="nav-item">

                    <a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle get-started-btn mt-1 mb-1">Sign up</a>
                    <ul class="dropdown-menu form-wrapper">
                        <li>


                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <p class="hint-text">Fill in this form to create your account!</p>
                                <div class="form-group">

                                    <input id="name" placeholder="Username" type="text"
                                           class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name"
                                           value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                    @endif
                                </div>

                                <div class="form-group ">

                                    <input id="email" placeholder="Email" type="email"
                                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                           value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                    @endif

                                </div>

                                <div class="form-group">
                                    <input id="password" placeholder="Password" type="password"
                                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                    @endif
                                </div>


                                <div class="form-group ">

                                    <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control"
                                           name="password_confirmation" required>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-xs-12">
                                        <button type="submit" class="btn btn-danger">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>


                            </form>

                        </li>
                    </ul>
            @else
                <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Expenses dashboard</a></li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endif
        </ul>
        </li>
        </ul>

        </div>
    </div>
</nav>
<!-- End Navbar -->

<div class="container-fluid" style="padding: 0 0;">
    <div class="firstdiv">
        <div class="row" style="margin: 10px 50px;">
            <div class="col-xs-12">
                <div class="col-xs-12 col-md-4">
                    <img src="{{ asset('imgs/unnamed.jpg') }}" alt="expense tracker model" style="width: 100%">
                </div>
                <div class="col-xs-12 col-md-8  text-center" style="padding-top: 60px;">
                    <h5 id='Home'>Expense <b style="color: #ef5350">Tracker</b></h5>
                    <h1>Let us take care that <br> you stick to a budget and therefore <b style="color: #ef5350">SAVE MONEY</b></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 text-center" style="padding:0 100px 30px">
            <h2 id='OurMission'><b style="color: #ef5350">Our Mission</b></h2>
            <p>Most people nowadays know the importance of keeping track of their finances and spending habits. That being said, many people still
                don't bother to do it.
                Our App offers a simple way to track your expenses. It lets you record your expenses sort of like a checkbook register (by date,
                including a description, etc.),
                but has separate columns for different expense categories for recording and totaling your expenses.
                It provides insights into your spending habits.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 text-center" style="padding:0 100px 30px">
            <h2 id='AboutUs'><b style="color: #ef5350">About Us</b></h2>
            <p>We are group of young enthusiasts whose passion is programming and with our work we want to to make people's lives easier. Meet out
                team:</p>
            <div class="col-xs-12 col-md-4 text-center">
                <h4><b style="color: #ef5350">Andrea Mileska</b></h4>
                <p>Bachelor of Computer Techologies at FEIT-Skopje.</p>
            </div>
            <div class="col-xs-12 col-md-4 text-center">
                <h4><b style="color: #ef5350">Simona Petrovska</b></h4>
                <p>Studies Computer Sciences at FINKI-Skopje.</p>
            </div>
            <div class="col-xs-12 col-md-4 text-center">
                <h4><b style="color: #ef5350">Elena</b></h4>
                <p>Studies Computer Sciences at FINKI-Skopje.</p>
            </div>
        </div>
    </div>
</div>


<!-- Start Footer -->
<div class="navbar navbar-default navbar-fixed-bottom" id="lab_social_icon_footer">
    <div class="container" style="padding-top: 10px;">
        <!-- Social buttons -->
        <div class="text-center center-block">
            <a href="https://www.facebook.com/femalebc/"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
            <a href=""><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
            <a href="mailto:#"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
        </div>
    </div>
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
        <a href="https://femalebootcamp.adevait.com/" style="color: #ef5350;"> Female Bootcamp</a>
    </div>
</div>
<!-- End Footer -->

</body>
</html>
