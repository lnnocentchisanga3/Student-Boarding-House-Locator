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
    /*.bg1{
       background: linear-gradient(to bottom, rgba(255,255,255,0.4), rgba(255,255,255,0.7),black), url(img/avatar/bg.jpg);
        background-size: cover;
        background-attachment: fixed;
        /*height: 50vh;*/
        }*/
    </style>
  </head>
  <body onload="displayHouses()">
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

    <div class="col-md-9 mb-4 pt-5 input-group offset-md-2">
      <label class="col-md-12 text-uppercase text-dark text-left">Search for a boarding house of your choice </label>
      <input type="text" name="search" placeholder="keywords" class="form-control col-md-2 mx-1">
      <select name="search2" placeholder="Street" class="form-control col-md-2 mx-1" onchange="getStreet(this.value)">
        <option>Street</option>
        <option>James Phiri</option>
        <option>Mwata kazembe</option>
        <option>Mwatayanwvo</option>
      </select>
      <select name="search3" placeholder="Intake" class="form-control col-md-2 mx-1">
        <option>Intake</option>
        <option>2021</option>
        <option>2020</option>
        <option>2019</option>
        <option>2018</option>
        <option>2017</option>
      </select>
      <select name="search4" placeholder="program" class="form-control col-md-2 mx-1">
        <option>Program</option>
        <option>BIT</option>
        <option>BICT</option>
        <option>BBA</option>
        <option>ACCA</option>
        <option>ZICA</option>
      </select>
      <button class="btn btn-primary rounded-0"><i class="lnr lnr-magnifier px-2"></i></button>
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
    <li class="nav-item"><a href="#" class="nav-link text-light"><i class="fa fa-th-large"></i> Houses <sup>10</sup></a></li>
    <li class="nav-item"><a href="./landlords.php" class="nav-link text-light"><i class="lnr lnr-users"></i> Landlords</a></li>
    <li class="nav-item"><a href="./myroom.show.php" class="nav-link text-light"><i class="fa fa-bed"></i> My Room <sup><i class="fa fa-mark"></i></sup></a></li>
    <li class="nav-item"><a href="#" class= "nav-link text-light"><i class="lnr lnr-question-circle"></i></a></li>
    <li class="nav-item"><a href="#" class= "nav-link text-light"><span ></span></a></li>
  </ul>
</div>
</nav>
<div class="col-md-12 mt-3">
  <div class="col-md-12">
   <p class="text-center" id="geoMsg"></p>
 </div>
 <div class="input-group">
   <label class="ml-5 mr-3">In which location do you want the boarding house </label>
   <select class="form-control col-md-2">
    <option id="names"></option>
  </select>
 </div>
</div>

<?php 
require './components/houses.php';
?>

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
