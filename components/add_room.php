<?php
session_start();
$land_d = $_SESSION['userid'];
$date = date("d/m/Y");
require "../config/config.php";

$bhname = mysqli_real_escape_string($conn, $_POST['bhnum']);
$roomnum = mysqli_real_escape_string($conn, $_POST['roomnum']);
$amount = mysqli_real_escape_string($conn, $_POST['amount']);
$cap = mysqli_real_escape_string($conn, $_POST['capacity']);
$photo = $_FILES["rphoto"]["name"]; //stores the original filename from the client
$tmp = $_FILES["rphoto"]["tmp_name"]; //stores the name of the designated temporary file

$getBh = mysqli_query($conn, "SELECT bh_id FROM boardinghouse WHERE name = '$bhname' AND Landloard_id = '$land_d'");
$row = mysqli_fetch_array($getBh);
$bhnum = $row['bh_id'];


$query = mysqli_query($conn, "INSERT INTO room(b_id,room_number,room_amount,room_capacity,room_image) VALUES('$bhnum','$roomnum','$amount','$cap','$photo')");

if (!$query) {
	echo "<i class='text-danger'>Error"." ".mysqli_error($conn)."</i>";
}else{
	if (move_uploaded_file($tmp, '../img/rooms/'.$photo)) {
		echo "<i class='text-success'>Room has been added</i>";
	}else{
		echo "<i class='text-danger'>Error"." ".mysqli_error($conn)."</i>";
	}
}
?>