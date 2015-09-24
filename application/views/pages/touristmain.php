
<div class="col-md-9">
  <div class="panel logins p-body">
      <div class="panel-heading grad"><h3 style="color:#FFFF00;"><strong>Leyte Video</strong></h3></div>
      <div class="panel-body">
            <div class="col-md-12">
                  <video src="../assets/vid/leyte.mkv" controls style="width:100%;border-radius:10px"></video>
            </div>

      </div>
  </div>
</div>
 <div class="col-md-3">
  <div class="panel logins p-body">
      <div class="panel-heading grad"><h3 style="color:#FFFF00;"><strong>Announcements</strong></h3></div>
      <div class="panel-body">
            <div class="col-md-12">
                          <?php foreach ($this->registration->get_annou() as $key => $value): ?>
                            <hr style="background: #8C4600;height:2px;">
                              <label for=""><strong>Name: <?php echo $value['firstname'] . " " . $value['lastname']?></strong></label>
                              <label><small>Date: <?php echo $value['dte'] . " | " . $value['tme'] ; ?></small></label>
                              <br /><br />
                              <p  style="width:95%;text-align:justify;margin-left:10px;text-indent:30px;">
                                  <?php echo $value['announcement'] ?>
                              </p>
                          <?php endforeach; ?>

            </div>
            
      </div>
  </div>
</div>
