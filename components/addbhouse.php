<?php
session_start();
 require "../config/config.php";

 if (isset($_POST['addbh'])) {
   
   $name = mysqli_real_escape_string($conn, $_POST['bhname']);
   $location = mysqli_real_escape_string($conn, $_POST['bhlocation']);
   $bhnumber = mysqli_real_escape_string($conn, $_POST['bhnumber']);
   $street = mysqli_real_escape_string($conn, $_POST['street']);
   $photo = $_FILES["bhpicture"]["name"]; //stores the original filename from the client
  $tmp = $_FILES["bhpicture"]["tmp_name"]; //stores the name of the designated temporary file
   $landlord = mysqli_real_escape_string($conn, $_SESSION['userid']);


   $query = mysqli_query($conn, "INSERT INTO boardinghouse(name,Landloard_id,location,house_number,Road,bh_photo) VALUES('$name','$landlord','$location','$bhnumber','$street','$photo')");

   if ($query) {
     move_uploaded_file($tmp, "../img/houses/".$photo);
     header("location: ../landlord_acc.php?pages=boardinghouse&action=houseadded");
   }else{
     /*header("location: ../landlord_acc.php?pages=boardinghouse&action=houseNotAdded");*/

     echo "Error"." ".mysqli_error($conn);
   }
 }

?>