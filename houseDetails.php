<?php
session_start();
require "./config/config.php";
require './components/functions.php';
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
<?php
if (isset($_GET['get_details'])) {
  $id = $_GET['get_details'];

  $query = mysqli_query($conn, "SELECT * FROM boardinghouse INNER JOIN users ON boardinghouse.Landloard_id = users.user_id WHERE bh_id = '$id'");
  $row = mysqli_fetch_array($query);
  $_SESSION['landlord_id'] = $row['Landloard_id'];

  /*echo $_SESSION['landlord_id'];*/

}
?>
<div class="col-md-12 mt-3">
<div class="container card py-3 shadow" style="border-top: 3px solid #6777ef;">
  <div class="row">
    <div class="col-md-4">
      <img src="./img/houses/<?php echo $row['bh_photo'];?>" class="col-md-12" width="" height="230px">
    </div>
    <div class="col-md-8">
      <h6 class="col-md-12 text-uppercase py-2 text-primary display-5" id="bhName"><?php echo $row['name'];?></h6>
    <div class="col-md-12 py-2">
     <i class="fa fa-location"></i> Location <span class="float-right"><?php echo $row['location'];?></span>
    </div>
    <div class="col-md-12 py-2">
      <i class="fa fa-location-arrow"></i> Street <span class="float-right"><?php echo $row['Road'];?></span>
    </div>
     <!-- <div class="col-md-12 py-2">
      <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i> <span class="float-right">3 Reviews</span>
    </div> -->
    <div class="col-md-12 py-2">
      <?php
      $query1 = mysqli_query($conn, "SELECT * FROM `reservation` WHERE Landloard_id = '$row[Landloard_id]'");
      $tenants_num = mysqli_num_rows($query1);
      ?>
      <i class="fa fa-users"></i> Current occupants<span class="float-right"><?php echo $tenants_num;?></span>
    </div>
    <div class="col-md-12 py-2">
      <i class="fa fa-user-circle"></i> Landlord's name<span class="float-right"><?php echo $row['fname']." ".$row['lname'];?></span>
    </div>
    <div class="col-md-12 py-2">
      <i class="fa fa-phone"></i> Contact Number<span class="float-right"><?php echo $row['phone'];?></span>
    </div>
    <div class="col-md-12 py-2">
      <i class="fa fa-dollar"></i>Rental <span class="float-right">Monthly</span>
    </div>
    </div>
<!-- <button class="btn btn-primary" onclick="testAlert()">Click</button> -->
  </div>
</div>
<div class="py-2 text-center pt-5">
  <h4 class="text-muted text-uppercase text-underline">The available rooms</h4>
</div>

<?php
$bh_id = $row['bh_id'];
echo BhHouseRooms($bh_id);
?>
    </div>

    <!-- Room Members Modal -->
  <div class="modal fade" id="roomMembersModal">
    <div class="modal-dialog modal-dialog-centered mt-5">
      <div class="modal-content bg-light">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h6 class="modal-title"></h6>
          <button type="button" class="close text-danger" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <div class="col-md-12 text-center">
            <h6 class="text-uppercase">The list of room members</h6>
          </div>
          <div id="roomMembers">
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
        
      </div>
    </div>
  </div>

  <!-- End of room members -->


<!-- The Reservation Modal -->
  <div class="modal fade" id="searchModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content rounded-0 bg-light">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h6 class="modal-title text-uppercase">Notice</h6>
          <button type="button" class="close text-danger" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <!-- <div class="col-md-12 text-center">
            <h6 class="text-uppercase">The list of room members</h6>
          </div> -->
          <div id="finishPayDisplay">
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
  function getRoomMembers(roomId) {
  
    let xhttp;

    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('roomMembers').innerHTML = this.responseText;
    } 
    };

    xhttp.open("GET","./components/roomMembers.php?roomId="+roomId, true);
    xhttp.send();
  }



  function reserveRoom(roomId) {
  
    let xhttp;

    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('finishPayDisplay').innerHTML = this.responseText;
    } 
    };

    xhttp.open("GET","./components/reserveRoom.php?roomId="+roomId, true);
    xhttp.send();
  }
    
    </script>
  </body>
</html>
 <?php
}else{
  header("location: ./auth-login.php?action=login_first");
}
?>