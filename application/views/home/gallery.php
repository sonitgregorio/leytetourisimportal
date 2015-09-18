<div class="col-md-12 ">
  <div class="panel logins p-body" style="margin-top:0;box-shadow:none;margin-top:60px">
    <div class="panel-heading grad" style="box-shadow:none"><h4 style="color:#FFFF00;"><span class="glyphicon glyphicon-picture"></span>&nbsp;Gallery</h4></div>
      <div class="panel-body">

        <form class="form" action="/upload_pic" method="post" enctype="multipart/form-data">
          <div class="col-md-4 col-md-offset-4">
            <?php echo $this->session->flashdata('message'); ?>
                <div class="fileinput fileinput-new" data-provides="fileinput">
                  <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 300px; height: 220px;">
                  <!-- <img src="<?php echo "../assets/images/touristspot/" . $data['filename'] ?>" alt="" /> -->
                  </div>
                  <div>
                    <span class="btn btn-info btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="picture"></span>
                    <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                  </div>
                  <input type="text" class="form-control" name="descr" value="" placeholder="Add Some Description" required style="margin-top:10px">
                  <button type="submint" class="btn btn-success" name="button" style="margin-top:10px">Save</button>
                </div>
          </div>
        </form>
        <div class="col-md-12">
          <?php foreach ($this->registration->get_gallery() as $v): ?>
            <div class="col-md-4" style="text-align:center;margin-bottom:20px">
              <figure class="uk-overlay uk-overlay-hover thumbnail">
                  <a href="#" class="res" data-param='<?php echo $v['filename'] ?>' data-param1 = '<?php echo $v['descr'] ?>'><img src="<?php echo "../assets/images/gallery/".$v['filename'] ?> ?>" class="touris-image" style="height:300px"/></a>
                  <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-background uk-overlay-slide-bottom"><?php echo $v['descr'] ?></figcaption>
              </figure>
                <div class="btn-group" style="width:100%;margin:top:10px">
                  <a class="btn btn-info col-md-6 res" href="#" data-param='<?php echo $v['filename'] ?>'>View&nbsp;<span class="glyphicon glyphicon-open"></span></a>
                  <a href="/del_gal/<?php echo $v['id'] ?>" class="btn btn-danger col-md-6" onclick="return confirm('Are You Sure?')">Delete&nbsp;&nbsp;<span class="glyphicon glyphicon-trash"></span></a>
                </div>

            </div>
          <?php endforeach; ?>

        </div>
      </div>
  </div>
</div>
