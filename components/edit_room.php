<?php
session_start();
$land_d = $_SESSION['userid'];
$date = date("d/m/Y");
$roomid = $_SESSION['room_id'];
require "../config/config.php";

if (isset($_POST['save'])) {
	$room_id = mysqli_real_escape_string($conn, $_POST['room_id']);
	$bhnum = mysqli_real_escape_string($conn, $_POST['bhnum']);
	$roomnum = mysqli_real_escape_string($conn, $_POST['roomnum']);
	$amount = mysqli_real_escape_string($conn, $_POST['amount']);
	$cap = mysqli_real_escape_string($conn, $_POST['capacity']);


	$query = mysqli_query($conn, "UPDATE room SET b_id='$bhnum', room_number='$roomnum', room_amount='$amount', room_capacity='$cap' WHERE r_id = '$room_id' ");

	if (!$query) {
		header("location: ../landlord_acc.php?pages=rooms&edit=not_done");
	}else{
		header("location: ../landlord_acc.php?pages=rooms&edit=done");
	}
}
?>