<div class="col-md-12" >
  <div class="panel logins p-body" style="min-height">
    <div class="panel-heading grad"><h3 style="color:#FFFF00;"><strong>Leyte Tourist Destination</strong></h3></div>
    <div class="panel-body">
        <?php if ($this->session->userdata('usertype') == "4"): ?>
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

            <div class="col-md-10">
                      <label>Tourist Destination</label>
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

        <div class="col-md-4" style="text-align:center;margin-bottom:20px">
            <a href="/citytourist"><img src="../assets/images/background/palo.jpg" class="thumbnail touris-image" /></a>
            <a class="btn btn-info" href="/citytourist/palo">Palo Leyte</a>
            <?php if ($this->session->userdata('usertype') == "4"): ?>
                <a href="#" class="btn btn-danger">Delete&nbsp;<span class="glyphicon glyphicon-trash"></span></a>
            <?php endif; ?>
        </div>
               <br />
      </div>
      </div>
    </div>
  </div>
</div>
