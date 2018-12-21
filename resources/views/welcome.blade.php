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

    <style type="text/css">
    	body{
    		font-family: 'Varela Round', sans-serif;
    	}
    	.form-control {
    		box-shadow: none;
    		font-weight: normal;
    		font-size: 13px;
    	}
    	.form-control:focus {
    		border-color: #ef5350;
    		box-shadow: 0 0 8px rgba(0,0,0,0.1);
    	}
    	.navbar-header.col {
    		padding: 0 !important;
    	}
    	.navbar {
    		background: #fff;
    		padding-left: 16px;
    		padding-right: 16px;
    		border-bottom: 1px solid #dfe3e8;
    		border-radius: 0;
    	}
    	.navbar .navbar-brand, .navbar .navbar-brand:hover, .navbar .navbar-brand:focus {
    		padding-left: 0;
    		font-size: 20px;
    		padding-right: 50px;
    	}
    	.navbar .navbar-brand b {
    		font-weight: bold;
    		color: #ef5350;
    	}
    	.navbar .form-inline {
            display: inline-block;
        }
    	.navbar .nav li {
    		position: relative;
    	}
    	.navbar .nav li a {
    		color: #888;
    	}
    	.navbar .nav .btn-primary, .navbar .nav .btn-primary:active {
    		color: #fff;
    		background: #ef5350;
    		padding-top: 8px;
    		padding-bottom: 6px;
    		vertical-align: middle;
    		border: none;
    	}
    	.navbar .nav .btn-primary:hover, .navbar .nav .btn-primary:focus {
    		color: #fff;
    		outline: none;
    		background: #e53935;
    	}
    	.navbar .navbar-right li:first-child a {
    		padding-right: 30px;
    	}
    	.navbar .nav-item i {
    		font-size: 18px;
    	}
    	.navbar .dropdown-item i {
    		font-size: 16px;
    		min-width: 22px;
    	}
    	.navbar ul.nav li.active a, .navbar ul.nav li.open > a {
    		background: transparent !important;
    	}
    	.navbar .nav .get-started-btn {
    		min-width: 120px;
    		margin-top: 8px;
    		margin-bottom: 8px;
    	}
    	.navbar ul.nav li.open > a.get-started-btn {
    		color: #fff;
    		background: #e53935 !important;
    	}
    	.navbar .navbar-form {
    		border: none;
    	}
    	.navbar .dropdown-menu.form-wrapper {
    		width: 280px;
    		padding: 20px;
    		left: auto;
    		right: 0;
        font-size: 14px;
    	}
    	.navbar .dropdown-menu.form-wrapper a {
    		color: #ef5350;
    		padding: 0 !important;
    	}
    	.navbar .dropdown-menu.form-wrapper a:hover{
    		text-decoration: underline;
    	}
    	.navbar .form-wrapper .hint-text {
    		text-align: center;
    		margin-bottom: 15px;
    		font-size: 13px;
    	}
    	.navbar .form-wrapper .btn, .navbar .form-wrapper .btn:hover {
    		color: #fff;
        margin: 0;
    		padding: 0 !important;
    		font-size: 13px;
    		border: none;
    		transition: all 0.4s;
    		text-align: center;
    		line-height: 34px;
    		width: 100%;
    		text-decoration: none;
        }
    	.navbar .btn-primary {
    		background: #507cc0;
    	}
    	.navbar .btn-primary:hover {
    		background: #4676bd;
    	}
    	.navbar .btn-info {
    		background: #64ccf1;
    	}
    	.navbar .btn-info:hover {
    		background: #4ec7ef;
    	}
    	.navbar .btn i {
    		margin-right: 5px;
    		font-size: 16px;
    		position: relative;
    		top: 2px;
    	}
    	.navbar .form-wrapper .form-footer {
    		text-align: center;
    		padding-top: 10px;
    		font-size: 13px;
    	}
    	.navbar .form-wrapper .form-footer a:hover{
    		text-decoration: underline;
    	}
    	.navbar .form-wrapper .checkbox-inline input {
    		margin-top: 3px;
    	}
      .navbar .checkbox-inline {
    		font-size: 13px;
    	}
    	.navbar .navbar-right .dropdown-toggle::after {
    		display: none;
    	}
    	@media (min-width: 1200px){
    		.form-inline .input-group {
    			width: 300px;
    			margin-left: 30px;
    		}
    	}
    	@media (max-width: 768px){
    		.navbar .dropdown-menu.form-wrapper {
    			width: 100%;
    			padding: 10px 15px;
    			background: transparent;
    			border: none;
    		}
    		.navbar .form-inline {
    			display: block;
    		}
    		.navbar .input-group {
    			width: 100%;
    		}
    		.navbar .nav .btn-primary, .navbar .nav .btn-primary:active {
    			display: block;
    		}
    	}

      /* Social Icons */

      #lab_social_icon_footer {
        padding: 40px 0;
        background-color: #dedede;
      }

      #lab_social_icon_footer a {
        color: #333;
      }

      #lab_social_icon_footer .social:hover {
        -webkit-transform: scale(1.1);
        -moz-transform: scale(1.1);
        -o-transform: scale(1.1);
      }

      #lab_social_icon_footer .social {
        -webkit-transform: scale(0.8);
        /* Browser Variations: */

        -moz-transform: scale(0.8);
        -o-transform: scale(0.8);
        -webkit-transition-duration: 0.5s;
        -moz-transition-duration: 0.5s;
        -o-transition-duration: 0.5s;
      }
      /*
          Multicoloured Hover Variations
      */

      #lab_social_icon_footer #social-fb:hover {
        color: #3B5998;
      }

      #lab_social_icon_footer #social-tw:hover {
        color: #4099FF;
      }

      #lab_social_icon_footer #social-em:hover {
        color: #f39c12;
      }

    </style>
    <script type="text/javascript">
    	// Prevent dropdown menu from closing when click inside the form
    	$(document).on("click", ".navbar-right .dropdown-menu", function(e){
    		e.stopPropagation();
    	});
    </script>
  </head>
  <body>
    <!-- Start Navbar -->
    <nav class="navbar navbar-default navbar-expand-lg navbar-light">
    	<div class="navbar-header d-flex col">
    		<a class="navbar-brand" href="#">Expense<b>Tracker</b></a>
    	</div>

    	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
    		<ul class="nav navbar-nav">
    			<li class="nav-item"><a href="#" class="nav-link">Home</a></li>
    			<li class="nav-item"><a href="#" class="nav-link">About</a></li>
    			<li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
    		</ul>
    		<ul class="nav navbar-nav navbar-right ml-auto">
    			<li class="nav-item">
    				<a data-toggle="dropdown" class="nav-link dropdown-toggle" href="#">Login</a>
    				<ul class="dropdown-menu form-wrapper">
    					<li>
    						<form action="/examples/actions/confirmation.php" method="post">
    							<div class="form-group">
    								<input type="text" class="form-control" placeholder="Username" required="required">
    							</div>
    							<div class="form-group">
    								<input type="password" class="form-control" placeholder="Password" required="required">
    							</div>
    							<input type="submit" class="btn btn-primary btn-block" value="Login">
    							<div class="form-footer">
    								<a href="#">Forgot Your password?</a>
    							</div>
    						</form>
    					</li>
    				</ul>
    			</li>
    			<li class="nav-item">
    				<a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle get-started-btn mt-1 mb-1">Sign up</a>
    				<ul class="dropdown-menu form-wrapper">
    					<li>
    						<form action="/examples/actions/confirmation.php" method="post">
    							<p class="hint-text">Fill in this form to create your account!</p>
    							<div class="form-group">
    								<input type="text" class="form-control" placeholder="Username" required="required">
    							</div>
    							<div class="form-group">
    								<input type="password" class="form-control" placeholder="Password" required="required">
    							</div>
    							<div class="form-group">
    								<input type="password" class="form-control" placeholder="Confirm Password" required="required">
    							</div>
    							<div class="form-group">
    								<label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms &amp; Conditions</a></label>
    							</div>
    							<input type="submit" class="btn btn-primary btn-block" value="Sign up">
    						</form>
    					</li>
    				</ul>
    			</li>
    		</ul>
    	</div>
    </nav>
    <!-- End Navbar -->

    <div>
      This is some Content
    </div>

    <!-- Start Footer -->
    <div class="navbar navbar-default navbar-fixed-bottom" id="lab_social_icon_footer">
      <div class="container" style="padding-top: 10px;">
          <!-- Social buttons -->
        <div class="text-center center-block">
             <a href="https://www.facebook.com/bootsnipp"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
             <a href="https://twitter.com/bootsnipp"><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
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
