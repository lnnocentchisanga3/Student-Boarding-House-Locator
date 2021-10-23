<?php
$userid = $_GET['edit'];

$get_user = mysqli_query($conn, "SELECT * FROM users WHERE user_id = '$_SESSION[userid]' ");
$row_user = mysqli_fetch_array($get_user);



?>
<div class="container-fluid">
	<div class="row">
		<h4 class="col-md-12 py-3 bg-white text-dark shadow-sm"><i class="fa fa-edit"></i> Edit your details</h4>
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
		    	<form action="./components/edit_user.php" method="POST">
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
		
		<div class="col-md-6">
		   <div class="card shadow-sm">
		   	<div class="card-header bg-danger text-white"><i class="fa fa-lock"></i> Edit Password</div>
		    <div class="card-body">
		    	<form action="./components/change_pwd.php" method="POST">
		    		<div class="input-group mt-3">
		    			<input type="text" name="pwd" class="form-control mx-2" placeholder="Enter new password">
		    		</div>
		    		<button class="btn btn-danger col-md-3 my-2" name="send_pwd">Save <i class="fa fa-save"></i></button>
		    	</form>
		    </div>
		   </div>
		</div>
	</div>
</div>