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
                        <?php echo $this->session->flashdata('message') ?>
                    
                      <form class="form" action="/post_announce" method="post" enctype="multipart/form-data">
                          <textarea name="announce" rows="5" cols="100" style="resize:none;font-size:20px;" class="form-control col-md-8" placeholder="Enter Your Announcement Here...."></textarea>
                          <div class="fileinput fileinput-new" data-provides="fileinput" style="width:100%">
                            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width:100%; height: 200px;">
                            </div>
                            <div>
                              <span class="btn btn-info btn-file buts"><span class="fileinput-new">Select image</span><input type="file" name="pics"></span>
                              <a href="#" class="btn btn-default fileinput-exists bets" data-dismiss="fileinput">Change/Remove</a>
                            </div>
                        </div>
                         <div class="pull-right">
                          <button class="btn btn-success" type="submit" style="margin-top:10px">Post</button>
                          
                         </div>
                      </form>
                          <br /><br />
                          <?php foreach ($this->registration->get_annou('1') as $key => $value): ?>
                            <hr style="background: #8C4600;height:2px;clear:left;">
                              <label for=""><strong>Name: <?php echo $value['firstname'] . " " . $value['lastname']?></strong></label>
                              <label for="" class="pull-right"> Date: <?php echo $value['dte'] . " | " . $value['tme'] ; ?></label>
                              <br /><br />
                              <p  style="width:95%;text-align:justify;margin-left:10px;text-indent:30px;">
                                  <?php echo $value['announcement'] ?>
                                  <?php if ($value['filename'] != ""): ?>
                                     
                                  <br/>  <br/> 
                                      <a  href="#" class="annou" data-toggle="modal" data-param="<?php echo $value['filename'] ?>" data-param1='<?php echo "" ?>'><img class="col-md-4 col-sm-offest-4 thumbnail"  style="clear:left"src="<?php echo '../assets/images/profpic/'.$value['filename'] ?>"></a>
                                  <?php endif ?>
                              </p>
                          <?php endforeach; ?>

                    </div>

              </div>
            </div>
        </div>

      </div>
  </div>
</div>
