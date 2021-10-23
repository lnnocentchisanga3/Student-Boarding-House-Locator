<!DOCTYPE html>
<html lang="en">


<!-- auth-login.html  21 Nov 2021 -->
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
  <style>
  body{
     background: linear-gradient(to right, rgba(255,255,255,0.5), rgba(255,255,255,0.9)), url(./img/avatar/bg.jpg);
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>
  <link rel="stylesheet" href="admin/assets/css/custom.css">
 <link rel="shortcut icon" type="image/png" href="img/other/lSBHL-logo.png" />
</head>
<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                <h4><i data-feather="user"></i> Login</h4>
              </div>
              <div class="col-md-12">
                <?php
                if (isset($_GET['action'])) {
                  $action = $_GET['action'];

                  if ($action == "user_not_exists") {
                    echo '<h6 class="py-2 text-danger text-center px-2" style="border-radius: 5px; border-left: 3px solid red;">You are not registered</h6>';
                  }elseif ($action == "wrong_pwd") {
                    echo '<h6 class="py-2 text-danger text-center px-2" style="border-radius: 5px; border-left: 3px solid red;">You are have entered a wrong password</h6>';
                  }elseif ($action == "login_first") {
                   echo '<h6 class="py-2 text-danger text-center px-2" style="border-radius: 5px; border-left: 3px solid red;">You are have to login first</h6>';
                  }
                }
                ?>
              </div>
              <div class="card-body">
                <form method="POST" action="./components/auth-login.php" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="email"><i class="lnr lnr-envelope"></i> Email</label>
                    <input id="email" type="email" name="email" placeholder="Email" class="form-control"  tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label"><i class="lnr lnr-lock"></i> Password</label>
                      <div class="float-right">
                        <a href="auth-forgot-password.php" class="text-small">
                          Forgot Password?
                        </a>
                      </div>
                    </div>
                    <input id="password" type="password" name="password" placeholder="password" class="form-control" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>
                  <!-- <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div> -->
                  <div class="form-group">
                    <button type="submit" name="login" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
                <!-- <div class="text-center mt-4 mb-3">
                  <div class="text-job text-muted">Login With Social</div>
                </div>
                <div class="row sm-gutters">
                  <div class="col-6">
                    <a class="btn btn-block btn-social btn-facebook">
                      <span class="fab fa-facebook"></span> Facebook
                    </a>
                  </div>
                  <div class="col-6">
                    <a class="btn btn-block btn-social btn-google">
                      <span class="fab fa-google"></span> google
                    </a>
                  </div>
                </div> -->

                <div class="mt-5 text-muted text-center">
                  Don't have an account? <a href="login.php">Create One</a>
                </div>
              </div>
            </div>
          </div>


          <div class="col-md-6">
            <h2 class="text-uppercase">Student Boarding House Locator</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

             <h2 class="font-20 text-uppercase">Our Goal</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua.</p>

             <h2 class="font-15 text-uppercase">Account</h2>
             <div class="my-3">
                <a href="./login.php" class="btn btn-primary text-white">Create an Account</a>
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


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
</html>