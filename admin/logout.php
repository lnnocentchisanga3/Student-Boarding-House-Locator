<?php
if (isset($_GET['action'])) {
	if ($_GET['action'] == "logout") {
		session_start();
		session_unset();
		session_destroy();
		header("location: ../auth-login.php");
	}else{
		header("location: ./index.php");
	}
}

?>