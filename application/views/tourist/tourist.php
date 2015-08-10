<div class="col-md-12">
  <div class="panel logins p-body">
    <div class="panel-heading grad"><h3 style="color:#FFFF00;"><strong>MacArthur Park, Palo Leyte</strong></h3></div>
      <div class="panel-body">
          <div class="col-md-5">
            <div class="panel logins">
              <div class="panel-heading grad" style="color:#FFFF00;"><strong><h4>Map</h4></strong></div>
              <div class="panel-body">
                <form class="form-horizontal" id = "orig" method="post" onsubmit="return false">
                  <div class="form-group">
                        <label for="origin" class="col-md-2 control-label">Origin</label>
                        <div class="row">
                          <div class="col-lg-9">
                            <div class="input-group">
                              <input type="text" class="form-control" name="origin" placeholder="Origin..." required>
                              <span class="input-group-btn">
                                <button class="btn btn-default" id="show">Go!</button>
                              </span>
                            </div>
                          </div>
                        </div>
                  </div>
                </form>
                <div id="ors">

                    <?php
                     $origin = array('origin' => 'Tacloban City');
                     $this->load->view('tourist/map', $origin);
                      ?>
                </div>
              </div>
            </div>
          </div>

          <!-- Content of the Tourist spot and for the reservation using tab bootstrap -->
          <div class="col-md-7" style="padding:0">
            <div class="panel logins">
                <div class="panel-heading grad"  style="color:#FFFF00;"><h4>Information About MacArthur Park</h4></div>
                <div class="panel-body">
                  <div>

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                      <li role="presentation" class="active"><a href="#information" aria-controls="home" role="tab" data-toggle="tab">Information</a></li>
                      <li role="presentation"><a href="#images" aria-controls="profile" role="tab" data-toggle="tab">Images</a></li>
                      <li role="presentation"><a href="#hotel" aria-controls="messages" role="tab" data-toggle="tab">Hotels</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div role="tabpanel col-md-12" class="tab-pane active" id="information"  style="background-color:#FFFFE0;">
                          <br />
                          <?php $this->load->view('tourist/information') ?>
                      </div>
                      <div role="tabpanel col-md-12" class="tab-pane" id="images" style="background-color:#FFFFE0;">
                        <br />
                        <div class="col-md-12" style="background-color: #FFFFE0" >
                               <?php $this->load->view('tourist/images') ?>

                        </div>
                       
                      </div>
                     <div role="tabpanel col-md-12" class="tab-pane" id="hotel" style="background-color:#FFFFE0;">
                        <br />
                        <div class="col-md-12" style="background-color: #FFFFE0" >
                               <?php $this->load->view('tourist/hotels') ?>

                        </div>
                       
                      </div>

                  </div>
                </div>
            </div>
          </div>

      </div>
    </div>
  </div>
