<?php
session_start();
$land_d = $_SESSION['userid'];
$date = date("d/m/Y");
require "../config/config.php";

$room_id = mysqli_real_escape_string($conn, $_POST['room_id']);
$photo = $_FILES["rphoto"]["name"]; //stores the original filename from the client
$tmp = $_FILES["rphoto"]["tmp_name"]; //stores the name of the designated temporary file

$getBh = mysqli_query($conn, "SELECT room_image FROM room WHERE r_id = '$room_id'");
$row = mysqli_fetch_array($getBh);

$img_store = $row['room_image'];

if (unlink('../img/rooms/'.$img_store)) {
	$query = mysqli_query($conn, "UPDATE room SET room_image = '$photo' WHERE r_id ='$room_id' ");

if (!$query) {
	header("location: ../landlord_acc.php?pages=rooms&edit=not_uploaded");
}else{
	if (move_uploaded_file($tmp, '../img/rooms/'.$photo)) {
		header("location: ../landlord_acc.php?pages=rooms&edit=done_uploaded");
	}else{
		header("location: ../landlord_acc.php?pages=rooms&edit=not_done_upload");
	}
}
}else{
		$query = mysqli_query($conn, "UPDATE room SET room_image = '$photo' WHERE r_id ='$room_id' ");
	if ($query) {
		move_uploaded_file($tmp, '../img/rooms/'.$photo);
		header("location: ../landlord_acc.php?pages=rooms&edit=uploaded_but_not_deleted");
	}else{
		header("location: ../landlord_acc.php?pages=rooms&edit=not_deleted");
	}
}
?>