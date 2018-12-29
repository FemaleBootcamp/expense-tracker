<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Expense Tracker</title>
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Custom Css -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" type="text/css" href="/css/main.css">
  </head>
  <body>
    <!-- Start Navbar -->
    <nav class="navbar navbar-default navbar-expand-lg navbar-light" style="margin-bottom: 0;">
    	<div class="navbar-header d-flex col">
    		<a class="navbar-brand" href="#">Expense<b>Tracker</b></a>
    	</div>

    	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
    		<ul class="nav navbar-nav navbar-right ml-auto">
          <li class="nav-item" style="margin: auto;">
            <b style="color: #ef5350">Username</b>
          </li>
    			<li class="nav-item">
    				<a class="nav-link" href="#">Log Out</a>
    			</li>
    		</ul>
    	</div>
    </nav>
    <!-- End Navbar -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="card" style="margin-top:50px; margin-bottom:50px;">
        <div class="header" style="padding-left:15px;">
          <h2>Expense <b style="color: #ef5350">Table</b></h2>
        </div>
        <div class="body" style="padding-left:15px;">
          <div class="table-responsive">
            <div class="row">
              <div class="col-sm-12">
                <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                  <thead>
                    <tr>
                      <th>Expense Title</th>
                      <th>Expense Type</th>
                      <th>Cost</th>
                      <th>Date</th>
                      <th>Attachment</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <td>Shopping for groceries</td>
                    <td>Home Expense</td>
                    <td>10 $</td>
                    <td>29.12.2018</td>
                    <td>link to the receipt</td>
                    <td style="width: 265px;">
                      <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                        <div class="btn-group" role="group" aria-label="First group" style="padding-right:5px;">
                          <button type="button" class="btn btn-info">View Details</button>
                        </div>
                        <div class="btn-group" role="group" aria-label="Second group" style="padding-right:5px;">
                          <button type="button" class="btn btn-warning">Edit</button>
                        </div>
                        <div class="btn-group" role="group" aria-label="Third group">
                          <button type="button" class="btn btn-danger">Delete</button>
                        </div>
                      </div>
                    </td>
                  </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Start Footer -->
    <div class="navbar navbar-default navbar-fixed-bottom" id="lab_social_icon_footer">
      <div class="container" style="padding-top: 10px;">
          <!-- Social buttons -->
        <div class="text-center center-block" style="margin: auto;">
             <a href="https://www.facebook.com/femalebc/"><i id="social-fb" class="fa fa-facebook-square fa-3x social"></i></a>
             <a href=""><i id="social-tw" class="fa fa-twitter-square fa-3x social"></i></a>
             <a href="mailto:#"><i id="social-em" class="fa fa-envelope-square fa-3x social"></i></a>
        </div>
      </div>
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3" style="margin: auto;">© 2018 Copyright:
          <a href="https://femalebootcamp.adevait.com/" style="color: #ef5350;"> Female Bootcamp</a>
        </div>
      </div>
      <!-- End Footer -->
  </body>
   <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
   <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
   <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>


  <script>
  $(document).ready( function () {
    $('#DataTables_Table_0').DataTable();
  } );
  </script>
</html>
