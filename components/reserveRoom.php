<?php
session_start();
$user_id = $_SESSION['userid'];
$land_d = $_SESSION['landlord_id'];
$date = date("d/m/Y");
require "../config/config.php";
$roomid = $_GET['roomId'];

$getAmount = mysqli_query($conn, "SELECT * FROM room WHERE r_id = '$roomid'");
$row = mysqli_fetch_array($getAmount);

$amount = $row['room_amount'];
/*$amount = $_GET['amount'];*/

$checkBook = mysqli_query($conn, "SELECT * FROM `reservation` WHERE s_id = '$user_id' AND Landloard_id = '$land_d'");
$get_details = mysqli_fetch_array($checkBook);
$status = $get_details['status'];



if (mysqli_num_rows($checkBook) == 0) {

	$checkuser = mysqli_query($conn, "SELECT * FROM `reservation` WHERE s_id = '$user_id'");
 	
 	if (mysqli_num_rows($checkuser) == 0) {
 		$query = mysqli_query($conn, "INSERT INTO reservation(s_id,Landloard_id,`date`,room_id,amount,status) VALUES('$user_id','$land_d','$date','$roomid','$amount','pending')");

 	if ($query) {
 		echo '<img src="img/other/paydone.gif" class="col-md-12" width="100%">
    <h5 class="col-md-12 text-center py-2 text-uppercase">Payment is Done<br>Just wait for the Confirmation</h5>';
 	}else{
 		echo "Error".mysqli_error($conn);
 	}
 	}else{
 		echo "Sorry you can not reserve two rooms";
 	}
 }else{
 	if ($status == "rejected") {
 		echo "<h6 class='text-danger'>Sorry you can not reserve a room at this boarding house because your previous reservation was rejected</h6>";
 	}elseif ($status == "approved") {
 		echo "Sorry you can not reserve two rooms";
 	}
 } 

/*echo "heoolo";*/
?>