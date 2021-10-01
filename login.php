<!DOCTYPE html>
<html lang="en">


<!-- auth-register.html  21 Nov 2019 04:05:01 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>SBHL-|-register</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="admin/assets/css/app.min.css">
  <link rel="stylesheet" href="admin/assets/bundles/jquery-selectric/selectric.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="admin/assets/css/style.css">
  <link rel="stylesheet" href="admin/assets/css/components.css">
  <link rel="stylesheet" href="vendors/linericon/style.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="admin/assets/css/custom.css">
  <link rel="shortcut icon" type="image/png" href="img/other/lSBHL-logo.png" />

  <style>
  body{
    background: linear-gradient(to right, rgba(255,255,255,0.5), rgba(255,255,255,0.9)), url(./img/avatar/post6.png);
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>
</head>

<body>
  
  <div class="loader"></div>

  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="card card-primary">
              <div class="card-header">
                <h4><i data-feather="edit"></i> Register</h4>
              </div>
              <div class="card-body">
                <form method="POST" action="./components/auth-register.php">
                  <div class="row">
                   <?php
                   if (isset($_GET['action'])) {
                     $error = $_GET['action'];

                     if ($error == "user_exists") {
                       echo "<div class='alert alert-danger offset-md-1'>
                              <strong>Error! : </strong>".$_GET['count']." Users already exists with the credentails <strong>Please use other credentials</strong>.
                            </div>";
                     }elseif ($error == "passwords_not_same") {
                       echo "<div class='alert alert-danger offset-md-1'>
                              <strong>Error! : </strong> The passwords are not the same <strong>Please provide the same passwords</strong>.
                            </div>";
                     }elseif ($error == "registeration_not_done") {
                       echo "<div class='alert alert-danger offset-md-1'>
                              <strong>Error! : </strong>There was an issue with the database <strong>Please try to refresh the browser and try again</strong>.
                            </div>";
                     }
                   }
                   ?>
                    <div class="form-group col-6">
                      <label for="frist_name"><i class="lnr lnr-user"></i> First Name</label>
                      <input id="frist_name" name="fname" type="text" class="form-control" required  autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name"><i class="lnr lnr-user"></i> Last Name</label>
                      <input id="last_name" type="text" name="lname" class="form-control" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email"><i class="lnr lnr-envelope"></i> Email</label>
                    <input id="email" type="email"  name="email" class="form-control" required>
                    <div class="invalid-feedback">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="email"><i class="lnr lnr-phone"></i> Phone</label>
                    <input id="email"  name="phone" type="text" class="form-control" required>
                    <div class="invalid-feedback">
                    </div>

                    <div class="form-group my-2">
                    <label for="email">Register as</label>
                    <select class="form-control " required name="role">
                      <option>Student</option>
                      <option>Landlord</option>
                    </select>
                    </div>

                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="password" class="d-block"><i class="lnr lnr-lock"></i> Password</label>
                      <input id="password" type="password" name="pwd" class="form-control pwstrength" required data-indicator="pwindicator"
                        >
                      <div id="pwindicator" class="pwindicator">
                        <div class="bar"></div>
                        <div class="label"></div>
                      </div>
                    </div>
                    <div class="form-group col-6">
                      <label for="password2" class="d-block"><i class="lnr lnr-lock"></i> Password Confirmation</label>
                      <input id="password2" type="password" name="pwd2" class="form-control " required>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                      <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="register">
                      Register
                    </button>
                  </div>
                </form>
              </div>
              <div class="mb-4 text-muted text-center">
                Already Registered? <a href="auth-login.php">Login</a>
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


<!-- auth-register.html  21 Nov 2019 04:05:02 GMT -->
</html>