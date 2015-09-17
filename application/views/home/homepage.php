<div class="col-md-12" >
  <div class="panel logins p-body">
      <div class="panel-body">
        <div class="col-md-3">
          <div class="col-md-12" >
            <?php $in = $this->registration->get_info($this->session->userdata('uid')) ?>
            <form class="" action="/upload_profile" method="post" enctype="multipart/form-data">
              <input type="hidden" name="uid" value="<?php echo $this->session->userdata('uid') ?>">
              <div class="fileinput fileinput-new" data-provides="fileinput" style="width:100%">
                  <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width:100%; height: 200px;">
                      <?php
                          $x = $this->registration->getprof($this->session->userdata('uid'))
                       ?>
                       <img src="<?php echo "../assets/images/profpic/".$x ?>" alt="" />
                  </div>
                  <div>
                    <span class="btn btn-info btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="picture"></span>
                    <button type="submit" class="btn btn-success fileinput-exists">Save</button>
                  </div>
              </div>
            </form>

              <!-- <img src="../assets/images/background/nav.jpg" class="thumbnail touris-image" style="width:200px;height:200px "/> -->
              <label for=""><h5>Name:</h5></label><h4> <?php echo $in['firstname'] ." ". $in['middlename'] ." ". $in['lastname']; ?></h4>
              <label for=""><h5>Contact No:</h5><h4><?php echo $in['contact'] ?></h4></label><br />
              <label for=""><h5>Email Address:</h5><h4><?php echo $in['email'] ?></h4></label><br />
          </div>
        </div>
        <div class="col-md-9">
          <div class="panel logins p-body" style="margin-top:0;box-shadow:none;background-color: #FFFFE0">
            <div class="panel-heading grad" style="box-shadow:none"><h4 style="color:#FFFF00;"><span class="glyphicon glyphicon-edit"></span>&nbsp;Announcement</h4></div>
              <div class="panel-body">
                    <div class="col-md-12">
                      <form class="form" action="/post_announce" method="post">
                          <textarea name="announce" rows="5" cols="100" style="width:100%;resize:none;font-size:20px;" class="form-control" placeholder="Enter Your Announcement Here...."></textarea>
                          <button class="btn btn-success pull-right" type="submit" style="margin-top:10px">Post</button>
                      </form>

                          <br /><br />
                          <?php foreach ($this->registration->get_annou() as $key => $value): ?>
                            <hr style="background: #8C4600;height:2px;">
                              <label for=""><strong>Name: <?php echo $value['firstname'] . " " . $value['lastname']?></strong></label>
                              <label for="" class="pull-right"> Date: <?php echo $value['dte'] . " | " . $value['tme'] ; ?></label>
                              <br /><br />
                              <p  style="width:95%;text-align:justify;margin-left:10px;text-indent:30px;">
                                  <?php echo $value['announcement'] ?>
                              </p>
                          <?php endforeach; ?>

                    </div>

              </div>
            </div>
        </div>

      </div>
  </div>
</div>
