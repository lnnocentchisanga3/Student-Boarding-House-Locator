<?php
require '../config/config.php';
session_start();
$img = mysqli_query($conn, "SELECT * FROM user_images WHERE user_id ='$_SESSION[userid]' ORDER BY img_id DESC");

if (mysqli_num_rows($img) == 0) {
	echo ' <i class="fa fa-user fa-5x" style="margin-left:40%; margin-top: 100px;"></i><br><h2 class="col-md-12 text-center">Upload a photo</h2>';
}else{
	 $img_row = mysqli_fetch_array($img);

echo '<img src="img/users/'.$img_row["image"].'" width="100%" height="auto">';
}
?>