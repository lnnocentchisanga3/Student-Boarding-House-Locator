 <!-- Room Members Modal -->
  <div class="modal fade" id="roomMembersModal">
    <div class="modal-dialog modal-dialog-centered mt-5">
      <div class="modal-content bg-light">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h6 class="modal-title"></h6>
          <button type="button" class="close text-danger" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
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


<!-- The Reservation Modal -->
  <div class="modal fade" id="searchModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content rounded-0 bg-light">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h6 class="modal-title text-uppercase">Notice</h6>
          <button type="button" class="close text-danger" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
          <!-- <div class="col-md-12 text-center">
            <h6 class="text-uppercase">The list of room members</h6>
          </div> -->
          <div id="finishPayDisplay">
          </div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger rounded-0" data-dismiss="modal">Cancel</button>
        </div>
        
      </div>
    </div>
  </div>

  <div id="paraTest" class="text-center" style="display: none;">
    <img src="img/other/paydone.gif" class="col-md-12" width="">
    <h5 class="col-md-12 text-center py-2 text-uppercase">Payment is Done<br>Just wait for the Confirmation</h5>
  </div>