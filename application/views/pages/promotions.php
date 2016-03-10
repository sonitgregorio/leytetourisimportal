<div class="col-md-12" >
  <div class="panel logins p-body">
      <div class="panel-body">
        <div class="col-md-12">
          <div class="panel logins p-body" style="margin-top:0;box-shadow:none;background-color: #FFFFE0">
            <div class="panel-heading grad" style="box-shadow:none"><h4 style="color:#FFFF00;"><span class="glyphicon glyphicon-edit"></span>&nbsp;Promotions</h4></div>
              <div class="panel-body">
                    <div class="col-md-12">
                      <div class="col-md-12">
                        <div class="col-md-6">
                      <form class="form-horizontal" action="/insert_promotions" method="post" enctype="multipart/form-data">
                            <?php echo $this->session->flashdata('message') ?>
                            <div class="fileinput fileinput-new" data-provides="fileinput" style="margin-left:26%">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width:100%; height: 200px;">
                                   
                                </div>
                                <div>
                                  <span class="btn btn-info btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="picture" required></span>
                                  <button type="submit" class="btn btn-success fileinput-exists">Save</button>
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-sm-3 control-label">Description</label>
                              <div class="col-sm-9">
                                <textarea class="form-control" name="descr" placeholder="Your Description!" required></textarea>
                              </div>
                            </div>
                            <div class="pull-right">
                              <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                          </form>
                      </div>
                      </div>
                      

                      <div class="col-md-12">
                          
                          <hr style="background: #8C4600;height:2px;">
                          <?php foreach ($this->db->query("SELECT * FROM tbl_promotion")->result_array() as $v): ?>
                            <div class="col-md-4" style="text-align:center;margin-bottom:20px">
                              <figure class="uk-overlay uk-overlay-hover thumbnail">
                                  <a href="#" class="res" data-param='<?php echo $v['pic'] ?>' data-param1 = '<?php echo $v['description'] ?>'><img src="<?php echo "../assets/images/".$v['pic'] ?>" class="touris-image" style="height:300px"/></a>
                                  <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-background uk-overlay-slide-bottom"><?php echo $v['description'] ?></figcaption>
                              </figure>
                               <!--  <div class="btn-group" style="width:100%;margin:top:10px">
                                  <a class="btn btn-info col-md-6 res" href="#" data-param='<?php echo $v[''] ?>'>View&nbsp;<span class="glyphicon glyphicon-open"></span></a>
                                  <a href="/del_gal/<?php echo $v['id'] ?>" class="btn btn-danger col-md-6" onclick="return confirm('Are You Sure?')">Delete&nbsp;&nbsp;<span class="glyphicon glyphicon-trash"></span></a>
                                </div> -->
                            </div>
                        <?php endforeach; ?>

                                               
                          <hr style="background: #8C4600;height:2px;width:100%">

                      </div>


                       


                    </div>
              </div>
            </div>
        </div>

      </div>
  </div>
</div>
