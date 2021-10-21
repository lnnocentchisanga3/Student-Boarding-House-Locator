<?php
session_start();
require "../config/config.php";
$id = $_GET['tenant'];


/*echo "The ID is".$id;*/

$query = mysqli_query($conn, "UPDATE reservation SET status = 'approved' WHERE r_id = '$id'");

if ($query) {
  echo "Reservation has been approved";
}else{
  echo "Reservation has failed to be approved";
}

?>