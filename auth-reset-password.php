<?php
require "./config/config.php";
$msgDis = "";

if (isset($_GET['email'])) {
  
  if (isset($_POST['reset'])) {

  $pwd = md5($_POST['confirm-password']);
  $sql = "UPDATE users SET pwd='$pwd' WHERE email='$_POST[email]'";
  $query = mysqli_query($conn, $sql);
  /*$num = mysqli_num_rows($query);*/
  if (!$query){
    $msgDis .= '<div class="bg-danger text-white py-2 text-center">Opps an error occoured please try again</div>';
  }else{
    header('location: ./auth-login.php?email='.$_POST[email].'');

  }

  }
?>
<!DOCTYPE html>
<html lang="en">


<!-- auth-reset-password.html   -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
 <title>SBHL-login</title>
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
                <h4>Reset Password</h4>
              </div>
              <div id="msgDisplay"></div>
              <div class="card-body">
                <p class="text-muted">Enter Your New Password</p>
                <form method="POST" action="">
                  <div class="form-group">
                    <label for="email"><i class="lnr lnr-envelope"></i> Email</label>
                    <input id="email" type="email" class="form-control" name="email" value="<?php echo $_GET['email']; ?>" tabindex="1" readonly>
                  </div>
                  <div class="form-group">
                    <label for="password"><i class="lnr lnr-lock"></i> New Password</label>
                    <input id="password" type="password" name="password" class="form-control pwstrength" data-indicator="pwindicator"
                      name="password" tabindex="2" required autofocus>
                    <div id="pwindicator" class="pwindicator">
                      <div class="bar"></div>
                      <div class="label"></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password-confirm"><i class="lnr lnr-lock"></i> Confirm Password</label>
                    <input id="password-confirm" onkeyup="comparePassword(this.value)" type="password" class="form-control" name="confirm-password"
                      tabindex="2" required>
                  </div>
                  <div class="form-group">
                    <button type="submit" name="reset" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Reset Password
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

  <script type="text/javascript">
    function comparePassword(password){
      let pwd = document.getElementById('password');
      let display = document.getElementById('msgDisplay');

      if (password == null || password == ""){
        display.innerHTML = '<div class="bg-danger text-white py-2 text-center col-md-12">Please make sure you enter the same password</div>';
      }else if (password != pwd.value){
        display.innerHTML = '<div class="bg-danger text-white py-2 text-center col-md-12">The passwords are not the same</div>';
      }else{
        display.innerHTML = '<div class="bg-success text-white py-2 text-center col-md-12">The passwords have matched </div>';
      }
    }
  </script>
</body>
</html>
<?php
  }
  else
  {
header("location: ./auth-forgot-password.php?echo=PLZLoginBoss");
  }
?>