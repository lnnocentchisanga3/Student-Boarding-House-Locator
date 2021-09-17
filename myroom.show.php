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
    <li class="nav-item"><a href="#" class="nav-link text-light"><i class="fa fa-bed"></i> My Room <sup><i class="fa fa-mark"></i></sup></a></li>
    <li class="nav-item"><a href="#" class= "nav-link text-light"><i class="lnr lnr-question-circle"></i></a></li>
    <li class="nav-item"><a href="#" class= "nav-link text-light"><span ></span></a></li>
  </ul>
</div>
</nav>

<div class="col-md-12 mt-3">
<div class="container card py-3">
  <div class="row">
    <div class="col-md-4">
      <img src="img/avatar/bg.jpg" class="col-md-12" width="" height="">
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
     <div class="col-md-12 py-2 mt-4 row">
      <button class="text-uppercase btn btn-warning" data-toggle="modal" data-target="#cancelReserve"><i class="fa fa-ban"></i> Cancel a Reservation</button>
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
  <div class="modal fade" id="cancelReserve">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content rounded-0 bg-light">
        <!-- Modal body -->
        <div class="modal-body my-3" id="finishPayDisplay">
          Are you sure you want to cancel the Reservation ?
        </div>
        
        <div class="container my-3">
         <div class="row">
            <button type="button" class="mx-2 btn btn-danger rounded-0">Yes</button>
          <button type="button" class="mx-2 btn btn-success rounded-0" data-dismiss="modal">No</button>
         </div>
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
