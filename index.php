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
      <ul class="nav float-right mr-5">
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
<nav class="navbar navbar-expand-lg navbar-light col-md-12 shadow-sm sticky">

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
<div class="col-md-8 input-group my-2">
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
      <button class="btn btn-default" style="background-color: #6777ef;"><i class="lnr lnr-magnifier px-2 text-white"></i></button>
    </div>
</nav>
<!-- <div class="col-md-12 mt-3">
  <div class="col-md-12">
   <p class="text-center" id="geoMsg"></p>
 </div>
 <div class="input-group">
   <label class="ml-5 mr-3">In which location do you want the boarding house </label>
   <select class="form-control col-md-2">
    <option id="names"></option>
  </select>
 </div>
</div> -->

<?php 
require './components/houses.php';
?>


  <div id="paraTest" class="text-center" style="display: none;">
    <img src="img/other/paydone.gif" class="col-md-12" width="">
    <h5 class="col-md-12 text-center py-2 text-uppercase">Payment is Done<br>Just wait for the Confirmation</h5>
  </div>
  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/geoMap.js"></script>
    <script src="js/javascript.js"></script>

   <!--  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
    <script>
     
    </script>
  </body>
</html>


 <?php
}else{
  header("location: ./auth-login.php?action=login_first");
}
?>
