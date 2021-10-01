<?php
session_start();
require "./config/config.php";
if (isset($_SESSION['userid'])) {
 ?>
<!DOCTYPE html>
<html lang="en" manifest="config/cache.appcache">
  <head>
    <title>Student Boarding house locator</title>
    <link rel="shortcut icon" type="image/png" href="img/other/lSBHL-logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="vendors/linericon/style.css">
   <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    
    <meta charset="utf-8"/>
    <style>
    </style>
  </head>
  <body>
  
  <div id="circle"></div>

  <!-- <div class="loader"></div> -->

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <a href="#" class="navbar-brand col-md-12"><img src="img/other/lSBHL-logo.png" alt="Student boarding house locator" width="150px"></a>
     </div>
      <!-- <div class="col-md-2"></div> -->
     <div class="col-md-6">
      <ul class="nav offset-md-5">
        <li class="nav-item"><a href="#" class= "nav-link "><i class="fa fa-envelope-o" style="color: #585b5f;"><sup> 2</sup></i></a></li>
       <li class="nav-item"><a href="#" class= "nav-link "><i class="fa fa-bell-o" style="color: #585b5f;"></i></a></li>

      <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_SESSION['fname']." ";?><i class="fa fa-user-circle" style="color: #585b5f;"></i></a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
      <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
      <a class="dropdown-item" href="#"><i class="fa fa-cogs"></i> Settings</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item btn btn-danger" href="./components/logout.php?action=logout"><i class="lnr lnr-exit"></i> Logout</a>
    </div>
  </li>

      </ul>
     </div>
     <!-- space for other contents -->
    </div>
  </div>
<!-- Nav -->
<nav class="navbar navbar-expand-lg navbar-light col-md-12 border-bottom shadow-sm" >

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuButton" aria-controls="menuButton" aria-expanded="false" aria-label="Toggle navigation">
  <span><i class="lnr lnr-menu"> Menu</i></span><i class=""></i>
</button>

<div class="collapse navbar-collapse" id="menuButton">
  <ul class="navbar-nav mr-auto py-2 col-md-12">
    <li class="nav-item"><a href="./index.php" class="nav-link"><i class="fa fa-th-large"></i> Houses <sup>10</sup></a></li>
    <li class="nav-item"><a href="./landlords.php" class="nav-link"><i class="lnr lnr-users"></i> Landlords</a></li>
    <li class="nav-item"><a href="./myroom.show.php" class="nav-link"><i class="fa fa-bed"></i> My Room <sup><i class="fa fa-mark"></i></sup></a></li>
    <li class="nav-item"><a href="#" class= "nav-link"><i class="lnr lnr-question-circle"></i></a></li>
    <li class="nav-item"><a href="#" class= "nav-link"><span ></span></a></li>
  </ul>
</div>
</nav>

<div class="col-md-12 mt-3">
<div class="container card py-3 shadow" style="border-top: 3px solid #6777ef;">
  <div class="row">
    <div class="col-md-4">
      <img src="img/avatar/bg.jpg" class="col-md-12" width="" height="230px">
    </div>
    <div class="col-md-8">
      <h6 class="col-md-12 text-uppercase py-2 text-primary display-5" id="bhName">Green Gate</h6>
    <div class="col-md-12 py-2">
     <i class="fa fa-money"></i> Price <span class="float-right">K <span id="amount">600</span>/Bed space</span>
    </div>
    <div class="col-md-12 py-2">
      <i class="fa fa-bed"></i> Available Rooms <span class="float-right">1/3</span>
    </div>
     <div class="col-md-12 py-2">
      <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i> <span class="float-right">3 Reviews</span>
    </div>
    <div class="col-md-12 py-2">
      <i class="fa fa-users"></i> Number of students<span class="float-right">15</span>
    </div>
    <div class="col-md-12 py-2">
      <i class="fa fa-user-circle"></i> Landlord's name<span class="float-right">Mr Mwango Chisanga</span>
    </div>
    <div class="col-md-12 py-2">
      <i class="fa fa-phone"></i> Contact Number<span class="float-right">0966367116 / 0979023093</span>
    </div>
    <div class="col-md-12 py-2">
      <i class="fa fa-dollar"></i> Payment Method<span class="float-right">Mobile Money</span>
    </div>
    </div>

  </div>
</div>
<div class="py-2 text-center pt-5">
  <h4 class="text-muted text-uppercase text-underline">The available rooms</h4>
</div>

<!-- The second part -->
<div class="container card py-3 my-4 shadow" style="border-top: 3px solid #6777ef;">
  <div class="row">
    <div class="col-md-2">
      <img src="img/avatar/bg.jpg" class="col-md-12" >
    </div>
    <div class="col-md-6">
      <h6 class="col-md-12 text-uppercase py-2 text-primary display-5" id="bhName">Room Number 10</h6>
    <div class="col-md-12 py-2">
     <i class="fa fa-money"></i> Price <span class="float-right">K <span id="amount">500</span>/Bed space</span>
    </div>
    <div class="col-md-12 py-2">
      <i class="fa fa-bed"></i> Available bed spaces <span class="float-right">1/3</span>
    </div>
    </div>
    <div class="col-md-4">
      <button class="col-md-7 my-2 text-uppercase btn btn-default text-white" style="background-color: #6777ef;" data-toggle="modal" data-target="#searchModal" onclick="getDetails()"><i class="fa fa-check"></i> Reserve space</button>

       <button class="col-md-7 my-2 text-uppercase btn btn-primary text-white" data-toggle="modal" data-target="#searchModal" onclick="getDetails()"><i class="fa fa-eye"></i> Room mates</button>
    </div>
  </div>
</div>
<!-- The end tof the second part -->

<!-- Third part -->
<div class="container card py-3 my-4 shadow" style="border-top: 3px solid #6777ef;">
  <div class="row">
    <div class="col-md-2">
      <img src="img/avatar/bg.jpg" class="col-md-12" >
    </div>
    <div class="col-md-6">
      <h6 class="col-md-12 text-uppercase py-2 text-primary display-5" id="bhName">Room number 12</h6>
    <div class="col-md-12 py-2">
     <i class="fa fa-money"></i> Price <span class="float-right">K <span id="amount">500</span>/Bed space</span>
    </div>
    <div class="col-md-12 py-2">
      <i class="fa fa-bed"></i> Available bed spaces <span class="float-right">2/3</span>
    </div>
    </div>
    <div class="col-md-4">
       <button class="col-md-7 my-2 text-uppercase btn btn-default text-white" style="background-color: #6777ef;" data-toggle="modal" data-target="#searchModal" onclick="getDetails()"><i class="fa fa-check"></i> Reserve space</button>

       <button class="col-md-7 my-2 text-uppercase btn btn-primary text-white" data-toggle="modal" data-target="#searchModal" onclick="getDetails()"><i class="fa fa-eye"></i> Room mates</button>
    </div>
  </div>
</div>
<!-- The end of the third part -->
    </div>


<!-- The Reservation Modal -->
  <div class="modal fade" id="searchModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content rounded-0 bg-light">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h6 class="modal-title"></h6>
          <button type="button" class="close text-danger" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body" id="finishPayDisplay">
          <div class="col-md-12 text-center">
            <h6 class="text-uppercase">Pay to Make a Reservation</h6>
          </div>
          <div>
            <h6 class="text-danger text-center">Please confirm if your Details are Correct</h6>
            <label>Phone Number</label>
            <input type="text" name="search" id="phone" placeholder="Enter your Phone number +2609... or +2607..." class="form-control rounded-0">
            <label>Names</label>
            <input type="text" name="username" value="Mwango Malauni" id="names" class="form-control">
            <label>Price</label>
            <input type="text" name="username" value="" id="priceDetails" class="form-control">
            <label>Boarding house name</label>
            <input type="text" name="bh" value="" id="bh" class="form-control">
            <label>Room Number</label>
            <select class="form-control">
              <option>Select a Room Number</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>
            </select>
            <button class="btn btn-warning my-2" onclick="getDisplay()">Pay And Reserve</button>
          </div>
          <div class="col-md-12 py-3" id="search_load">
           Data entered here won't be shared with anyone<span class="text-danger">*</span> 
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger rounded-0" data-dismiss="modal">Cancel</button>
        </div>
        
      </div>
    </div>
  </div>

  <div id="paraTest" class="text-center" style="display: none;">
    <img src="img/other/paydone.gif" class="col-md-12" width="">
    <h5 class="col-md-12 text-center py-2 text-uppercase">Payment is Done<br>Just wait for the Confirmation</h5>
  </div>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/geoMap.js"></script>
    <script src="js/javascript.js"></script>
    <script>

    </script>
  </body>
</html>
 <?php
}else{
  header("location: ./auth-login.php?action=login_first");
}
?>