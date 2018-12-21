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
