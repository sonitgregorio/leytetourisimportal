<div class="col-md-12" >
  <div class="panel logins p-body">
    <div class="panel-heading grad"><h3 style="color:#FFFF00;"><strong>Tacloban City, Tourist Spots</strong></h3></div>
    <div class="panel-body">
      <?php if ($this->session->userdata('username') == "admin"): ?>
          <form class="form" action="index.html" method="post">
            <div class="col-md-2">
                  <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                    <div>
                      <span class="btn btn-info btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
                      <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>

                    </div>
              </div>
            </div>

          <div class="col-md-10">
                    <label>Tourist Spot</label>
                        <input type="text" class="form-control" name="name" value="" style="width:40%">
                    <label>Contact</label>
                        <input type="text" class="form-control" name="name" value=""  style="width:40%">
                    <label>Address</label>
                        <input type="text" class="form-control" name="name" value="" style="width:40%">
                        <button type="submit" class="btn btn-success" style="margin-top:10px"  name="button">Save</button>
                        <br /><br />
          </div>

        </form>
      <?php endif; ?>


              <?php if ($destination == "palo"): ?>
                <?php  $x = "macarthur"; ?>
                <div class="col-md-4" style="text-align:center;margin-bottom:20px">
                    <a href="/tourist/macarthurpark"><img src="../assets/images/background/leyte.jpg" class="thumbnail touris-image" /></a>
                    <a class="btn btn-info" href="/tourist/<?php echo $x ?>" style="margin-top:-10px;">MacArthur Park</a>
                </div>
                <div class="col-md-4" style="text-align:center;margin-bottom:20px">
                    <a href="/tourist/palocathedral"><img src="../assets/images/background/palo.jpg" class="thumbnail touris-image" /></a>
                    <a class="btn btn-info" href="/tourist/palocathedral" style="margin-top:-10px;">Palo Cathedral</a>
                </div>
              <?php endif; ?>


               <br />
      </div>
    </div>
  </div>
