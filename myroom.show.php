<?php
session_start();
require "./config/config.php";
require './components/functions.php';
require './components/modals.php';
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
    <style>
    </style>
  </head>
  <body>    
 <div id="circle">
  
  </div>

  <!-- <div class="loader"></div> -->

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <a href="#" class="navbar-brand col-md-12"><img src="img/other/lSBHL-logo.png" alt="Student boarding house locator" width="150px"></a>
     </div>
      <!-- <div class="col-md-2"></div> -->
     <div class="col-md-6">
      <ul class="nav offset-md-5">
      <li class="nav-item dropdown offset-md-5">
    <a class="nav-link dropdown-toggle text-dark" data-toggle="dropdown" href="#"><?php echo $_SESSION['fname']." ".$_SESSION['lname']." ";?><i class="fa fa-user-circle" style="color: #585b5f;"></i></a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
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
<nav class="navbar navbar-expand-lg navbar-light col-md-12 border-bottom shadow-sm" >

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuButton" aria-controls="menuButton" aria-expanded="false" aria-label="Toggle navigation">
  <span><i class="lnr lnr-menu"> Menu</i></span><i class=""></i>
</button>

<div class="collapse navbar-collapse" id="menuButton">
  <ul class="navbar-nav mr-auto py-2 col-md-12">
    <li class="nav-item"><a href="./index.php" class="nav-link"><i class="fa fa-th-large"></i> Houses <sup>10</sup></a></li>
    <li class="nav-item"><a href="./myroom.show.php" class="nav-link"><i class="fa fa-bed"></i> My Room <sup><i class="fa fa-mark"></i></sup></a></li>
    <li class="nav-item"><a href="#" class= "nav-link"><i class="lnr lnr-question-circle"></i></a></li>
    <li class="nav-item"><a href="#" class= "nav-link"><span ></span></a></li>
  </ul>
</div>
</nav>
<?php
$sql = mysqli_query($conn, "SELECT * FROM users INNER JOIN reservation ON users.user_id = reservation.Landloard_id WHERE s_id = '$userid' ");

$row_data = mysqli_fetch_array($sql);

$img_room = mysqli_query($conn, "SELECT * FROM room INNER JOIN boardinghouse ON room.b_id = boardinghouse.bh_id WHERE r_id = '$row_data[room_id]' ");
$room_img = mysqli_fetch_array($img_room);

$room_mates= mysqli_query($conn, "SELECT * FROM `reservation` WHERE room_id = '$room_img[r_id]' ");
$room_m = mysqli_num_rows($room_mates);

if (mysqli_num_rows($sql) == null) {
  ?>
  <div class="col-md-12 mt-5">
<div class="container card py-3 shadow" style="border-top: 3px solid #6777ef;">
  <div class="row">
    <div class="col-md-12">
      <h4>You do not have a room at the moment, Please reserve one.</h4>
    </div>
  </div>
</div>
</div>
  <?php
}else{
  ?>
<div class="col-md-12 mt-5">
<div class="container card py-3 shadow" style="border-top: 3px solid #6777ef;">
  <div class="row">
    <div class="col-md-4">

      <img src="img/rooms/<?php echo $room_img['room_image']; ?>" class="img-responsive" width="100%" height="">
    </div>
    <div class="col-md-8">
      <h6 class="col-md-12 text-uppercase py-2 text-primary display-5" id="bhName">Room number <?php echo $room_img['room_number']; ?></h6>
    <div class="col-md-12 py-2">
     <i class="fa fa-money"></i> Price <span class="float-right">K <?php echo $row_data['amount']; ?></span>
    </div>
    <div class="col-md-12 py-2">
      <i class="fa fa-bed"></i> Number of room mates <span class="float-right"><?php echo $room_m; ?></span>
    </div>
    <div class="col-md-12 py-2">
      <i class="fa fa-user-circle"></i> Landlord's name<span class="float-right">Mr <?php echo $row_data['fname']." ".$row_data['lname']; ?></span>
    </div>
    <div class="col-md-12 py-2">
      <i class="fa fa-home"></i> Boarding house name<span class="float-right"><?php echo $room_img['name']." "; ?></span>
    </div>
    <div class="col-md-12 py-2">
      <i class="fa fa-dashboard"></i> Status(pending/approved)<span class="float-right"><?php echo $row_data['status']." "; ?></span>
    </div>

     <div class="col-md-12 py-2">
      <i class="fa fa-phone"></i> Contact Number<span class="float-right"><?php echo $row_data['phone']; ?></span>
    </div>
    </div>
    <div class="container">
      <div class="col-md-12 py-2 mt-4 row justify-content-center">
      <button class="text-uppercase btn btn-warning mx-2 my-2" data-toggle="modal" data-target="#cancelReserve"><i class="fa fa-ban" value="<?php echo $room_img['r_id']; ?>" onclick="cancelReserve(this.value)"></i> Cancel a Reservation</button>

      <button class="text-uppercase btn btn-default mx-2 my-2 text-white" data-toggle="modal" data-target="#roomMembersModal" style="background-color: #6777ef;" value="<?php echo $room_img['r_id']; ?>" onclick="getRoomMembers(this.value)"><i class="fa fa-users"></i> My Room mates</button>
    </div>
  </div>
    </div>
</div>
    </div>

  <?php
}

?>




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
            <button type="button" class="mx-2 btn btn-danger rounded-0"value="<?php echo $room_img['r_id']; ?>" id="yesCancel" onclick="cancelReserve(this.value)">Yes</button>
          <button type="button" class="mx-2 btn btn-success rounded-0" data-dismiss="modal">No</button>
         </div>
        </div>
        
      </div>
    </div>
  </div>

  <!-- <div id="paraTest" class="text-center" style="display: none;">
    <img src="img/other/paydone.gif" class="col-md-12" width="">
    <h5 class="col-md-12 text-center py-2 text-uppercase">Payment is Done<br>Just wait for the Confirmation</h5>
  </div> -->


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

function loadPage() {
  window.location.assign("http://localhost/Student-Boarding-House-Locator/myroom.show.php");
}

  function cancelReserve(roomId){
  
    let xhttp;

    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('finishPayDisplay').innerHTML = this.responseText;
    } 
    };

    xhttp.open("GET","./components/cancelReserveRoom.php?roomId="+roomId, true);
    xhttp.send();

    loadPage();
  }
    
    </script>
  </body>
</html>
 <?php
}else{
  header("location: ./auth-login.php?action=login_first");
}
?>