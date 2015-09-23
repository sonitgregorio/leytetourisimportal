<div class="col-md-4">
  <div class="panel logins p-body">
  	  <div class="panel-heading grad"><h3 style="color:#FFFF00;"><strong>Add Routes</strong></h3></div>
      <div class="panel-body">
            <?php 
               echo $this->session->flashdata('message');
               if (empty($tos))
                {
                  $ids = "";
                  $frm = "";
                  $tos = "";
                  $rate = "";
               }
            ?>
      	<div class="col-md-12">
      		
    		 	<form class = "form" method="post" action="/add_route" enctype="multipart/form-data">
              <input type="hidden" value="<?php echo $ids ?>" name="ids">
    		 			<label>From</label>
    			 		<input type="text" name="from" class='form-control' placeholder="Room" value ="<?php echo $frm ?>"  required>
    			 		<label>To</label>
    			 		<input type="text" name="to" class='form-control' placeholder="Description"value ="<?php echo $tos ?>"  required>
    			 		<label>Rate</label>
    			 		<input type="number" step="any"  name="rate" class='form-control' placeholder="Rate" value ="<?php echo $rate ?>" required>
    			 		<button type="submit" class="btn btn-success pull-right" style="margin-top:5px">Save</button>
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
                  <td style="width:25%">Action</td>
                </tr>
              </thead>
              <tbody>
                <?php 
                    foreach ($this->transpo->get_route() as $key => $value):
                    extract($value);
                 ?>
                  <tr>
                    <td><?php echo $frm ?></td>
                    <td><?php echo $tos ?></td>
                    <td><?php echo $rate ?></td>
                    <td>
                       <a href="/edit_route/<?php echo $id ?>" class="btn btn-info">Edit&nbsp;<span class="glyphicon glyphicon-pencil"></span></a>
                       <a href="/del_route/<?php echo $id ?>" class="btn btn-danger" onclick="return confirm('Are You Sure?')">Delete&nbsp;<span class="glyphicon glyphicon-trash"></span></a>
                     </td>
                  </tr>
                <?php endforeach ?>
              </tbody>
            </table>
      	</div>
      </div>
  </div>
</div>
