<div class="col-md-12 mt-3">
<div class="container card py-3 shadow" >
  <div class="card-header">
    <div class="row">
      <div class="col-md-9">
        <div class="row">
          <h6 class="col-md-4"><i class="fa fa-home"></i> My Boarding Houses</h6>
          <div class="col-md-4">
            <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#addHouseModal"><i class="fa fa-plus-circle"></i> Add</a>
          </div>
          <div class="col-md-4">
            <a href="#"></a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <input type="text" name="searchTenant" class="form-control col-md-12" placeholder="Search" style="border-top-left-radius: 1.7rem; border-top-right-radius: 1.7rem;border-bottom-right-radius: 1.7rem; border-bottom-left-radius: 1.7rem;">
      </div>
    </div>
  </div>
  <div class="table-responsive">
  <table class="table table-striped" id="table-1">
    <thead>
      <tr>
        <th>BH Number</th>
        <th>Bh Name</th>
        <th>picture</th>
        <th>location</th>
        <th>Street</th>
        <th>Action</th>
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


<!-- Cahnge Photo Modal -->
  <div class="modal fade" id="addHouseModal">
    <div class="modal-dialog modal-dialog-centered mt-5">
      <div class="modal-content rounded-0 bg-light">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h6 class="modal-title"> <h6 class="text-uppercase"><i class="fa fa-plus-circle"></i> add a boarding house</h6></h6>
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

  <!-- End of Change Photo -->