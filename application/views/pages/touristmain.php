
<div class="col-md-9">
  <div class="panel logins p-body">
      <div class="panel-heading grad"><h3 style="color:#FFFF00;"><strong>LTPS</strong></h3></div>
      <div class="panel-body">
            <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                  <li data-target="#myCarousel" data-slide-to="1"></li>
                                  <li data-target="#myCarousel" data-slide-to="2"></li>
                                  <li data-target="#myCarousel" data-slide-to="3"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                  <div class="item active">
                                    <img src="../assets/images/background/oriental3.jpg" alt="Chania" style="width:100%;min-height:500px;max-height:500px">
                                  </div>

                                  <div class="item">
                                    <img src="../assets/images/background/leyte.jpg" alt="Chania" style="width:100%;min-height:500px;max-height:500px">
                                  </div>

                                  <div class="item">
                                    <img src="../assets/images/background/oriental2.jpg" alt="Flower" style="width:100%;min-height:500px;max-height:500px">
                                  </div>

                                  <div class="item">
                                    <img src="../assets/images/background/palompon.jpg" alt="Flower" style="width:100%;min-height:500px;max-height:500px">
                                  </div>
                                </div>

                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </div>
                  <!-- <video src="../assets/vid/leyte.mkv" controls style="width:100%;border-radius:10px"></video> -->
            </div>

      </div>
  </div>
</div>
 <div class="col-md-3">
  <div class="panel logins p-body">
      <div class="panel-heading grad"><h3 style="color:#FFFF00;"><strong>Announcements</strong></h3></div>
      <div class="panel-body">
            <div class="col-md-12">
                          <?php foreach ($this->registration->get_annou(1) as $key => $value): ?>
                            <hr style="background: #8C4600;height:2px;clear:left;">
                              <label for=""><strong>Name: <?php echo $value['firstname'] . " " . $value['lastname']?></strong></label>
                              <label for="" class="pull-right"> Date: <?php echo $value['dte'] . " | " . $value['tme'] ; ?></label>
                              <br /><br />
                              <p  style="width:95%;text-align:justify;margin-left:10px;text-indent:30px;">
                                  <?php echo $value['announcement'] ?>
                                  <?php if ($value['filename'] != ""): ?>
                                     
                                  <br/>  <br/> 
                                      <a  href="#" class="annou" data-toggle="modal" data-param="<?php echo $value['filename'] ?>" data-param1='<?php echo "" ?>'><img class="col-md-8 col-sm-offest-2 thumbnail"  style="clear:left"src="<?php echo '../assets/images/profpic/'.$value['filename'] ?>"></a>
                                  <?php endif ?>
                              </p>
                          <?php endforeach; ?>

            </div>
            
      </div>
  </div>
</div>
