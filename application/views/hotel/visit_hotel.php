<div class="col-md-12" >
  <div class="panel logins p-body">
      <div class="panel-body">
        <div class="col-md-3">
          <div class="col-md-12" >
            <?php  $x = $this->room->hotel_inf($hid); ?>
                   <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width:100%">
                      <?php
                         
                       ?>
                        <img src="<?php echo "../assets/images/hotels/".$x['filename'] ?>" alt="" /> 
                    </div>

              <!-- <img src="../assets/images/background/nav.jpg" class="thumbnail touris-image" style="width:200px;height:200px "/> -->
                <form>
                    <label>Hotel</label><br />
                    <label class="form-control"><?php echo ucwords($x['hotel']) ?></label>
                    <label>Contact</label><br />
                    <label class="form-control"><?php echo ucwords($x['contact']) ?></label>
                    <label>Address</label><br />
                    <label class="form-control"><?php echo ucwords($x['address']) ?></label>
                    <label>Description</label><br />
                    <p style="text-indent:20px;text-align:justify"><?php echo ucwords($x['information']) ?></p>
                </form>
          </div>
        </div>
        <div class="col-md-9">
          <div class="panel logins p-body" style="margin-top:0;box-shadow:none;background-color: #FFFFE0">
            <div class="panel-heading grad" style="box-shadow:none"><h4 style="color:#FFFF00;"><span class="glyphicon glyphicon-edit"></span>&nbsp;Rooms</h4></div>
              <div class="panel-body">
                   <?php foreach ($this->room->get_room($x['owned']) as $key => $v): ?>
                      <div class="col-md-4" style="text-align:center;margin-bottom:20px">
                        <figure class="uk-overlay uk-overlay-hover thumbnail">
                            <a href="/view_r/<?php echo $v['id'] ?>"><img src="<?php echo "../assets/images/rooms/".$v['filename'] ?> ?>" class="touris-image" style="padding:0;width:100%; height:200px;"/></a>
                            <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-background uk-overlay-slide-bottom"><?php echo $v['roomno'] ?></figcaption>
                        </figure>
                        <div class="btn-group" style="width:100%;">
                          <a href="/view_r/<?php echo $v['id'] ?>" class="btn btn-info" name="button" style="width:100%">View Room</a>
                        </div>
                      </div> 
                    <?php endforeach ?>
              </div>
            </div>
        </div>

      </div>
  </div>
</div>
