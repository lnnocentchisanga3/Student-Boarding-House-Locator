<?php
session_start();
$date = date("d/m/Y");
require "../config/config.php";

	$photo = $_FILES["ppicture"]["name"]; //stores the original filename from the client
	$tmp = $_FILES["ppicture"]["tmp_name"]; //stores the name of the designated temporary file
	// $errorimg = $_FILES["ppicture"][“error”]; //stores any error code resulting from the transfer

	$check = mysqli_query($conn, "SELECT * FROM user_images WHERE user_id = '$_SESSION[userid]' ");
	if (mysqli_num_rows($check) == 0) {
		$query = mysqli_query($conn, "INSERT INTO user_images(user_id,image,date_added) VALUES('$_SESSION[userid]','$photo','$date')");

	if ($query) {
		if (move_uploaded_file($tmp, "../img/users/$photo")) {
			echo "<i>Picture upload is complete !</i>";
		}else{
			echo "File upload failed".mysqli_error($conn);
		}

	}else{
		echo "File upload failed".mysqli_error($conn);
	}
	}else{
		$query = mysqli_query($conn, "UPDATE user_images SET user_id = '$_SESSION[userid]',image = '$photo' ,date_added = '$date' WHERE user_id = '$_SESSION[userid]'");

		if ($query) {
		if (move_uploaded_file($tmp, "../img/users/$photo")) {
			echo "<i>Picture upload is complete !</i>";
		}else{
			echo "File upload failed".mysqli_error($conn);
		}

	}else{
		echo "File upload failed".mysqli_error($conn);
	}

	}


?>

<?php 

?>