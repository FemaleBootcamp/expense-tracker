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

    <script type="text/javascript">
    	// Prevent dropdown menu from closing when click inside the form
    	$(document).on("click", ".navbar-right .dropdown-menu", function(e){
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
            <ul class="nav navbar-nav navbar-right ">
                <li class="nav-item">
                    <div>
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/home') }}" class="btn btn-lg btn-danger">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="btn  mr-4 btn-danger text-white" style="background: white">Login</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-danger text-white" style="background: white" >Register</a>
                                @endif
                            @endauth
                        @endif
                    </div>

    			</li>
    		</ul>
    	</div>

    </nav>
    <!-- End Navbar -->

    <div class="container-fluid" style="padding: 0 0;">
      <div class="firstdiv">
        <div class="row" style="margin: 10px 50px;">
          <div class="col-xs-12 text-center">
            <div class="col-xs-12 col-md-4">
              <img src="\imgs\unnamed.jpg" alt="expense tracker model">
            </div>
            <div class="col-xs-12 col-md-8">
              <h5 id='Home'>Expense <b style="color: #ef5350">Tracker</b></h5>
              <h1>Let us take care that <br> you stick to a budget and therefore <b style="color: #ef5350">SAVE MONEY</b></h1>
            </div>
          </div>
        </div>
        </div>
        <div class="row">
          <div class="col-xs-12 text-center" style="padding:0 100px 30px">
            <h2 id='OurMission'><b style="color: #ef5350">Our Mission</b></h2>
            <p>Most people nowadays know the importance of keeping track of their finances and spending habits. That being said, many people still don't bother to do it.
              Our App offers a simple way to track your expenses. It lets you record your expenses sort of like a checkbook register (by date, including a description, etc.),
              but has separate columns for different expense categories for recording and totaling your expenses.
              It provides insights into your spending habits.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 text-center" style="padding:0 100px 30px">
            <h2 id='AboutUs'><b style="color: #ef5350">About Us</b></h2>
            <p>We are group of young enthusiasts whose passion is programming and with our work we want to to make people's lives easier. Meet out team:</p>
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
