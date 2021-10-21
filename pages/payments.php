<div class="col-md-12 mt-3">
<div class="container card py-3 shadow" >
  <div class="card-header">
    <div class="row">
      <div class="col-md-9">
        <div class="row">
          <h6 class="col-md-4"><i class="fa fa-money"></i> Tenants payments</h6>
          <div class="col-md-4">
            <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#addHousePaymentModal"><i class="fa fa-plus-circle"></i> Add a payment</a>
          </div>
          <div class="col-md-4">
            <a href="#"></a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <input type="text" name="searchTenant" class="form-control col-md-12" placeholder="Search by Tenant's name" style="border-top-left-radius: 1.7rem; border-top-right-radius: 1.7rem;border-bottom-right-radius: 1.7rem; border-bottom-left-radius: 1.7rem;" id="input" onkeyup="myFilters()">
      </div>
    </div>
  </div>
  <div class="table-responsive">
  <table class="table table-striped" id="myTable">
    <thead>
      <tr>
        <th>Tenant</th>
        <th>Bh Name</th>
        <th>picture</th>
        <th>Room</th>
        <th>Paid Amount</th>
        <!-- <th>Action</th> -->
      </tr>
    </thead>
    <tbody>
      <?php
      echo getMyBoardingHouses($_SESSION['userid']);
      ?>
    </tbody>
  </table>
  </div>
</div>
</div>


<!-- Adding a house Modal -->
  <div class="modal fade" id="addHousePaymentModal">
    <div class="modal-dialog modal-dialog-centered mt-5">
      <div class="modal-content rounded-0 bg-light">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h6 class="modal-title"> <h6 class="text-uppercase"><i class="fa fa-money mx-2"></i><i class="fa fa-plus"></i> Add a payment</h6></h6>
          <button type="button" class="close text-danger" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body" id="finishUploadDisplay">
          <form action="./components/addbhouse.php" enctype="multipart/form-data" method="POST">
            <label>Name</label>
           <input type="text" name="bhname" class="form-control" required="true">
           <label>Location</label>
           <input type="text" name="bhlocation" class="form-control" required="true">
           <label>House Number</label>
           <input type="text" name="bhnumber" class="form-control" required="true">
           <label>Street</label>
           <input type="text" name="street" class="form-control" required="true">
           <label>Add a photo</label>
           <input type="file" name="bhpicture" accept="image/*" class="form-control" required="true">
            <input name="addbh"  type="submit" class="btn btn-warning my-2" value="Add a house">
          </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger rounded-0" data-dismiss="modal" onclick="closeReload()">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  <!-- End of adding a BH -->

  <!-- Adding a house Modal -->
  <div class="modal fade" id="houseEditDetailsModal">
    <div class="modal-dialog modal-dialog-centered mt-5">
      <div class="modal-content rounded-0 bg-light">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h6 class="modal-title"> <h6 class="text-uppercase"><i class="fa fa-edit"></i> Edit House Deatils</h6></h6>
          <button type="button" class="close text-danger" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body" id="editDetailsDisplay">
         
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger rounded-0" data-dismiss="modal" onclick="closeReload()">Close</button>
        </div>
        
      </div>
    </div>
  </div>

  <!-- End of adding a BH -->

  <script>
function myFilters() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("input");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
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


/*function editHouseDetails(houseId){
 var ajax = new XMLHttpRequest();

ajax.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    document.getElementById('editDetailsDisplay').innerHTML = this.responseText;
  } 
  };

 ajax.open("GET","./components/housedetails.php?houseId="+roomId, true);
 ajax.send();

}*/

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

function deleteHouseDetails(houseId){
  window.alert(houseId);
}
</script>