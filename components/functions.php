<?php
/*main picture*/
function getMainImage()
  {
    require "./config/config.php";
    $imguser = mysqli_query($conn, "SELECT * FROM user_images WHERE user_id ='$_SESSION[userid]'");
  $img_row = mysqli_fetch_array($imguser);
   $img = $img_row['image'];
   if ($img == null) {
     $MainPic = '<i class="fa fa-user text-center text-primary"></i>';
   }else{
    $MainPic = '<img src="./img/users/'.$img.'" width="20px" height="20px" style="border-radius: 50%;">';
   }

   return $MainPic;
  }

function getAmount()
{
   require "./config/config.php";
  $tenants_amount = mysqli_query($conn, "SELECT * FROM ((users INNER JOIN boardinghouse ON users.user_id = boardinghouse.Landloard_id) INNER JOIN room ON boardinghouse.bh_id = room.b_id)");

  $row_amount = mysqli_fetch_array($tenants_amount);

  $amount_bh = $row_amount['room_amount'];

  return $amount_bh;

}

  function getUserData()
  {
    require "./config/config.php";
    $usrData = mysqli_query($conn, "SELECT * FROM user WHERE user_id ='$_SESSION[userid]'");
  $data_row = mysqli_fetch_array($imguser);
   $dat = $data_row['image'];
   
   $user_data = "";





   return $MainPic;
  }
/*main picture end*/

  // Tenant starts here
function progressPay($amount,$room_amount)
  {
   $totalAmount = ($amount/$room_amount)*100;

   return $totalAmount;
  }



  function statusPay($amount,$room_amount)
  {
    if ($amount == $room_amount) {
    $status1 = '<div class="badge badge-success badge-shadow"> Complete</div>';
  }else{
    $status1 = '<div class="badge badge-danger badge-shadow">Not Complete</div>';;
  }

  return $status1;
  }



  function getImage($uid)
  {
    require "./config/config.php";
    $imguser = mysqli_query($conn, "SELECT * FROM user_images WHERE user_id ='$uid'");
  $img_row = mysqli_fetch_array($imguser);
   $pic1 = $img_row['image'];
   if ($pic1 == null) {
     $pic = '<i class="fa fa-user text-center col-md-12 fa-2x text-primary"></i>';
   }else{
    $pic = '<img alt="image" src="./img/users/'.$pic1.'" width="35">';
   }

   return $pic;
  }


  // Tenant end here


function getMyBoardingHouses($user_id)
{
  require './config/config.php';
  $bhData = " ";
  $bh = mysqli_query($conn, "SELECT * FROM boardinghouse WHERE Landloard_id ='$user_id'");
  
  while($bh_row = mysqli_fetch_array($bh)){
    if (mysqli_num_rows($bh) == null) {
     $bhData = '<i class="fa fa-user text-center col-md-12 fa-2x text-primary"></i>';
   }else{
    $bhData .= '<tr>
        <td>
          Room Number '.$bh_row['house_number'].'
        </td>
        <td>'.$bh_row['name'].'</td>
        <td><img alt="image" src="./img/houses/'.$bh_row['bh_photo'].'" width="35"></td>
        <td>'.$bh_row['location'].'</td>
        <td>'.$bh_row['Road'].'</td>
        <td><a href="#" class="btn btn-primary">Detail</a></td>
      </tr>';
   }
  }
   
   

   return $bhData;
}

function getMyBoardingHousesRooms($user_id)
{
  require './config/config.php';
  $bhRoom = " ";
  $Bhroom = mysqli_query($conn, "SELECT * FROM ((users INNER JOIN boardinghouse ON users.user_id = boardinghouse.Landloard_id) INNER JOIN room ON boardinghouse.bh_id = room.b_id) WHERE user_id = '$user_id'");
  
  while($bh_row = mysqli_fetch_array($Bhroom)){
    if (mysqli_num_rows($Bhroom) == 0) {
     $bhRoom .= '
     <div class="container card py-3 my-4 shadow" style="border-top: 3px solid #6777ef;">
        <div class="row">
     <h6 class="col-md-12 text-center">No Rooms found</h6>
     </div>
     </div>';
   }else{
    $bhRoom .= '<div class="container card py-3 my-4 shadow" style="border-top: 3px solid #6777ef;">
              <div class="row">
                <div class="col-md-2">
                  <img src="img/rooms/'.$bh_row['room_image'].'" class="col-md-12" >
                </div>
                <div class="col-md-6">
                  <h6 class="col-md-12 text-uppercase py-2 text-primary display-5" id="bhName">Room Number '.$bh_row['room_number'].'</h6>
                <div class="col-md-12 py-2">
                 <i class="fa fa-money"></i> Price <span class="float-right">K <span id="amount">'.$bh_row['room_amount'].'</span>/Bed space</span>
                </div>
                <div class="col-md-12 py-2">
                  <i class="fa fa-bed"></i> Available bed spaces <span class="float-right">'.$bh_row['room_capacity'].'</span>
                </div>
                </div>
                <div class="col-md-4">
                  <button class="col-md-7 my-1 text-uppercase btn btn-default text-white" style="background-color: #6777ef;" data-toggle="modal" data-target="#editMemberModal" onclick="getDetails()"><i class="fa fa-edit"></i> Edit Details</button>

                   <button class="col-md-7 my-1 text-uppercase btn btn-primary text-white" data-toggle="modal" data-target="#searchModal" onclick="getDetails()"><i class="fa fa-users"></i> Room Members</button>

                    <button class="col-md-7 my-1 text-uppercase btn btn-danger text-white" data-toggle="modal" data-target="#searchModal" onclick="getDetails()"><i class="fa fa-trash"></i> Delete</button>
                </div>
              </div>
            </div>';
   }
  }
   
   

   return $bhRoom;
}


function getMyBoardingHousesRoomsAll()
{
  require './config/config.php';
  $bhRoom = " ";
  $Bhroom = mysqli_query($conn, "SELECT * FROM ((users INNER JOIN boardinghouse ON users.user_id = boardinghouse.Landloard_id) INNER JOIN room ON boardinghouse.bh_id = room.b_id) ORDER BY r_id DESC");
  
  while($bh_row = mysqli_fetch_array($Bhroom)){
    if (mysqli_num_rows($Bhroom) == 0) {
     $bhRoom .= '
     <div class="container card py-3 my-4 shadow" style="border-top: 3px solid #6777ef;">
        <div class="row">
     <h6 class="col-md-12 text-center">No Rooms found</h6>
     </div>
     </div>';
   }else{
    $bhRoom .= '<div class="container card py-3 my-4 shadow" style="border-top: 3px solid #6777ef;">
              <div class="row">
                <div class="col-md-2">
                  <img src="img/rooms/'.$bh_row['room_image'].'" class="img-responsive" width="100%" height="150px" >
                </div>
                <div class="col-md-6">
                  <h6 class="col-md-12 text-uppercase py-2 text-primary display-5" id="bhName">'.$bh_row['name'].'</h6>
               <div class="col-md-12 py-2">
                Price <span class="float-right">K '.$bh_row['room_amount'].'/Bed space</span>
              </div>
              <div class="col-md-12 py-2">
                Available Rooms <span class="float-right">'.$bh_row['room_capacity'].'</span>
              </div>
               <div class="col-md-12 py-2">
                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i> <span class="float-right">0 Reviews</span>
              </div>
                </div>
                <div class="col-md-4">
                   <a href="./houseDetails.php" class="col-md-7 my-2 text-uppercase btn btn-default text-white" style="background-color: #6777ef;">Details</a>

                     <button class="col-md-7 my-2 text-uppercase btn btn-primary text-white" data-toggle="modal" data-target="#searchModal" onclick="getDetails()">Make Reservation</button>
                </div>
              </div>
            </div>';
   }
  }
   
   

   return $bhRoom;
}



function getAllLandlords()
{
  require './config/config.php';
  $bhRoom = " ";
  $Bhroom = mysqli_query($conn, "SELECT * FROM ((users INNER JOIN boardinghouse ON users.user_id = boardinghouse.Landloard_id) INNER JOIN user_images ON users.user_id = user_images.user_id)");
  
  while($bh_row = mysqli_fetch_array($Bhroom)){
    if (mysqli_num_rows($Bhroom) == 0) {
     $bhRoom .= '<div class="col-md-12 my-2">
              <div class="card shadow" style="border-top: 3px solid #6777ef;">
              <div class="card-body text-center">
                No landlords to show
            </div>
            </div>';
   }else{
    $bhRoom .= '<div class="col-md-2 my-2">
              <div class="card shadow" style="border-top: 3px solid #6777ef;">
              <div class="card-body">
                <h6>'.$bh_row['name'].'</h6>
                <img src="img/users/'.$bh_row['image'].'" class="img-responsive" width="100%">
                '.$bh_row['fname'].' '.$bh_row['lname'].'
              </div>
              <div class="card-footer">
                <a href="./houseDetails.php" class="btn btn-default text-white" style="background-color: #6777ef;"><i class="fa fa-eye"></i> View Details</a>
              </div>
            </div>
            </div>';
   }
  }
   
   

   return $bhRoom;
}
?>

<!-- <div class="container card py-3 my-4 shadow" style="border-top: 3px solid #6777ef;">
  <div class="row">
    <div class="col-md-2">
      <img src="img/avatar/bg.jpg" class="col-md-12" >
    </div>
    <div class="col-md-6">
      <h6 class="col-md-12 text-uppercase py-2 text-primary display-5" id="bhName">Room Number 10</h6>
    <div class="col-md-12 py-2">
     <i class="fa fa-money"></i> Price <span class="float-right">K <span id="amount">500</span>/Bed space</span>
    </div>
    <div class="col-md-12 py-2">
      <i class="fa fa-bed"></i> Available bed spaces <span class="float-right">1/3</span>
    </div>
    </div>
    <div class="col-md-4">
      <button class="col-md-7 my-1 text-uppercase btn btn-default text-white" style="background-color: #6777ef;" data-toggle="modal" data-target="#editMemberModal" onclick="getDetails()"><i class="fa fa-edit"></i> Edit Details</button>

       <button class="col-md-7 my-1 text-uppercase btn btn-primary text-white" data-toggle="modal" data-target="#searchModal" onclick="getDetails()"><i class="fa fa-users"></i> Room Members</button>

        <button class="col-md-7 my-1 text-uppercase btn btn-danger text-white" data-toggle="modal" data-target="#searchModal" onclick="getDetails()"><i class="fa fa-trash"></i> Delete</button>
    </div>
  </div>
</div> -->

