<?php
/*echo getMyBoardingHousesRoomsAll();*/
session_start();
require "../config/config.php";

$house_search = $_GET['house_search'];

$Bhroom = mysqli_query($conn, "SELECT * FROM users INNER JOIN boardinghouse ON users.user_id = boardinghouse.Landloard_id  WHERE name LIKE '%$house_search%' OR Road LIKE '%$house_search%' OR house_number LIKE '%$house_search%' OR location LIKE '%$house_search%' ORDER BY bh_id DESC");
  
  while($bh_row = mysqli_fetch_array($Bhroom)){
    $id = $bh_row['bh_id'];
    $img = mysqli_query($conn , "SELECT * FROM `user_images` WHERE user_id ='$bh_row[user_id]' ");
    $photo = mysqli_fetch_array($img);

    $num = mysqli_query($conn, "SELECT * FROM room WHERE b_id = '$id'");
    $s_number = mysqli_num_rows($num);
    $row = mysqli_fetch_array($num);

    if (mysqli_num_rows($Bhroom) == null) {
     echo '
     <div class="col-md-12 card py-3 my-4 ml-5 mx-2 shadow" style="border-top: 3px solid #6777ef;">
        <div class="row">
     <h6 class="col-md-12 text-center">There are no results for your query 😕😒</h6>
     </div>
     </div>';
   }else{
    echo '<div class="col-md-5 card py-3 my-4 ml-5 mx-2 shadow" style="border-top: 3px solid #6777ef;">
              <div class="row">
                <div class="col-md-6">
                  <img src="img/houses/'.$bh_row['bh_photo'].'" class="img-responsive" width="100%" height="150px" >
                </div>
                <div class="col-md-6">
                  <h6 class="col-md-12 text-uppercase py-2 text-primary display-5" id="bhName">'.$bh_row['name'].'</h6>
               <div class="col-md-12 py-2">
                Price <span class="float-right">K '.$row['room_amount'].'/Bed space</span>
              </div>
              <div class="col-md-12 py-2">
                Available Rooms <span class="float-right">'.$s_number.'</span>
              </div>
              
              <div class="col-md-12 py-2">
                 <img src="img/users/'.$photo['image'].'" class="img-responsive" width="50px" height="50px" style="border-radius: 50%"> <span class="float-right py-3">'.$bh_row['fname'].' '.$bh_row['lname'].'</span>
              </div>
                </div>
                <div class="col-md-4">
                   <a href="./houseDetails.php?get_details='.$bh_row['bh_id'].'" class="col-md-7 my-2 text-uppercase btn btn-default text-white" style="background-color: #6777ef;">Details</a>
                </div>
              </div>
            </div>';
   }
 }
?>