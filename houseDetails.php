<?php
require "./config/config.php";
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

    <meta charset="utf-8"/>
    <style>
    </style>
  </head>
  <body>
  <div class="container-fluid bg-light bg1">
    <div class="row">
      <div class="col-md-6">
        <a href="#" class="navbar-brand col-md-12"><img src="img/other/lSBHL-logo.png" alt="Student boarding house locator" width="150px"></a>
     </div>
      <!-- <div class="col-md-2"></div> -->
     <div class="col-md-6">
      <ul class="nav offset-md-5">
        <li class="nav-item"><a href="#" class= "nav-link text-dark"><i class="fa fa-bell-o text-primary"><sup>2</sup></i> Notifications</a></li>
        <li class="nav-item"><a href="#" class= "nav-link text-dark"><i class="lnr lnr-user"></i> Mwango <span><i class="fa fa-dot-circle-o text-success"></i></span></a></li>
        <li class="nav-item"><a href="#" class= "nav-link text-dark"><i class="fa fa-power-off text-danger"></i> Logout</a></li>
      </ul>
     </div>
    </div>
  </div>
<!-- Nav -->
<nav class="navbar navbar-expand-lg navbar-light col-md-12 border-bottom bg-primary" style="z-index: 999;">

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuButton" aria-controls="menuButton" aria-expanded="false" aria-label="Toggle navigation">
  <span><i class="lnr lnr-menu text-light"> Menu</i></span><i class=""></i>
</button>

<div class="collapse navbar-collapse" id="menuButton">
  <ul class="navbar-nav mr-auto py-2 col-md-12">
    <li class="nav-item"><a href="./index.php" class="nav-link text-light"><i class="fa fa-th-large"></i> Houses <sup>10</sup></a></li>
    <li class="nav-item"><a href="#" class="nav-link text-light"><i class="lnr lnr-users"></i> Landlords</a></li>
    <li class="nav-item"><a href="./myroom.show.php" class="nav-link text-light"><i class="fa fa-bed"></i> My Room <sup><i class="fa fa-mark"></i></sup></a></li>
    <li class="nav-item"><a href="#" class= "nav-link text-light"><i class="lnr lnr-question-circle"></i></a></li>
    <li class="nav-item"><a href="#" class= "nav-link text-light"><span ></span></a></li>
  </ul>
</div>
</nav>

<div class="col-md-12 mt-3">
<div class="container card py-3">
  <div class="row">
    <div class="col-md-4">
      <img src="img/avatar/bg.jpg" class="col-md-12" width="" height="230px">
      <div class="container">
        <div class="row">
           <a href="#" class="col-md-3 my-4 border"><img src="img/avatar/bg.jpg" width="100%"  height="auto"></a>
            <a href="#" class="col-md-3 my-4 border"><img src="img/avatar/bg.jpg" width="100%"  height="auto"></a>
           <a href="#" class="col-md-3 my-4 border"><img src="img/avatar/bg.jpg" width="100%"  height="auto"></a>
          <a href="#" class="col-md-3 my-4 border"><img src="img/avatar/bg.jpg" width="100%"  height="auto"></a>
        </div>
      </div>
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
      <i class="fa fa-user-circle"></i> Landlord's name<span class="float-right">Mr Mwango Chisanga</span>
    </div>
    <!-- <div class="col-md-12">
     <ul class="navbar-nav">
       <li><i class="fa fa-wifi"></i></li>
        <li></li>
     </ul>
    </div> -->
     <div class="col-md-12 py-2 mt-4 row">
      <button class="col-md-7 text-uppercase rounded-0 btn btn-primary" data-toggle="modal" data-target="#searchModal" onclick="getDetails()">Make Reservation</button>
    </div>
    </div>

  </div>
</div>
    </div>

<div id="circle">
  <div class="loader">
    <div class="loader">
        <div class="loader">
           <div class="loader">

           </div>
        </div>
    </div>
  </div>
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
