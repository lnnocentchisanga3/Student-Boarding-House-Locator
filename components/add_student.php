<?php
session_start();
$land_d = $_SESSION['userid'];
$date = date("d/m/Y");
require "../config/config.php";
if (isset($_POST['send'])) {

$sid = mysqli_real_escape_string($conn, $_POST['sid']);
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$age = mysqli_real_escape_string($conn, $_POST['age']);
$program = mysqli_real_escape_string($conn, $_POST['program']);
$year = mysqli_real_escape_string($conn, $_POST['year']);

$sql = mysqli_query($conn, "SELECT * FROM student WHERE s_id = '$land_d'");
if (mysqli_num_rows($sql)==null) {
	$query = mysqli_query($conn, "INSERT INTO student(s_id,name,last,age,program,year) VALUES('$sid','$fname','$lname','$age','$program','$year')");

if (!$query) {
	header("location: ../edit_and_student.php?edit=done_not_added");
}else{
	header("location: ../edit_and_student.php?edit=done_added");
}

}else{
	header("location: ../edit_and_student.php?edit=done_user_exist");
}



}
?>