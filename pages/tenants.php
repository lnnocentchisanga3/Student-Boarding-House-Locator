<div class="col-md-12 mt-3">
<div class="container card py-3 shadow" >
  <div class="card-header">
    <div class="row">
      <div class="col-md-6"><i class="fa fa-users"></i> The Tenants</div>
      <div class="col-md-6">
        <input type="text" name="searchTenant" class="form-control col-md-6 offset-md-6" placeholder="Search" style="border-top-left-radius: 1.7rem; border-top-right-radius: 1.7rem;border-bottom-right-radius: 1.7rem; border-bottom-left-radius: 1.7rem;">
      </div>
    </div>
  </div>
  <div class="table-responsive">
  <table class="table table-striped" id="table-1">
    <thead>
      <tr>
        <th class="text-center">
          Room number
        </th>
        <th>Tenant Name</th>
        <th>Payment Progress</th>
        <th>Tenant</th>
        <th>Paid on Date</th>
        <th>Payment Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

      <?php
      $bh = mysqli_query($conn, "SELECT * FROM boardinghouse WHERE Landloard_id ='$_SESSION[userid]'");
      $bh_row = mysqli_fetch_array($bh);


      $tenants = mysqli_query($conn, "SELECT * FROM users JOIN reservation ON users.user_id = reservation.s_id WHERE Landloard_id ='$_SESSION[userid]' AND users.role = 'Student' ");

      while ($tenants_row = mysqli_fetch_array($tenants)) {

        if (mysqli_num_rows($tenants) == null) {
          echo 'error '." ".mysqli_error($conn);
        }else{
          $room = mysqli_query($conn, "SELECT * FROM room WHERE r_id ='$tenants_row[room_id]' ");
          $room_row = mysqli_fetch_array($room);
          $roomid = $room_row['r_id'];

          echo '<tr>
        <td>
          Room Number '.$roomid.'
        </td>
        <td>'.$tenants_row["fname"].' '.$tenants_row["lname"].'</td>
        <td class="align-middle">
          <div class="progress">
            <div class="progress-bar bg-success progress-bar-striped py-2" style="width: '.progressPay($tenants_row['amount'],$room_row['room_amount']).'%;">'.progressPay($tenants_row['amount'],$room_row['room_amount']).'%
            </div>
          </div>
        </td>
        <td>'.getImage($tenants_row['user_id']).'</td>
        <td>'.$tenants_row['date'].'</td>
        <td>'.statusPay($tenants_row['amount'],$room_row['room_amount']).'</td>
        <td><a href="#" class="btn btn-primary">Detail</a></td>
      </tr>';
        }
      }

      ?>
    </tbody>
  </table>
</div>
</div>
</div>