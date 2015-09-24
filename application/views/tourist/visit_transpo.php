<?php 
	$x = $this->registration->get_trans_route($id);		
 ?>
 <div class="col-md-4">
  <div class="panel logins p-body">
  	  <div class="panel-heading grad"><h3 style="color:#FFFF00;"><strong>Add Routes</strong></h3></div>
      <div class="panel-body">
           	<div class="col-md-12">
      			<img src="<?php echo "../assets/images/transpo/".$x['filename'] ?>" class="thumbnail" style="width:100%">
    		 <form class = "form" method="post" action="/add_route" enctype="multipart/form-data">
    		 			<label>Transportation</label>
    			 		<input type="text" name="from" class='form-control' disabled placeholder="Room" value ="<?php echo $x['transpo'] ?>"  required>
    			 		<label>To</label>
    			 		<input type="text" name="to" class='form-control' disabled placeholder="Description"value ="<?php echo $x['address'] ?>"  required>
    			 		<label>Information</label>
    			 		<input type="text" step="any"  name="rate" disabled class='form-control' placeholder="Rate" value ="<?php echo $x['information'] ?>" required>
    	 	    </form>
      	</div>
      </div>
  </div>
</div>
<div class="col-md-8" style="padding-left:0">
  <div class="panel logins p-body">
  	  <div class="panel-heading grad"><h3 style="color:#FFFF00;"><strong>Routes</strong></h3></div>
      <div class="panel-body">
      	<div class="col-md-12">
            <table id="example" class="table table-bordered table-striped">
              <thead class="grad">
                <tr style="color:#FFFF00;text-align:center">
                  <td>From</td>
                  <td>To</td>
                  <td>Rate</td>
                </tr>
              </thead>
              <tbody>
                <?php 
                    foreach ($this->registration->get_routed($id) as $key => $value):
                    extract($value);
                 ?>
                  <tr>
                    <td><?php echo $frm ?></td>
                    <td><?php echo $tos ?></td>
                    <td><?php echo $rate ?></td>
                  </tr>
                <?php endforeach ?>
              </tbody>
            </table>
      	</div>
      </div>
  </div>
</div>
