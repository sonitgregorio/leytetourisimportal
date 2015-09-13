<div class="col-md-12" >
  <div class="panel logins p-body" style="min-height">
    <div class="panel-heading grad"><h3 style="color:#FFFF00;"><strong>Leyte Tourist Destination</strong></h3></div>
    <div class="panel-body">
        <?php if ($this->session->userdata('usertype') == "4"): ?>
          <div class="col-md-12">
            <form class="form" action="/insert_destination" method="post" enctype="multipart/form-data" >

              <div class="col-md-2" style="padding:10px">
                    <div class="fileinput fileinput-new" data-provides="fileinput">
                      <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                      <div>
                        <span class="btn btn-default btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="picture"></span>
                        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                      </div>
                    </div>
              </div>

            <div class="col-md-4" style="padding-left:30px">
              <?php
                  echo $this->session->flashdata('message');
               ?>
                      <label>Tourist Destination</label>
                          <input type="text" class="form-control" name="city" value="" required >
                      <label>Contact</label>
                          <input type="text" class="form-control" name="contact" value=""   required >
                      <button type="submit" class="btn btn-success" style="margin-top:10px"  name="button">Save</button>
                          <br /><br />
            </div>
            <div class="col-md-6">

            </div>

          </form>
          </div>

        <?php endif; ?>
        <?php foreach ($this->registration->select_city() as $key => $value):
            extract($value);
          ?>
          <div class="col-md-4" style="text-align:center;margin-bottom:20px">
            <figure class="uk-overlay uk-overlay-hover thumbnail">
                <a href="/citytourist/<?php echo $id ?>"><img src="<?php echo "../assets/images/touristdestination/".$filename ?> ?>" class="touris-image" style="height:300px"/></a>
                <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-background uk-overlay-slide-bottom"><?php echo $city ?></figcaption>
            </figure>



                <?php if ($this->session->userdata('usertype') == "4"): ?>
                  <div class="btn-group" style="width:100%;margin:top:10px">
                    <a class="btn btn-info col-md-6" href="/citytourist/<?php echo $id ?>"><?php echo $city; ?>&nbsp;&nbsp;<span class="glyphicon glyphicon-open"></span></a>
                    <a href="#" class="btn btn-danger col-md-6">Delete&nbsp;&nbsp;<span class="glyphicon glyphicon-trash"></span></a>
                  </div>
                <?php else: ?>
                      <a class="btn btn-info btn-block" href="/citytourist/<?php echo $id ?>"><?php echo $city ?></a>
                <?php endif; ?>


          </div>
        <?php endforeach; ?>

          <br />
      </div>
      </div>
    </div>
  </div>
</div>
