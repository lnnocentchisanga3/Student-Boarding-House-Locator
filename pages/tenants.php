<div class="col-md-12 mt-3">
<div class="container card py-3 shadow" >
  <div class="card-header">
    <div class="row">
      <div class="col-md-6"><i class="fa fa-users"></i> The Tenants</div>
      <div class="col-md-6">
        <input type="text" name="searchTenant" class="form-control col-md-6 offset-md-6" placeholder="Search by a phone number." style="border-top-left-radius: 1.7rem; border-top-right-radius: 1.7rem;border-bottom-right-radius: 1.7rem; border-bottom-left-radius: 1.7rem;" id="input" onkeyup="searchTenants()">
      </div>
    </div>
  </div>
  <div class="table-responsive">
  <table class="table table-striped" id="tableData">
    <thead>
      <tr>
        <th>Phone</th>
        <th class="text-center">
          Room number
        </th>
        <th>Tenant Name</th>
        <th>Photo</th>
        <th>Booked on Date</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

      <?php
      /*$bh = mysqli_query($conn, "SELECT * FROM boardinghouse WHERE Landloard_id ='$_SESSION[userid]'");
      $bh_row = mysqli_fetch_array($bh);*/

      /*$room = mysqli_query($conn, "SELECT * FROM room WHERE r_id ='$tenants_row[room_id]' ");
          $room_row = mysqli_fetch_array($room);
          $roomid = $room_row['r_id'];*/


      $tenants = mysqli_query($conn, "SELECT * FROM users JOIN reservation ON users.user_id = reservation.s_id WHERE Landloard_id ='$_SESSION[userid]' AND users.role = 'Student' ");

        if (mysqli_num_rows($tenants) == null) {
          echo '<tr><td><h6>You do not have any Tenants right now</h6></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>';
        }else{
          while ($tenants_row = mysqli_fetch_array($tenants)) {
          $room = mysqli_query($conn, "SELECT * FROM room WHERE r_id ='$tenants_row[room_id]' ");
          $room_row = mysqli_fetch_array($room);
          $roomid = $room_row['r_id'];
          $status = "";

          if ($tenants_row['status'] == "rejected") {
         $status .= ' <button value="'.$tenants_row['r_id'].'" class="btn btn-success" onclick="approve(this.value)"><i class="fa fa-check"></i> approve</button>
         <button value="'.$tenants_row['r_id'].'" onclick="reject(this.value)" class="btn btn-danger" disabled><i class="fa fa-ban"></i> Reject</button>';
          }elseif ($tenants_row['status'] == "approved") {
            $status .= ' <button value="'.$tenants_row['r_id'].'" class="btn btn-success" onclick="approve(this.value)" disabled><i class="fa fa-check"></i> approve</button>
         <button value="'.$tenants_row['r_id'].'" onclick="reject(this.value)" class="btn btn-danger"><i class="fa fa-ban"></i> Reject</button>';
          }else{
            $status .= ' <button value="'.$tenants_row['r_id'].'" class="btn btn-success" onclick="approve(this.value)" ><i class="fa fa-check"></i> approve</button>
         <button value="'.$tenants_row['r_id'].'" onclick="reject(this.value)" class="btn btn-danger"><i class="fa fa-ban"></i> Reject</button>';
          }

            echo '<tr>
        <td class="align-middle">
         '.$tenants_row['phone'].'
        </td>
        <td class="text-center">
          '.$tenants_row['room_id'].'
        </td>
        <td>'.$tenants_row["fname"].' '.$tenants_row["lname"].'</td>
        <td>'.getImage($tenants_row['user_id']).'</td>
        <td>'.$tenants_row['date'].'</td>
        <td>'.$tenants_row['status'].'</td>
        <td>
        <a href="tel:'.$tenants_row['phone'].'" class="btn btn-primary"><i class="fa fa-phone"></i> Call</a>
       '.$status.'
        </td>
      </tr>';
          }

          
        }

      ?>
    </tbody>
  </table>
</div>
</div>
</div>

<script >

  function approve(t_id) {
    let xhttp;

    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      window.alert(this.responseText);
    } 
    };

    xhttp.open("GET","./components/approve.php?tenant="+t_id, true);
    xhttp.send();
  }

  function reject(t_id) {
    let xhttp;

    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      window.alert(this.responseText);
    } 
    };

    xhttp.open("GET","./components/reject.php?tenant="+t_id, true);
    xhttp.send();
  }

  function editHouseDetails(houseId) {
  
    let xhttp;

    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('editDetailsDisplay').innerHTML = this.responseText;
    } 
    };

    xhttp.open("GET","./components/housedetails.php?houseId="+houseId, true);
    xhttp.send();
  }

  function searchTenants() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("input");
  filter = input.value.toUpperCase();
  table = document.getElementById("tableData");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>