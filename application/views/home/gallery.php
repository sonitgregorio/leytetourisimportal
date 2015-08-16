<div class="col-md-12 ">
  <div class="panel logins p-body" style="margin-top:0;box-shadow:none;margin-top:60px">
    <div class="panel-heading grad" style="box-shadow:none"><h4 style="color:#FFFF00;"><span class="glyphicon glyphicon-picture"></span>&nbsp;Gallery</h4></div>
      <div class="panel-body">

            <div class="col-md-12" style="padding:0">

                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#upload" aria-controls="home" role="tab" data-toggle="tab">Upload</a></li>
                    <li role="presentation"><a href="#images" aria-controls="profile" role="tab" data-toggle="tab">Images</a></li>
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel col-md-12" class="tab-pane active" id="upload"  style="background-color:#FFFFE0;">
                        <br />
                        <?php $this->load->view('home/upload') ?>
                    </div>
                    <div role="tabpanel col-md-12" class="tab-pane" id="images" style="background-color:#FFFFE0;">
                      <br />
                      <div class="col-md-12" style="background-color: #FFFFE0" >
                             <?php $this->load->view('home/images') ?>
                      </div>
                    </div>
                </div>
              </div>



      </div>
  </div>
</div>
