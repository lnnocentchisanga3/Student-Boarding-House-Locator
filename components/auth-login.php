<?php

require '../config/config.php';
if (isset($_POST['login'])) {
	
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pwd = mysqli_real_escape_string($conn, $_POST['password']);
	/*$agree = mysqli_real_escape_string($conn, $_POST['agree']);*/

		$pwd_final = md5($pwd);


		$sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' OR phone='$email'");
		$num1 = mysqli_num_rows($sql);
		if ( $num1 <= 0) {
			header("location: ../auth-login.php?action=user_not_exists");
			echo $num;
		}else{
			$query = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
			$row = mysqli_fetch_array($query);
		if ($pwd_final != $row['pwd']) {
			header("location: ../auth-login.php?action=wrong_pwd");

			echo "Error : ".mysqli_error($conn);
			
		}else{
			session_start();
			$status = mysqli_query($conn, "UPDATE users SET status = 'on' WHERE email ='$email' OR phone = '$email'");
			if ($status) {
				$details = "SELECT * FROM users WHERE email ='$email'";
				$sql_query = mysqli_query($conn, $details);
				$row = mysqli_fetch_array($sql_query);

				$_SESSION['userid'] = $row['user_id'];
				$_SESSION['fname'] = $row['fname'];
				$_SESSION['lname'] = $row['lname'];
				$_SESSION['role'] = $row['role'];

				if ($_SESSION['role'] == "Student") {
					header("location: ../index.php?");
				}elseif ($_SESSION['role'] == "Landlord") {
					header("location: ../landlord_acc.php?pages=rooms");
				}else{
					header("location: ../Admin/index.php");
				}
			}else{
				header("location: ../auth-login.php?action=error_occured");
			}
			echo $row['pwd']."<br>";

			echo $pwd_final;

		}
		}
}

?>
