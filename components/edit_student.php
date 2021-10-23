<?php
session_start();
$land_d = $_SESSION['userid'];
$date = date("d/m/Y");
require "../config/config.php";
if (isset($_POST['save'])) {

$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$phone = mysqli_real_escape_string($conn, $_POST['phone']);

$query = mysqli_query($conn, "UPDATE users SET fname='$fname', lname='$lname',email='$email',phone='$phone' WHERE user_id='$_SESSION[userid]' ");

if (!$query) {
	header("location: ../edit_and_student.php?edit=not_done");
}else{
	header("location: ../edit_and_student.php?edit=done");
}

}
?>