<div class="col-md-8 col-md-offset-2" style="padding-left:0">
  <div class="panel logins p-body">
  	  <div class="panel-heading grad"><h3 style="color:#FFFF00;"><strong>Log Trail</strong></h3></div>
      <div class="panel-body">
      	<div class="col-md-12">
            <table id="example" class="table table-bordered table-striped">
              <thead class="grad">
                <tr style="color:#FFFF00;text-align:center">
                  <td>Name</td>
                  <td>Activity</td>
                  <td>Date</td>
                 </tr>
              </thead>
              <tbody>
                <?php 
                    foreach ($this->registration->get_logs() as $key => $value):
                 ?>
                  <tr>
                    <td><?php echo $value['firstname'] . " ". $value['middlename'] . " " . $value['lastname'] ?></td>
                    <td><?php echo $value['description'] ?></td>
                    <td><?php echo $value['date'] ?></td>
                  </tr>
                <?php endforeach ?>
              </tbody>
            </table>
      	</div>
      </div>
  </div>
</div>
