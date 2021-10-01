<?php

require '../config/config.php';
if (isset($_POST['register'])) {
	
	$fname = mysqli_real_escape_string($conn, $_POST['fname']);
	$lname = mysqli_real_escape_string($conn, $_POST['lname']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$phone = mysqli_real_escape_string($conn, $_POST['phone']);
	$role = mysqli_real_escape_string($conn, $_POST['role']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	$pwd2 = mysqli_real_escape_string($conn, $_POST['pwd2']);
	$agree = mysqli_real_escape_string($conn, $_POST['agree']);


	if ($pwd != $pwd2) {
		header("location: ../login.php?action=passwords_not_same");
	}else{

		
		$pwd_final = md5($pwd);


		$sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' OR phone='$phone'");
		$num = mysqli_num_rows($sql);
		if ( $num >= 1) {
			header("location: ../login.php?action=user_exists&count=$num");
			echo $num;
		}else{
			$query = mysqli_query($conn, "INSERT INTO users(`fname`,`lname`,`email`,`phone`,`role`,`pwd`,`agree`,`status`) VALUES('$fname','$lname','$email','$phone','$role','$pwd_final','$agree','off')");
		if ($query) {
			header("location: ../auth-login.php?");
		}else{
			/*header("location: ../login.php?action=registeration_not_done");*/

			echo "Error : ".mysqli_error($conn);
		}
		}

	}
}

?>
