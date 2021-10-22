<?php
session_start();
$date = date("d/m/Y");
require "../config/config.php";

$bhId = mysqli_real_escape_string($conn, $_POST['bhId']);
$bhname = mysqli_real_escape_string($conn, $_POST['bhname']);
$bhnumber = mysqli_real_escape_string($conn, $_POST['bhnumber']);
$bhlocation = mysqli_real_escape_string($conn, $_POST['bhlocation']);
$street = mysqli_real_escape_string($conn, $_POST['street']);
$photo = $_FILES["bhpicture"]["name"]; //stores the original filename from the client
$tmp = $_FILES["bhpicture"]["tmp_name"]; //stores the name of the designated temporary file

$getBh = mysqli_query($conn, "SELECT bh_photo FROM boardinghouse WHERE bh_id = '$bhId'");
$row = mysqli_fetch_array($getBh);
$bhphoto = $row['bh_photo'];


$query = mysqli_query($conn, "UPDATE `boardinghouse` SET name = '$bhname', location = '$bhlocation', house_number = '$bhnumber', Road = '$street', bh_photo = '$photo' WHERE bh_id = '$bhId' ");

if (!$query) {
	/*echo "Error"." ".mysqli_error($conn)."";*/
	header("location: ../landlord_acc.php?pages=boardinghouse&action=houseadded&action=HouseSaveError12");
}else{
	if (unlink('../img/houses/'.$bhphoto)) {
		if (move_uploaded_file($tmp, '../img/houses/'.$photo)) {
			/*echo "House details has been saved";*/
			header("location: ../landlord_acc.php?pages=boardinghouse&action=houseadded&action=HouseSaved");
		}else{
			/*echo "House details has not been saved";*/
			header("location: ../landlord_acc.php?pages=boardinghouse&action=houseadded&action=HouseNotSaved");
		}
	}else{
		/*echo "Error"." ".mysqli_error($conn)."";*/
		move_uploaded_file($tmp, '../img/houses/'.$photo);
		header("location: ../landlord_acc.php?pages=boardinghouse&action=houseadded&action=HouseSaveError");
	}
}
?>