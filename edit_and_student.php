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
    <li class="nav-item"><a href="./myroom.show.php" class="nav-link"><i class="fa fa-bed"></i> My Room <sup><i class="fa fa-mark"></i></sup></a></li>
    <li class="nav-item"><a href="#" class= "nav-link"><i class="lnr lnr-question-circle"></i></a></li>
    <li class="nav-item"><a href="#" class= "nav-link"><span ></span></a></li>
  </ul>
</div>
</nav>
<?php
$get_user = mysqli_query($conn, "SELECT * FROM users WHERE user_id = '$_SESSION[userid]' ");
$row_user = mysqli_fetch_array($get_user);



?>
<div class="container">
  <div class="row">
    <h4 class="col-md-12 py-3 my-5 bg-white text-dark shadow-sm"><i class="fa fa-edit"></i> Edit your details</h4>

    <?php
    if (isset($_GET['edit'])) {
      $msg = $_GET['edit'];

      if ($msg == "done") {
        ?>
    <div class="alert alert-success alert-dismissible" style="z-index: 1; margin-top: -80px; margin-left: 45%; display: block;" id="msgShow">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>Notice : </strong> <span id="msgDisplay">Users information has been saved</span>
  </div>
        <?php
      }elseif ($msg == "not_done") {
         ?>
    <div class="alert alert-danger alert-dismissible" style="z-index: 1; margin-top: -80px; margin-left: 45%; display: block;" id="msgShow">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>warning : </strong> <span id="msgDisplay">User's information has not been saved an error occured</span>
  </div>
        <?php
      }elseif ($msg == "done_pwd") {
         ?>
    <div class="alert alert-success alert-dismissible" style="z-index: 1; margin-top: -80px; margin-left: 45%; display: block;" id="msgShow">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>Notice : </strong> <span id="msgDisplay">User's password has been saved</span>
  </div>
        <?php
      }elseif ($msg == "not_done_pwd") {
         ?>
    <div class="alert alert-danger alert-dismissible" style="z-index: 1; margin-top: -80px; margin-left: 45%; display: block;" id="msgShow">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>Warning : </strong> <span id="msgDisplay">User's password has not been saved</span>
  </div>
        <?php
      }elseif ($msg == "done_not_added") {
         ?>
    <div class="alert alert-danger alert-dismissible" style="z-index: 1; margin-top: -80px; margin-left: 45%; display: block;" id="msgShow">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>Warning : </strong> <span id="msgDisplay">Student details not added an error occured</span>
  </div>
        <?php
      }elseif ($msg == "done_added") {
         ?>
    <div class="alert alert-success alert-dismissible" style="z-index: 1; margin-top: -80px; margin-left: 45%; display: block;" id="msgShow">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>Notice : </strong> <span id="msgDisplay">Student informantion has been added</span>
  </div>
        <?php
      }
    }
    ?>

    <div class="col-md-6">
      <div class="shadow-sm card">
        <div class="card-header bg-primary text-white"><i class="fa fa-user"></i> User details 1</div>
        <div class="card-body">
          <form action="./components/edit_student.php" method="POST">
            <div class="input-group">
              <input type="text" name="fname" class="form-control mx-2" value="<?php echo $row_user['fname']; ?>">
              <input type="text" name="lname" class="form-control mx-2" value="<?php echo $row_user['lname']; ?>">
            </div>
            <div class="input-group mt-3">
              <input type="text" name="email" class="form-control mx-2" value="<?php echo $row_user['email']; ?>">
              <input type="text" name="phone" class="form-control mx-2" value="<?php echo $row_user['phone']; ?>">
            </div>
            <button class="btn btn-primary col-md-3 my-3" name="save">Save <i class="fa fa-save"></i></button>
          </form>
        </div>
       </div>
    </div>
    <?php
    $check_student = mysqli_query($conn, "SELECT * FROM student WHERE s_id = '$_SESSION[userid]' ");
    if (mysqli_num_rows($check_student)== null) {
      ?>
      <div class="col-md-6">
       <div class="card shadow-sm">
        <div class="card-header bg-warning text-white"><i class="fa fa-user-circle"></i> Student details 1</div>
        <div class="card-body">
          <form action="./components/add_student.php" method="POST">
            <div class="input-group">
              <input type="text" name="sid" class="form-control mx-2" readonly value="<?php echo $_SESSION['userid'] ?>">
              <input type="text" name="fname" class="form-control mx-2" placeholder="Fisrt name">
            </div>
            <div class="input-group mt-3">
              <input type="text" name="lname" class="form-control mx-2" placeholder="Last name">
              <input type="number" name="age" class="form-control mx-2" placeholder="Age">
            </div>
            <div class="input-group mt-3">
              <input type="text" name="program" class="form-control mx-2" placeholder="Program">
              <input type="number" name="year" class="form-control mx-2" placeholder="Year">
            </div>

            <button class="btn btn-warning col-md-3 my-2" name="send">Submit</button>
          </form>
        </div>
       </div>
    </div>
      <?php
    }else{
      ?>
      <div class="col-md-6">
       <div class="card shadow-sm">
        <div class="card-header bg-danger text-white"><i class="fa fa-lock"></i> Edit Password</div>
        <div class="card-body">
          <form action="./components/change_pwd_1.php" method="POST">
            <div class="input-group mt-3">
              <input type="text" name="pwd" class="form-control mx-2" placeholder="Enter new password">
            </div>
            <button class="btn btn-danger col-md-3 my-2" name="send_pwd">Save <i class="fa fa-save"></i></button>
          </form>
        </div>
       </div>
    </div>
      <?php
    }
    ?>
  </div>
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