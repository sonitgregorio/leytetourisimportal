 <?php 
    echo $this->session->flashdata('messages');
    if (!isset($fullname)) {
        $fullname = "";
        $emailaddress = "";
        $contact = "";
        $datereserve="";
        $check_out ="";
        $no_days = "";
    }
  ?>
    <form class="form-horizontal ins_reserv" method="post" action="/insert_reserv" onsubmit="return false">
      <input type="hidden" value="<?php echo $hid ?>" name="hid">
      <div class="form-group">
        <label class="col-sm-4 control-label">Full Name</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="fullname" placeholder="Full Name" required value="<?php echo $fullname ?>">
        </div>
      </div>
       <div class="form-group">
        <label class="col-sm-4 control-label">Email Address</label>
        <div class="col-sm-8">
          <input type="email" class="form-control" name="emailaddress" placeholder="Valid Email Address" required value="<?php echo $emailaddress ?>">
        </div>
      </div>
       <div class="form-group">
        <label class="col-sm-4 control-label">Contact</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="contact" placeholder="Contact" required value="<?php echo $contact ?>">
        </div>
      </div>
      <div class="form-group" id='groups'>
        <label class="col-sm-4 control-label">Check-in Date</label>
        <div class="col-sm-8">
          <input type="date" class="form-control checkin"  name="datereserve" value="<?php echo $datereserve == '' ? Date('Y-m-d') : $datereserve ?>" placeholder="Date of Reservation">
        </div>
      </div>
       <div class="form-group">
        <label class="col-sm-4 control-label">Check-out Date</label>
        <div class="col-sm-8">
          <input type="date" class="form-control checkin"  name="check_out" value="<?php echo $check_out == '' ? Date('Y-m-d') : $check_out ?>" placeholder="Date of Reservation">
        </div>
      </div>
         <div class="form-group">
        <label class="col-sm-4 control-label">No of Days</label>
        <div class="col-sm-8">
          <input type="text" class="form-control da"  name="no_days" value="" placeholder="Days" value="<?php echo $no_days ?>">
        </div>
      </div>
     <div class="modal-footer">
        <button type="submit" class="btn btn-success">Save</button>
        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
    </div>
    </form>
