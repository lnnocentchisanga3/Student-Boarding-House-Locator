<?php
 require '../config/config.php';
session_start();
$id = $_GET['houseId'];

$query = mysqli_query($conn, "SELECT * FROM boardinghouse WHERE bh_id = '$id'");
$row = mysqli_fetch_array($query);


echo '<form action="./components/editBoardingHouse.php" enctype="multipart/form-data" method="POST" id="editBoardingHouse">
            <label>House ID</label>
           <input type="text" name="bhId" class="form-control" required="true" value="'.$row['bh_id'].'" readonly>
            <label>Name</label>
           <input type="text" name="bhname" class="form-control" required="true" value="'.$row['name'].'">
           <label>Location</label>
           <input type="text" name="bhlocation" class="form-control" value="'.$row['location'].'">
           <label>House Number</label>
           <input type="text" name="bhnumber" class="form-control" value="'.$row['house_number'].'">
           <label>Street</label>
           <input type="text" name="street" class="form-control" value="'.$row['Road'].'">
           <label>Add a photo</label>
           <input type="file" name="bhpicture" accept="image/*" class="form-control" value="'.$row['bh_photo'].'">
            <button name="addbh"  class="btn btn-warning my-2">Save <i class="fa fa-save"></i></button>
          </form>';

?>

 		