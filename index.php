
<!--Header-->
<?php
    
    include 'includes/header.php';
?>
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
          <input type="password" class="form-control" placeholder="Password" name="password" id="pass" required>
        </div>
        <div class="form-group">
          <label>Repeat Password</label>
          <input type="password" class="form-control" placeholder="Repeat Password" name="repeatpass" id="repeatpass" required>
        </div>
         <div class="form-group">
          <label>Contact Number</label>
          <input type="text" class="form-control" placeholder="Contact Number" name="contactNumber" required>
        </div>
        <div class="form-group">
          <label>Address</label>
          <input type="text" class="form-control" placeholder="Address" name="address" required>
        </div>
        <input style="width: 150px;" type="submit" name="" value="Save" class="btn btn-primary" id="submit">

        <button style="width: 150px;" type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </form>
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

<!--Footer-->

<?php
  
    include 'includes/footer.php';

?>
