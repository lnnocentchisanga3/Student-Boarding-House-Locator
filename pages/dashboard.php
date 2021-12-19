<div class="col-md-12 mt-3">
<div class="container card py-3 shadow" >
  <div class="row">
    <div class="container">
      <div class="row">
      <h5 class="mx-4 text-uppercase col-md-6" style="font-weight: bold;">You are logedin as a landlord</h5>
      <div class="nav-item">
    <a class="nav-link text-muted" href="./landlord_acc.php?pages=profiles"><?php echo $_SESSION['fname']." ".$_SESSION['lname']." ";?><?php echo getMainImage();?></a></div>
    </div>
    </div>
     <div class="container border-top mt-3">
      <div class="row">
      <div class="col-md-6">
      <button class="btn btn-danger mx-1 my-2" onclick="EditDetailsLandlord()">Account Settings <i class="fa fa-cogs"></i></button>
      <button class="btn btn-primary mx-1 my-2" data-toggle="modal" data-target="#AddRoomModal">Add a Room <i class="fa fa-plus-circle"></i></button>
     
      </div>
      </div>
    </div>
  </div>
</div>
<script>
  "use strict";
  function EditDetailsLandlord() {
    window.location.assign("http://localhost/Student-Boarding-House-Locator/landlord_acc.php?pages=profiles");
  }


</script>
<div class="py-4 mt-5 bg-white shadow">
  <h4 class="text-uppercase mx-4">All the rooms</h4>
</div>

<?php
echo getMyBoardingHousesRooms($_SESSION['userid']);
?>
</div>

    <!-- Room Members Modal -->
  <div class="modal fade" id="searchModal">
    <div class="modal-dialog modal-dialog-centered mt-5">
      <div class="modal-content bg-light">
      
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
          <div id="roomMembers">
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
        
      </div>
    </div>
  </div>

  <!-- End of room members -->

  <!--Delete Room Modal -->
  <div class="modal fade" id="deleteModal">
    <div class="modal-dialog modal-dialog-centered mt-5">
      <div class="modal-content bg-light">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h6 class="modal-title text-danger"><i class="fa fa-warning"></i> Warning <i class="fa fa-exclamation"></i></h6>
          <button type="button" class="close text-danger" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body" id="deleteRoomMsg">
          <div>
           <h6 class="mx-2"><i class="fa fa-warning mr-2"></i> Are you sure you want to delete this Room?</h6>
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <div class="container">
            <div class="row">
              <button class="btn btn-primary mx-2" id="deleteRoomBtn" onclick="deleteRoom(this.value)">Yes</button>
              <button type="button" class="btn btn-danger " data-dismiss="modal">Cancel</button>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>

  <!-- End of Delete room -->


  <!-- Edit Room modal Modal -->
  <div class="modal fade" id="editMemberModal">
    <div class="modal-dialog modal-dialog-centered mt-5">
      <div class="modal-content bg-light">
      
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
          <div id="editRoomDisplay">
            
          </div>
          <div class="col-md-12 py-3" id="search_load">
           Data entered here won't be shared with anyone<span class="text-danger">*</span> 
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
        
      </div>
    </div>
  </div>
  <!-- End of edit room -->


  <!-- Add Room modal Modal -->
  <div class="modal fade" id="AddRoomModal">
    <div class="modal-dialog modal-dialog-centered mt-5">
      <div class="modal-content bg-light">
      
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
            <label>Boarding house ID</label>
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
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
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
      <div class="modal-content bg-light">
      
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
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
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


  function getRoomMembers(roomId) {
  
    let xhttp;

    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('roomMembers').innerHTML = this.responseText;
    } 
    };

    xhttp.open("GET","./components/roomMembers.php?roomId="+roomId, true);
    xhttp.send();
  }

  function editRoomDisplay(roomId){
    let xhttp;

    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById('editRoomDisplay').innerHTML = this.responseText;
    } 
    };

    xhttp.open("GET","./components/edit_room_display.php?roomId="+roomId, true);
    xhttp.send();
  }
  </script>