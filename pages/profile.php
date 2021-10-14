<div class="col-md-12 mt-3">
	<div class="container py-3 shadow card">
		<div class="row">
    <div class="col-md-4" id="profilePicture">
     <img src="img/other/200.gif" width="100%" height="auto">
    </div>
    <div class="col-md-8" id="EditDetails">
      <h6 class="col-md-12 text-center" id="editMsg"></h6>
      <h6 class="col-md-12 text-uppercase py-2 text-primary display-5" id="bhName"><?php echo $_SESSION['fname']." ".$_SESSION['lname']." ";?></h6>
    <div class="col-md-12 py-2" id="detailsLord">
     <i class="fa fa-money"></i> Price <span class="float-right">K <span id="amount"><?php echo getAmount(); ?></span>/Bed space</span>
    </div>
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
	},1500);
  </script>