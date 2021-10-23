<?php

session_start();
$user_id = $_SESSION['userid'];
$land_d = $_SESSION['landlord_id'];
$date = date("d/m/Y");
require "../config/config.php";
$roomid = $_GET['roomId'];

$cancel = mysqli_query($conn, "DELETE FROM reservation WHERE s_id = '$user_id' AND room_id = '$roomid' ");

if ($cancel) {
	echo "Room reservation has been canceled";
}else{
	echo "Reservation cancelation has failed ";
}



?>