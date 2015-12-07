<?php 
      $x = $this->room->get_room_info($id);
 ?>

<div class="col-md-4">
  <div class="panel logins p-body">
      <div class="panel-heading grad"><h3 style="color:#FFFF00;"><strong>Room Information</strong></h3></div>
      <div class="panel-body">
        <div class="col-md-12">
          <?php 
            echo $this->session->flashdata('message');
            $uid = $this->session->userdata('uid');
                    
           ?>
          <form class = "form" method="post" action="/update_room" enctype="multipart/form-data">
             <img src="../assets/images/rooms/<?php echo $x['filename'] ?>" class="img thumbnail" style="width: 100%; height: 10%x;">        
            </div>
            <div class="col-md-12">
              <label>Room No.</label>
              <input type="text" class="form-control" name="roomno" disabled placeholder="Room" value="<?php echo $x['roomno'] ?>" required>
              <label>Description</label>
              <input type="text" name="descr" class='form-control' disabled placeholder="Description" value="<?php echo $x['description'] ?>" required>
              <label>Room Rate</label>
              <input type="number" name="rate" class='form-control' disabled placeholder="Rate" value="<?php echo $x['rate'] ?>" required>
            </div>
          </form>
        </div>
      </div>
  </div>
</div>
<div class="col-md-8" style="padding-left:0">
  <div class="panel logins p-body">

      <div class="panel-heading grad">
        <h3 style="color:#FFFF00;"><strong>List of Reservation request</strong></h3>	
        </div>
      <div class="panel-body">
        <div class="col-md-12">
        	<table class="table table-bordered table-stripped" id="example">
        		<thead class = "grad">
        			<tr>
        				<td style="color:#FFFF00;">Name</td>
        				<td style="color:#FFFF00;">Email Addres</td>
        				<td style="color:#FFFF00;">Contact</td>
                <td style="color:#FFFF00;">Check In</td>
                <td style="color:#FFFF00;">Check Out</td>
                <td style="color:#FFFF00;">Trans. Code</td>
                <td style="color:#FFFF00;">Action</td>
        			</tr>
        		</thead>
        		<tbody>
        			<?php foreach ($this->room->get_all_req($id) as $key => $value): ?>
	    				<tr>
		    				<td><?php echo $value['fullname'] ?></td>
		    				<td><?php echo $value['emailaddress'] ?></td>
		    				<td><?php echo $value['contact'] ?></td>
                <td><?php echo $value['datereserve'] ?></td>
                <td><?php echo $value['check_out'] ?></td>
                <td><?php echo $value['check_out'] ?></td>
		    				<td>
                  <a href="/confirm_reserv/<?php echo $value['id'] ?>" class="btn btn-info">Confirm
                  </a>&nbsp;<a href="/cancel_reserv/<?php echo $value['id'] ?>" class="btn btn-danger">Cancel</a>
                </td>
	    				</tr>	
        			<?php endforeach ?>
        		</tbody>
        	</table>
        </div>
      </div>
  </div>
</div>
