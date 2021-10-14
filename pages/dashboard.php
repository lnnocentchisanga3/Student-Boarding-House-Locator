<div class="col-md-12 mt-3">
<div class="container card py-3 shadow" >
  <div class="row">
    <div class="col-md-4" id="profilePicture">
     <img src="img/other/200.gif" width="100%" height="auto" id="loader">
    </div>
    <div class="col-md-8" id="EditDetails">
      <h6 class="col-md-12 text-center" id="editMsg"></h6>
      <h6 class="col-md-12 text-uppercase py-2 text-primary display-5" id="bhName"><?php echo $_SESSION['fname']." ".$_SESSION['lname']." ";?></h6>
    <!-- <div class="col-md-12 py-2" id="detailsLord">
     <i class="fa fa-money"></i> Price <span class="float-right">K <span id="amount">600</span>/Bed space</span>
    </div> -->
    <div class="col-md-12 py-2" id="detailsLord">
      <i class="fa fa-bed"></i> Available Rooms <span class="float-right">1/3</span>
    </div>
     <div class="col-md-12 py-2" id="detailsLord">
      <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i> <span class="float-right">3 Reviews</span>
    </div>
    <div class="col-md-12 py-2">
      <i class="fa fa-users"></i> Number of students<span class="float-right" >15</span>
    </div>
    <div class="col-md-12 py-2">
      <i class="fa fa-user-circle"></i> Landlord's name<span class="float-right">Mr Mwango Chisanga</span>
    </div>
    <div class="col-md-12 py-2">
      <i class="fa fa-phone"></i> Contact Number<span class="float-right">0966367116 / 0979023093</span>
    </div>
    <div class="col-md-12 py-2">
      <i class="fa fa-dollar"></i> Payment Method<span class="float-right">Mobile Money</span>
    </div>
    </div>
     <div class="container border-top mt-3">
      <div class="row">
      <div class="col-md-6">
      <button class="btn btn-success mx-1 my-2" onclick="EditDetailsLandlord()">Add a Room <i class="fa fa-plus-circle"></i></button>
      <button class="btn btn-primary mx-1 my-2" data-toggle="modal" data-target="#AddRoomModal">Add a Room <i class="fa fa-plus-circle"></i></button>
     
      </div>
      </div>
    </div>
  </div>
</div>
<script>
  "use strict";
  function EditDetailsLandlord() {
    document.getElementById('EditDetails').style.border = "1px solid black";
    document.getElementById('editMsg').innerHTML = "Click on each word to edit";
    var edit = document.getElementById('EditDetails').contentEditable = "true";
  }


</script>
<div class="py-4 text-center mt-5 bg-white shadow">
  <h4 class="text-muted text-uppercase text-underline">The available rooms</h4>
</div>

<?php
echo getMyBoardingHousesRooms($_SESSION['userid']);
?>
</div>

    <!-- Room Members Modal -->
  <div class="modal fade" id="searchModal">
    <div class="modal-dialog modal-dialog-centered mt-5">
      <div class="modal-content rounded-0 bg-light">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h6 class="modal-title"></h6>
          <button type="button" class="close text-danger" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body" id="finishPayDisplay">
          <div class="col-md-12 text-center">
            <h6 class="text-uppercase">The list of room members</h6>
          </div>
          <div>
            <h6 class="text-danger text-center">Please confirm if your Details are Correct</h6>
            <label>Phone Number</label>
            <input type="text" name="search" id="phone" placeholder="Enter your Phone number +2609... or +2607..." class="form-control rounded-0">
            <label>Names</label>
            <input type="text" name="username" value="Mwango Malauni" id="names" class="form-control">
            <label>Price</label>
            <input type="text" name="username" value="" id="priceDetails" class="form-control">
            <label>Boarding house name</label>
            <input type="text" name="bh" value="" id="bh" class="form-control">
            <label>Room Number</label>
            <select class="form-control">
              <option>Select a Room Number</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>
            </select>
            <button class="btn btn-warning my-2" onclick="getDisplay()">Pay And Reserve</button>
          </div>
          <div class="col-md-12 py-3" id="search_load">
           Data entered here won't be shared with anyone<span class="text-danger">*</span> 
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger rounded-0" data-dismiss="modal">Cancel</button>
        </div>
        
      </div>
    </div>
  </div>

  <!-- End of room members -->


  <!-- Edit Room modal Modal -->
  <div class="modal fade" id="editMemberModal">
    <div class="modal-dialog modal-dialog-centered mt-5">
      <div class="modal-content rounded-0 bg-light">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h6 class="modal-title"></h6>
          <button type="button" class="close text-danger" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body" id="finishPayDisplay">
          <div class="col-md-12 text-center">
            <h6 class="text-uppercase">Edit the room details</h6>
          </div>
          <div>
            <h6 class="text-danger text-center">Please confirm if your Details are Correct</h6>
            <label>Phone Number</label>
            <input type="text" name="search" id="phone" placeholder="Enter your Phone number +2609... or +2607..." class="form-control rounded-0">
            <label>Names</label>
            <input type="text" name="username" value="Mwango Malauni" id="names" class="form-control">
            <label>Price</label>
            <input type="text" name="username" value="" id="priceDetails" class="form-control">
            <label>Boarding house name</label>
            <input type="text" name="bh" value="" id="bh" class="form-control">
            <label>Room Number</label>
            <select class="form-control">
              <option>Select a Room Number</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>
            </select>
            <button class="btn btn-warning my-2" onclick="getDisplay()">Pay And Reserve</button>
          </div>
          <div class="col-md-12 py-3" id="search_load">
           Data entered here won't be shared with anyone<span class="text-danger">*</span> 
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger rounded-0" data-dismiss="modal">Cancel</button>
        </div>
        
      </div>
    </div>
  </div>
  <!-- End of edit room -->


  <!-- Add Room modal Modal -->
  <div class="modal fade" id="AddRoomModal">
    <div class="modal-dialog modal-dialog-centered mt-5">
      <div class="modal-content rounded-0 bg-light">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h6 class="modal-title"></h6>
          <button type="button" class="close text-danger" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body" id="finishAddDisplay">
          <div class="col-md-12 text-center">
            <h6 class="text-uppercase">Adding a room</h6>
          </div>
          <div>
            <h6 class="text-danger text-center">Please confirm if the Details are Correct</h6>
            <form action="./components/add_room.php" name="addRoom" id="AddRoomForm" enctype="multipart/form-data" method="POST">
            <label>Boarding house Number</label>
           <select class="form-control" name="bhnum">
             <option>Select the boarding house</option>
             <?php
             $uid = $_SESSION["userid"];
             $getBoardingHouse = mysqli_query($conn, "SELECT * FROM users INNER JOIN boardinghouse ON users.user_id=boardinghouse.Landloard_id WHERE Landloard_id = '$uid'");

             if (!$getBoardingHouse) {
               echo "<option>Error"." ".mysqli_error($conn)."</option>";
               
            }else{
              while ($rowhouse = mysqli_fetch_array($getBoardingHouse)) {
                echo "<option>".$rowhouse['bh_id']."</option>";
              }
             }
              ?>
           </select>

            <label>Room Number</label>
            <select name="roomnum" class="form-control">
              <option>Select a Room Number</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>
            </select>

            <label>Room amount</label>
           <input type="number" name="amount" class="form-control" placeholder="Enter the amount">

           <label>Room Capacity</label>
            <select class="form-control" name="capacity">
              <option>Select the Room capacity</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
            </select>

            <label>Room picture</label>
            <input type="file" name="rphoto" class="form-control my-2">
            <button class="btn btn-warning my-2" >Add a Room</button>
          </form>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger rounded-0" data-dismiss="modal">Cancel</button>
        </div>
        
      </div>
    </div>
  </div>
  <!-- End of Add room -->

  <div id="paraTest" class="text-center" style="display: none;">
    <img src="img/other/paydone.gif" class="col-md-12" width="">
    <h5 class="col-md-12 text-center py-2 text-uppercase">Payment is Done<br>Just wait for the Confirmation</h5>
  </div>

  <!-- Add Room modal Modal -->
  <div class="modal fade" id="AddRoomModal">
    <div class="modal-dialog modal-dialog-centered mt-5">
      <div class="modal-content rounded-0 bg-light">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h6 class="modal-title"></h6>
          <button type="button" class="close text-danger" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body" id="finishAddDisplay">
          
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger rounded-0" data-dismiss="modal">Cancel</button>
        </div>
        
      </div>
    </div>
  </div>
  <!-- End of Add room -->

  <script>
    $('#loader').show();
    $('#profilePicture').load('./components/loadPicture.php');
  </script>
  <script>
      function getAddDisplay(data) {
        document.getElementById('finishAddDisplay').innerHTML = data;
      }

      $(document).ready(function (e) {
    $('#AddRoomForm').on('submit',(function(e) {
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            type:'POST',
            url: $(this).attr('action'),
            data:formData,
            cache:false,
            contentType: false,
            processData: false,
            success:function(data){
                getAddDisplay(data);
            },
            error: function(data){
                window.alert("error");
               window.alert(data);
            }
        });

    }));

    /*$("#ImageBrowse").on("change", function() {
        $("#imageUploadForm").submit();
    });*/
});
  </script>