<div class="container-fluid mb-3">
  <div class="row">
   
   <div class="container mb-3 mt-5" style="">
  <div class="row" id="allHouses">
 </div>
</div>

<script>
    $('#allHouses').load("./components/all_houses.php");
</script>

<!-- The Reservation Modal -->
  <div class="modal fade" id="searchModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content  bg-light">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h6 class="modal-title"></h6>
          <button type="button" class="close text-danger" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body" id="finishPayDisplay">
          <div class="col-md-12 text-center">
            <h6 class="text-uppercase">Pay to Make a Reservation</h6>
          </div>
          <div>
            <h6 class="text-danger text-center">Please confirm if your Details are Correct</h6>
            <label>Phone Number</label>
            <input type="text" name="search" id="phone" placeholder="Enter your Phone number +2609... or +2607..." class="form-control ">
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
          <button type="button" class="btn btn-danger " data-dismiss="modal">Cancel</button>
        </div>
        
      </div>
    </div>
  </div>

  </div>
<?php?>
</div>