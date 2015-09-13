
<div class="col-md-12" >
  <div class="panel logins p-body">
    <div class="panel-heading grad"><h3 style="color:#FFFF00;"><strong><?php  echo $this->registration->getPlace($destination) ?>, Tourist Spots</strong></h3></div>
    <div class="panel-body">
      <?php if ($this->session->userdata('usertype') == "4"): ?>
          <form class="form" action="/insert_spot" method="post" enctype="multipart/form-data" >
            <input type="hidden" name="city" value="<?php echo $destination ?>">

          <div class="col-md-5" style="padding-left:30px">
            <?php echo $this->session->flashdata('message'); ?>
                    <label>Tourist Spot</label>
                        <input type="text" class="form-control" name="touristspot" value="" >
                    <label>Contact</label>
                        <input type="text" class="form-control" name="contact" value=""  >
                    <label>Address</label>
                        <input type="text" class="form-control" name="address" value="" >

          </div>
          <div class="col-md-3">
            <label for="">Select Image</label>
                <div class="fileinput fileinput-new" data-provides="fileinput" style="width:100%">
                  <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width:100%; height: 200px;"></div>
                  <div>
                    <span class="btn btn-info btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="picture"></span>
                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                  </div>
            </div>
          </div>
          <div class="col-md-4">
              <label>Information</label>
              <textarea name="description" class="form-control" style="resize:none;width:100%;height:200px " required placeholder="Description here....."></textarea>
              <button type="submit" class="btn btn-success pull-right" style="margin-top:10px"  name="button">Save</button>
  <br /><br /><br />
          </div>

        </form>
      <?php endif; ?>
      <?php
          foreach ($this->registration->get_spots($destination) as $key => $value):
          extract($value);
       ?>
             <div class="col-md-4" style="text-align:center;margin-bottom:20px">
               <figure class="uk-overlay uk-overlay-hover thumbnail">
                   <a href="/tourist/<?php echo $id ?>"><img src="<?php echo "../assets/images/touristspot/".$filename ?> ?>" class="touris-image" style="height:300px"/></a>
                   <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-background uk-overlay-slide-bottom"><?php echo $tourist ?></figcaption>
               </figure>



                   <?php if ($this->session->userdata('usertype') == "4"): ?>
                     <div class="btn-group" style="width:100%;margin:top:10px">
                       <a class="btn btn-info col-md-6" href="/tourist/<?php echo $id ?>"><?php echo $tourist ?>&nbsp;&nbsp;<span class="glyphicon glyphicon-open"></span></a>
                       <a href="#" class="btn btn-danger col-md-6">Delete&nbsp;&nbsp;<span class="glyphicon glyphicon-trash"></span></a>
                     </div>
                   <?php else: ?>
                         <a class="btn btn-info btn-block" href="/tourist/<?php echo $id ?>"><?php echo $tourist ?></a>
                   <?php endif; ?>


             </div>
      <?php endforeach; ?>

                <!-- <div class="col-md-4" style="text-align:center;margin-bottom:20px">
                    <a href="/tourist/palocathedral"><img src="../assets/images/background/palo.jpg" class="thumbnail touris-image" /></a>
                    <a class="btn btn-info" href="/tourist/palocathedral" style="margin-top:-10px;">Palo Cathedral</a>
                </div> -->


               <br />
      </div>
    </div>
  </div>
