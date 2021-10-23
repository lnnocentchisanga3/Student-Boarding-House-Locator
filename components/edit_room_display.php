<?php
$roomid = $_GET['roomId'];

session_start();
$land_d = $_SESSION['userid'];
$date = date("d/m/Y");
require "../config/config.php";

$query = mysqli_query($conn, "SELECT * FROM room WHERE r_id ='$roomid' ");
$row = mysqli_fetch_array($query);


echo '<form action="./components/edit_room.php" method="POST">
			<label>Room Id</label>
           <input type="text" class="form-control" readonly name="room_id" value="'.$row['r_id'].'">
            <label>Boarding house Number</label>
           <input type="text" class="form-control" name="bhnum" value="'.$row['b_id'].'">

            <label>Room Number</label>
            <input name="roomnum" type="text" class="form-control" value="'.$row['room_number'].'">

            <label>Room amount</label>
           <input type="number" name="amount" class="form-control" value="'.$row['room_amount'].'">

           <label>Room Capacity</label>
            <input type="text" class="form-control" name="capacity" value="'.$row['room_capacity'].'">
            <button class="btn btn-warning my-2" name="save" >Save <i class="fa fa-save"></i></button>
          </form>
          <form action="./components/upload_room_photo.php" enctype="multipart/form-data" method="POST" class="mt-4">
          <label>Room Id</label>
           <input type="text" class="form-control" readonly name="room_id" value="'.$row['r_id'].'">
          <label>Room picture</label>
            <input type="file" name="rphoto" class="form-control my-2">
            <button class="btn btn-warning my-2" >Upload <i class="fa fa-upload"></i></button>
          </form>
          ';

?>