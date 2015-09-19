<?php 
      $x = $this->room->get_room_info($id);
 ?>

<div class="col-md-4">
  <div class="panel logins p-body">
      <div class="panel-heading grad"><h3 style="color:#FFFF00;"><strong>Add Room</strong></h3></div>
      <div class="panel-body">
        <div class="col-md-12">
          <?php 
            echo $this->session->flashdata('message');
           ?>
      <form class = "form" method="post" action="/update_room" enctype="multipart/form-data">
        <input type="hidden" name='roomid' value="<?php echo $id ?>">
        <div class="col-md-12">
                  <div class="fileinput fileinput-new" data-provides="fileinput">
                    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                        <img src="../assets/images/rooms/<?php echo $x['filename'] ?>" class="img">
                    </div>
                    <div>
                      <span class="btn btn-info btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="picture"></span>
                      <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                    </div>
                  </div>
        </div>
        <div class="col-md-12">
          <label>Room No.</label>
          <input type="text" name="roomno" class='form-control' placeholder="Room" value="<?php echo $x['roomno'] ?>" required>
          <label>Description</label>
          <input type="text" name="descr" class='form-control' placeholder="Description" value="<?php echo $x['description'] ?>" required>
          <label>Room Rate</label>
          <input type="number" name="rate" class='form-control' placeholder="Rate" value="<?php echo $x['rate'] ?>" required>
          <button type="submit" class="btn btn-success pull-right" style="margin-top:5px">Save</button>
        </div>
          </form>
        </div>
      </div>
  </div>
</div>
<div class="col-md-8" style="padding-left:0">
  <div class="panel logins p-body">
      <a href="#" data-toggle="modal" class="btn btn-info pull-right" data-target="#upload_image" style="margin-top:15px;margin-right:10px">Upload Image</a>
      <div class="panel-heading grad">
        <h3 style="color:#FFFF00;"><strong>Images</strong></h3>
        
        </div>
      <div class="panel-body">
        <div class="col-md-12">
            <?php 
              $uid = $this->session->userdata('uid');
              $roomid = $id;
              foreach ($this->room->get_room_gal($uid, $roomid) as $key => $v): ?>
        <div class="col-md-4" style="text-align:center;margin-bottom:20px">
          <figure class="uk-overlay uk-overlay-hover thumbnail">
              <a href="#"  class="room" data-param='<?php echo $v['filename'] ?>' data-param1 = '<?php echo $v['description'] ?>'><img src="<?php echo "../assets/images/roomsgal/".$v['filename'] ?> ?>" class="touris-image" style="padding:0;width:100%; height:200px;"/></a>
              <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-background uk-overlay-slide-bottom"><?php echo $v['description'] ?></figcaption>
          </figure>
           <div class="btn-group" style="width:100%;margin:top:10px">
                       <button class="btn btn-info col-md-6 room" href="#" data-param='<?php echo $v['filename'] ?>' data-param1 = '<?php echo $v['description'] ?>'>View&nbsp;&nbsp;<span class="glyphicon glyphicon-open"></span></button>
                       <a href="/del_room_gal/<?php echo $v['id'] . '/' . $id ?>" class="btn btn-danger col-md-6" onclick="return confirm('Are You Sure?')">Delete&nbsp;&nbsp;<span class="glyphicon glyphicon-trash"></span></a>
            </div>
        </div>
      <?php endforeach ?> 
        </div>
      </div>
  </div>
</div>


<div class="modal fade" id="upload_image" tabindex="-1" role="dialog" aria-labeledby="resizeimage">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         <h4 class="modal-title descr" id="myModalLabel">Upload Image</h4>
      </div>

      <form class="form" method="post" action="/upload_image_room"  enctype="multipart/form-data">
        <?php echo $this->session->flashdata('messages') ?>
          <input type="hidden" name="roomid" value="<?php echo $id ?>">
         <div class="modal-body">
          <center>
             <div class="fileinput fileinput-new" data-provides="fileinput">
                      <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;">
                     </div>
                      <div>
                        <span class="btn btn-info btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="pictures" required></span>
                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                      </div>
                      <input ctype="text" name="descr" placeholder="DESCRIPTION" class="form-control col-md-6" style="margin-top:10px" required>
              </div>            </center>
         </div>
         <div class="modal-footer">
            <button type="submit" class="btn btn-success">Save</button>
            <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
         </div>
       </form>

    </div>
  </div>
</div>