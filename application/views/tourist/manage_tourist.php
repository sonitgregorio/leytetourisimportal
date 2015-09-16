<div class="col-md-12">
  <div class="panel logins p-body">
    <div class="panel-heading grad" style="box-shadow:none"><h4 style="color:#FFFF00;"><span class="glyphicon glyphicon-edit"></span>&nbsp;Announcement</h4></div>
      <div class="panel-body">
            <div class="col-md-12" style="padding:0">
              <div>
                <ul class="nav nav-tabs" role="tablist">
                  <li role="presentation" class="<?php // echo $tabpane == 'information' ?  'active' : '' ?> active"><a href="#information" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-pencil fa-fw"></i>&nbsp;Information</a></li>
                  <li role="presentation" class="<?php  //echo $tabpane == 'images' ?  'active' : '' ?>"><a href="#images" aria-controls="profile" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-picture"></span>&nbsp;Images</a></li>
                </ul>
                <div class="tab-content">
                    <div class="col-md-12 tab-pane active" role="tabpanel" id="information" style="background-color:#FFFFE0;">
                      <br/>
                        <?php
                            $this->load->view('tourist/setting_tourist');
                         ?>
                    </div>  
                    <div class="col-md-12 tab-pane" role="tabpanel" id="images" style="background-color:#FFFFE0;">
                    </div>
                </div>
              </div>
            </div>

      </div>
    </div>
</div>
