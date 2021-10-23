<?php
session_start();
$land_d = $_SESSION['userid'];
$date = date("d/m/Y");
require "../config/config.php";
if (isset($_POST['send_pwd'])) {

$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
$password = md5($pwd);

$query = mysqli_query($conn, "UPDATE users SET pwd='$password' WHERE user_id='$_SESSION[userid]' ");

if (!$query) {
	header("location: ../edit_and_student.php?edit=not_done_pwd");
}else{
	header("location: ../edit_and_student.php?edit=done_pwd");
}

}
?>