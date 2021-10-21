<?php
session_start();
require "../config/config.php";
$houseId = $_GET['houseId'];

$img_query = mysqli_query($conn, "SELECT * FROM boardinghouse WHERE bh_id ='$houseId'");
$img = mysqli_fetch_array($img_query);

$photo = $img['bh_photo'];
$bh_id = $img['bh_id'];

$delete = mysqli_query($conn, "DELETE FROM boardinghouse WHERE bh_id ='$houseId'");

if ($delete) {
	if (unlink('../img/houses/'.$photo.'')) {
		$query = mysqli_query($conn, "DELETE FROM room WHERE b_id ='$bh_id'");
		if ($query) {
			echo "The Boarding house and its rooms has been deleted successfully !!";
		}else{
			echo "The Boarding house has been deleted but the room has not been deleted";
		}
	}else{
		echo "The Boarding house has been deleted but image not deleted";
	}
	/*echo "The room has been deleted successfully !!".$photo;*/
}else{
	echo "The Boarding house has not been deleted because there was an error !!";

}

/**/


?>