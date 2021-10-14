<?php
session_start();
require "./config/config.php";
require "./components/functions.php";
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
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/style.css"/>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    
    <meta charset="utf-8"/>
    <style>

    </style>
  </head>
  <body class="bg-light">
  
  <div id="circle"></div>

  <!-- <div class="loader"></div> -->

  <nav class="navbar navbar-expand-lg bg-white col-md-12 sticky " style="position: fixed; z-index:9999;">
      <ul class="nav ml-auto">
        <li class="nav-item " id="btnMenu" onclick="openNav()"><a href="javascript:void(0)" class="nav-link text-muted"><i class="lnr lnr-menu"> Menu</i></a></li>
       <?php
       $getMsg = mysqli_query($conn, "SELECT * FROM `massage` WHERE r_id = '$_SESSION[userid]' AND status = 'unread'");
       $num = mysqli_num_rows($getMsg);
       if ($num== 0) {
         echo ' <li class="nav-item"><a href="#" class= "nav-link "><i class="fa fa-envelope-o" style="color: #585b5f;"><sup> 0</sup></i></a></li>';
       }else{
        echo ' <li class="nav-item"><a href="#" class= "nav-link "><i class="fa fa-envelope-o" style="color: #585b5f;"><sup> '.$num.'</sup></i></a></li>';
       }
       ?>
       <li class="nav-item"><a href="#" class= "nav-link "><i class="fa fa-bell-o" style="color: #585b5f;"></i></a></li>

      <li class="nav-item">
    <a class="nav-link text-muted" href="#"><?php echo $_SESSION['fname']." ".$_SESSION['lname']." ";?><?php echo getMainImage();?></a></li>

  </ul>
  </nav>


  <div class="container-fluid">
    <div class="row">

<div class="shadow-sm bg-white" style="z-index: 9999; position: fixed; height: 100vh;" id="menuItem">
        <!-- Side Nav -->
<nav class="navbar bg-white col-md-12">
  <div class="col-md-12"><a href="#" class="navbar-brand col-md-12"><img src="img/other/lSBHL-logo.png" alt="Student boarding house locator" width="100px"></a></div>

<div class="" >
     <h6 class="my-3 text-muted">Menu</h6>
  <ul class="navbar-nav mr-auto"> 
    <li class="nav-item px-2 landActions"><a href="landlord_acc.php?pages=rooms" class="nav-link"><i class="fa fa-bed"></i> Rooms </a></li>
    <li class="nav-item px-2 landActions"><a href="landlord_acc.php?pages=tenants" class="nav-link"><i class="lnr lnr-users"></i> Tenants</a></li>
    <li class="nav-item px-2 landActions "><a href="landlord_acc.php?pages=payments" class="nav-link"><i class="fa fa-money"></i> Payments</a></li>
    <li class="nav-item px-2 landActions"><a href="landlord_acc.php?pages=boardinghouse" class="nav-link"><i class="lnr lnr-home"></i> Boarding houses</a></li>
    <li class="nav-item px-2 landActions"><li class="nav-item px-2 landActions"><a class="nav-link" href="landlord_acc.php?pages=settings"><i class="lnr lnr-cog"></i> Settings</a></li>
    <li class="nav-item px-2 landActions"><li class="nav-item px-2 landActions"><a class="nav-link" href="landlord_acc.php?pages=profiles" ><i class="lnr lnr-user"></i> Profile</a></li>
    <li class="nav-item px-2 landActions"><li class="nav-item px-2 landActions"><a class="nav-link" href="./components/logout.php?action=logout"><i class="lnr lnr-exit"></i> Logout</a></li></li>
  </ul>
</div>
</nav>
</div>


<!-- The overlay -->
<div id="myNav" class="overlay">

  <!-- Button to close the overlay navigation -->
  <a href="javascript:void(0)" class="closebtn text-danger" onclick="closeNav()">&times;</a>

  <!-- Overlay content -->
  <div class="overlay-content">
    <a href="javascript:void(0)" class="nav-link"><i class="fa fa-bed"></i> Rooms </a>
    <a href="#" class="nav-link"><i class="lnr lnr-users"></i> Tenants</a>
    <a href="#" class="nav-link"><i class="fa fa-money"></i> Payments</a>
    <a href="#" class="nav-link"><i class="lnr lnr-home"></i> Boarding houses</a>
    <a class="nav-link" href="#"><i class="lnr lnr-cog"></i> Settings</a>
    <a class="nav-link" href="#" ><i class="lnr lnr-user"></i> Profile</a>
    <a class="nav-link" href="./components/logout.php?action=logout"><i class="lnr lnr-exit"></i> Logout</a>
  </div>

</div>

<script>
  function showMenu() {
   document.getElementById("menuItemShow").style.display = "flex";
   document.body.style.height = "100vh";
  }

  function displayMenu(){
    document.getElementById('menuItemShow').style.display = "none";
   document.getElementById("menuItemShow").style.width = "";
   document.body.style.height = "";
  }


  /* Open when someone clicks on the span element */
function openNav() {
  document.getElementById("myNav").style.width = "100%";
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
</script>

<div class="mainWrapper" style="margin-top: 5rem;">
  <?php
  if (isset($_GET['pages'])) {
     $pages = $_GET['pages'];

     if ($pages == "rooms") {
       include_once './pages/dashboard.php';
     }elseif ($pages == "tenants") {
        include_once './pages/tenants.php';
     }elseif ($pages == "payments") {
        include_once './pages/dashboard.php';
     }elseif ($pages == "boardinghouse") {
        include_once './pages/boardinghouses.php';
     }elseif ($pages == "settings") {
        include_once './pages/dashboard.php';
     }elseif ($pages == "profiles") {
        include_once './pages/profile.php';
     }else{
      include_once './pages/404.php';
     }
   } 
   ?>
</div>
    </div>
  </div>



    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/geoMap.js"></script>
    <script src="js/javascript.js"></script>
    
  </body>
</html>
 <?php
}else{
  header("location: ./auth-login.php?action=login_first");
}
?>