 <?php 
    echo $this->session->flashdata('messages');
  ?>
    <form class="form-horizontal ins_reserv" method="post" action="/insert_reserv" onsubmit="return false">
      <input type="hidden" value="<?php echo $hid ?>" name="hid">
      <div class="form-group">
        <label class="col-sm-4 control-label">Full Name</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="fullname" placeholder="Full Name" required>
        </div>
      </div>
       <div class="form-group">
        <label class="col-sm-4 control-label">Email Address</label>
        <div class="col-sm-8">
          <input type="email" class="form-control" name="emailaddress" placeholder="Valid Email Address" required>
        </div>
      </div>
       <div class="form-group">
        <label class="col-sm-4 control-label">Contact</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="contact" placeholder="Contact" required>
        </div>
      </div>
      <div class="form-group">
        <label class="col-sm-4 control-label">Date of Reservation</label>
        <div class="col-sm-8">
          <input type="date" class="form-control"  name="datereserve" value="<?php echo Date('Y-m-d') ?>" placeholder="Date of Reservation">
        </div>
      </div>
     <div class="modal-footer">
        <button type="submit" class="btn btn-success">Save</button>
        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
    </div>
    </form>
