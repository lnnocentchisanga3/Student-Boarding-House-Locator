<?php
session_start();
require "./components/functions.php";
require "./config/config.php";
$userid = $_SESSION['userid'];
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
        <?php
       /*$getMsg = mysqli_query($conn, "SELECT * FROM `massage` WHERE r_id = '$_SESSION[userid]' AND status = 'unread'");
       $num = mysqli_num_rows($getMsg);
       if ($num== 0) {
         echo ' <li class="nav-item"><a href="./massages_students.php?get_by_id='.$userid.'" class= "nav-link "><i class="fa fa-envelope-o" style="color: #585b5f;"><sup> 0</sup></i></a></li>';
       }else{
        echo ' <li class="nav-item"><a href="#" class= "nav-link "><i class="fa fa-envelope-o" style="color: #585b5f;"><sup> '.$num.'</sup></i></a></li>';
       }*/
       ?>
       <!-- <li class="nav-item"><a href="#" class= "nav-link "><i class="fa fa-bell-o" style="color: #585b5f;"></i></a></li> -->

      <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle text-dark" data-toggle="dropdown" href="#"><?php echo $_SESSION['fname']." ".$_SESSION['lname']." ";?><i class="fa fa-user-circle" style="color: #585b5f;"></i></a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown"><!-- 
      <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a> -->
      <a class="dropdown-item" href="./edit_and_student.php"><i class="fa fa-cogs"></i> Settings</a>
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
    <?php
    $house_num = mysqli_query($conn, "SELECT * FROM boardinghouse");
    $num_house = mysqli_num_rows($house_num);
    ?>
    <li class="nav-item"><a href="./index.php" class="nav-link"><i class="fa fa-th-large"></i> Houses <sup><?php echo $num_house; ?></sup></a></li>
    <li class="nav-item"><a href="./myroom.show.php" class="nav-link"><i class="fa fa-bed"></i> My Room <sup><i class="fa fa-mark"></i></sup></a></li>
    <li class="nav-item"><a href="#" class= "nav-link"><i class="lnr lnr-question-circle"></i></a></li>
    <li class="nav-item"><a href="#" class= "nav-link"><span ></span></a></li>
  </ul>
</div>
<div class="col-md-8 input-group my-2">
  <!-- <h6>Search for the boarding house</h6> -->
        <!-- <input type="text" name="street" placeholder="Street" autofocus class="form-control col-md-2 mx-1" onkeyup="getSearch(this.value)"> -->
        <input type="text" name="name" placeholder="boarding house name" class="form-control col-md-3 mx-1" onkeyup="getSearch(this.value)">

      <input type="text" name="location" placeholder="location" class="form-control col-md-2 mx-1" onkeyup="getSearch(this.value)">
      <input type="number" name="bhnumber" placeholder="house number" class="form-control col-md-2 mx-1" onkeyup="getSearch(this.value)">
      <!-- <button class="btn btn-default" style="background-color: #6777ef;"><i class="lnr lnr-magnifier px-2 text-white"></i></button> -->
    </div>
</nav>

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
     function getSearch(value){
      if (value == "") {
        loadHouse();
       }else{
       let xhttp;

        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById('allHouses').innerHTML = this.responseText;
        } 
        };

        xhttp.open("GET", "components/search_house.php?house_search="+value, true);
        xhttp.send();
     }
     }

     function loadHouse() {
        $('#allHouses').load("./components/all_houses.php");
     }
    </script>
  </body>
</html>


 <?php
}else{
  header("location: ./auth-login.php?action=login_first");
}
?>
