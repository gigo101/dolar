<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Dolar Outsourcing</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="stylesheets/style.css">
</head>
<body>

<div class="wrapper">
    <div>
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dollar Outsourcing</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                           <li>
                           <a href="">
                               Register
                            </a>
                        </li>
                          <li>
                           <a href="">
                               Login
                            </a>
                        </li>
                         <li>
                           <a href="">
                               Services
                            </a>
                        </li>
                        <li>
                           <a href="">
                               Contact
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

<main role="main" style="" class="main1">

  <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="container">
      <h1 class="display-3 company-heading">Dolar Outsourcing</h1>
      <p class="headline">Your trusted logistics solutions provider.</p>
      <button class="btn btn-info req-pickup center-block" data-toggle="modal" data-target="#loginModal">REQUEST A PICKUP</button>

    </div>

<!-- Request a Pickup Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="LoginModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModal">Login / Signup</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Username</label>
          <input type="text" class="form-control" placeholder="Username">
        </div>

        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" placeholder="Password">
        </div>

        <p>Don't have an account? <a href="#"><span id="registertxt" style="font-weight: bold;">Register</span></a></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="save">Login</button>
      </div>
    </div>
  </div>
</div>


<!-- TEst Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="registerModalLabel">Register</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="registerCustomer">
      <div class="modal-body"> 
        <div class="form-group">
          <label>Company/Customer Name</label>
          <input type="text" class="form-control" placeholder="Company/Customer Name" required>
        </div>  
        <div class="form-group">
          <label>Username</label>
          <input type="text" class="form-control" placeholder="Username" name="username" required>
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" placeholder="Password" name="password" required>
        </div>
        <div class="form-group">
          <label>Repeat Password</label>
          <input type="password" class="form-control" placeholder="Repeat Password" required>
        </div>
         <div class="form-group">
          <label>Contact Number</label>
          <input type="text" class="form-control" placeholder="Contact Number" name="contactNumber" required>
        </div>
        <div class="form-group">
          <label>Address</label>
          <input type="text" class="form-control" placeholder="Address" name="address" required>
        </div>
        <input style="width: 400px;" type="submit" name="" value="Save" class="btn btn-primary" id="submit">

        <button style="width: 400px;" type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="saveCustomer">Save changes</button>
      </div>
    </div>
  </div>
</div>
<div class="container row2">
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-4">
      <h2 class="services-tagline">Request A Pickup</h2>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
    </div>
    <div class="col-md-4">
      <h2 class="services-tagline">Track Your Item</h2>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
      </div>
      <div class="col-md-4">
        <h2 class="services-tagline">Competitive Pricing</h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
    </div>
  </div>

  </div> <!-- /container -->

</main>

<main role="main" class="main2">

  <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="container">
      <h1 class="display-3 covered-area">Covered Areas</h1>


    </div>

<div class="container">
    <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-4">
      <h2>Heading</h2>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
    </div>
    <div class="col-md-4">
      <h2>Heading</h2>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
    </div>
    <div class="col-md-4">
      <h2>Heading</h2>
      <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
      <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
      </div>
    </div>

</div> <!-- /container -->

</main>

        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>

                    </ul>
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> Dolar Outsourcing
                </p>
            </div>
        </footer>

    </div>
</div>

</body>

  <!--   Core JS Files   -->
  <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

  <!--  Notifications Plugin    -->
  <script src="assets/js/bootstrap-notify.js"></script>

  <!--  Google Maps Plugin    -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

  <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

  <!-- Custom JS Scripts-->
  <script src="javascripts/customjs.js"></script>

  <script type="text/javascript">
    /*
      $('form').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'index.php',
            data: $('form').serialize(),
            success: function () {
              alert('form was submitted');
            }
          });

        });
    
  */
  
  $('#registerCustomer').on('submit',function(e) {
  $.ajax({
          type: "post",
          url: "insert_customer.php",
          data: $('#registerCustomer').serialize(),

         success: function(){
              alert('Data Save');
         }
});
 });
 

  </script>

</html>
