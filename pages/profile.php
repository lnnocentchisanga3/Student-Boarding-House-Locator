<div class="col-md-12 mt-3">
	<div class="container py-3 shadow card">
		<div class="row">
    <div class="col-md-4" id="profilePicture">
     <img src="img/other/200.gif" width="100%" height="auto">
    </div>
   <div class="col-md-8" id="EditDetails">
      <h6 class="col-md-12 text-center" id="editMsg"></h6>
      <h6 class="col-md-12 text-uppercase py-2 text-primary display-5" id="bhName"><?php echo $_SESSION['fname']." ".$_SESSION['lname']." ";?></h6>
    <!-- <div class="col-md-12 py-2" id="detailsLord">
     <i class="fa fa-money"></i> Price <span class="float-right">K <span id="amount">600</span>/Bed space</span>
    </div> -->
    <!-- <div class="col-md-12 py-2" id="detailsLord">
      <i class="fa fa-bed"></i> Available Rooms <span class="float-right">1/3</span>
    </div> -->
    <div class="col-md-12 py-2">
      <?php
      $t_num = mysqli_query($conn ,"SELECT * FROM reservation WHERE Landloard_id = '$_SESSION[userid]' ");
     if (mysqli_num_rows($t_num) == 0) {
        echo '<i class="fa fa-users"></i> Number of Tenants<span class="float-right" > No Tenants</span>';
     }else{
       echo '<i class="fa fa-users"></i> Number of Tenants<span class="float-right" >'.mysqli_num_rows($t_num).'</span>';
     }
      ?>
      
    </div>
    <div class="col-md-12 py-2">
      <i class="fa fa-user-circle"></i> Landlord's name<span class="float-right"><?php echo $_SESSION['fname']." ".$_SESSION['lname']." ";?></span>
    </div>
    <div class="col-md-12 py-2">
      <i class="fa fa-phone"></i> Contact Number<span class="float-right"><a href="tel:<?php echo $_SESSION['phone'];?>"><?php echo $_SESSION['phone'];?></a></span>
    </div>
    <div class="col-md-12 py-2">
      <i class="fa fa-envelope"></i> Email <span class="float-right"><a href="mailto:<?php echo $_SESSION['email'];?>"><?php echo $_SESSION['email'];?></a></span>
    </div>
    <div class="col-md-12 py-2">
      <i class="fa fa-home"></i> My Boarding houses
      <div class="row">
        <?php
        $bh_all = mysqli_query($conn, "SELECT * FROM `boardinghouse` WHERE Landloard_id = '$_SESSION[userid]'");
        if (mysqli_num_rows($bh_all) == 0) {
          echo "You are not having and Boarding House";
        }else{
          while ($row_b = mysqli_fetch_array($bh_all)) {
            echo '<div class="col-md-12 my-2"><i class="fa fa-location-arrow"></i> '.$row_b['name'].'</div>';
          }
        }
        ?>
      </div>
    </div>
    </div>
    <!-- <?php echo getAmount(); ?> -->
     <div class="container border-top mt-3">
      <div class="row">
      <div class="col-md-6">
      <button class="btn btn-success mx-1 my-2" data-toggle="modal" data-target="#changePhotoModal">Change Photo <i class="fa fa-image"></i></button>
      <button class="btn btn-primary mx-1 my-2" data-toggle="modal" data-target="#AddRoomModal">Edit Details <i class="fa fa-edit"></i></button>
      </div>
      </div>
    </div>
  </div>
	</div>
</div>


  <!-- Cahnge Photo Modal -->
  <div class="modal fade" id="changePhotoModal">
    <div class="modal-dialog modal-dialog-centered mt-5">
      <div class="modal-content rounded-0 bg-light">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h6 class="modal-title"> <h6 class="text-uppercase"><i class="fa fa-photo"></i> Upload the Photo</h6></h6>
          <button type="button" class="close text-danger" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body" id="finishUploadDisplay">
          <form action="./components/uploadphoto.php" name="photo" id="imageUploadForm" enctype="multipart/form-data" method="POST">
            <label>Add a photo</label>
           <input type="file" name="ppicture" accept="image/*" class="form-control" id="ImageBrowse">
            <input name="upload"  type="submit" class="btn btn-warning my-2" value="Upload photo">
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

  <script type="text/javascript">
  	function getUploadPhotoDisplay() {
  		/*document.getElementById('finishUploadDisplay').innerHTML = "<i class='col-md-12 text-center'>Profile picture uploaded successfull !</i>";*/


  		

  		ajax.upload.addEventListener("progress", function(event) {
  			var percent = (event.loaded/event.total)*100;
  			document.getElementById('finishUploadDisplay').innerHTML = "<i class='col-md-12 text-center'>"+percent+" complet of upload !</i>";
  		});

  		
  	}

  	$(document).ready(function (e) {
    $('#imageUploadForm').on('submit',(function(e) {
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
                document.getElementById('finishUploadDisplay').innerHTML = (data);
                var percent = (event.loaded/event.total)*100;
  				document.getElementById('finishUploadDisplay').innerHTML = '<i>File upload complete!</i> <br><div class="progress"><div class="progress-bar" style="width: '+percent+'%">'+percent+'%</div></div>';
            },
            error: function(data){
                document.getElementById('finishUploadDisplay').innerHTML = ("error");
               document.getElementById('finishUploadDisplay').innerHTML =(data);
            }
        });

    }));

    $("#ImageBrowse").on("change", function() {
        $("#imageUploadForm").submit();
    });
});

  	/*$(document).ready(function() {
  		window.alert("hello world");
  	});*/

  	function closeReload() {
  		window.reload();
  	}

  	setInterval(function() {
		$('#profilePicture').load('./components/loadPicture.php');
	},1000);
  </script>