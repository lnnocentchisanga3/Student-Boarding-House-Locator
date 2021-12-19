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
			if ($role == "Student") {
				header("location: ../auth-login.php?");
			}elseif ($role == " ") {
				header("location: ../auth-login.php?");
			}else{
				$get_id = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' ");

				$get_query = mysqli_fetch_array($get_id);
				$query_landlord = mysqli_query($conn, "INSERT INTO landloard(`user_id`,`L_name`,`F_name`) VALUES('$get_query[user_id]','$lname','$fname')");
				if ($query_landlord) {
					header("location: ../auth-login.php?");
				}else{
					echo "Error : ".mysqli_error($conn);
				}
			}
			
		}else{
			/*header("location: ../login.php?action=registeration_not_done");*/

			echo "Error : ".mysqli_error($conn);
		}
		}

	}
}

?>
