<?php
session_start();
require "../config/config.php";
$l_id = $_SESSION['landlord_id_num'];

$roomId = $_GET['delete'];

$img_query = mysqli_query($conn, "SELECT room_image FROM room WHERE r_id ='$roomId'");
$img = mysqli_fetch_array($img_query);

$photo = $img['room_image'];

$delete = mysqli_query($conn, "DELETE FROM room WHERE r_id ='$roomId'");

if ($delete) {
	if (unlink('../img/rooms/'.$photo.'')) {
		echo "<h6 class='text-success mx-2'>The room has been deleted successfully !!</h6>";
	}else{
		echo "<h6 class='text-success mx-2'>The room has been deleted but image not deleted</h6>";
	}
	/*echo "<h6 class='text-success mx-2'>The room has been deleted successfully !!</h6>".$photo;*/
}else{
	echo "<h6 class='text-danger mx-2'>The room has not been deleted because there was an error !!</h6>";

}


?>