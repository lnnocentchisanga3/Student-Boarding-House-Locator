<?php
require "./config/config.php";
$msgDis = "";

if (isset($_GET['echo'])) {
  if ($_GET['echo'] == "PLZLoginBoss") {
    $msgDis .= '<div class="bg-danger text-white py-2 text-center">Please Enter the email to continue</div>';
  }else{
    
  }
}

if (isset($_POST['send'])) {
  
  $sql = "SELECT * FROM users WHERE email ='$_POST[email]' ";
  $query = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($query);
  if ( $num == null){
    $msgDis .= '<div class="bg-danger text-white py-2 text-center">Sorry you are not registered</div>';
  }else{
    header('location: ./auth-reset-password.php?email='.$_POST['email'].'');

  }
}


?>
<!DOCTYPE html>
<html lang="en">


<!-- auth-forgot-password.php  21 Nov 2021 04:05:02 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>SBHL-|- Forgot Password</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="admin/assets/css/app.min.css">
  <link rel="stylesheet" href="admin/assets/bundles/bootstrap-social/bootstrap-social.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="admin/assets/css/style.css">
  <link rel="stylesheet" href="admin/assets/css/components.css">
  <link rel="stylesheet" href="vendors/linericon/style.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="admin/assets/css/custom.css">
 <link rel="shortcut icon" type="image/png" href="img/other/lSBHL-logo.png" />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Forgot Password</h4>
              </div>
              <?php echo $msgDis; ?>
              <div class="card-body">
                <p class="text-muted">We will redirect you to a reset password page</p>
                <form method="POST" action="">
                  <div class="form-group">
                    <label for="email"><i class="lnr lnr-envelope"></i> Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                  </div>
                  <div class="form-group">
                    <button type="submit" name="send" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Forgot Password
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="admin/assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="admin/assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="admin/assets/bundles/jquery-selectric/jquery.selectric.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="admin/assets/js/page/auth-register.js"></script>
  <!-- Template JS File -->
  <script src="admin/assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="admin/assets/js/custom.js"></script>
</body>
</html>