<div class="col-md-12">
  <?php
      //Get tourist spot data.
      $touristspotdata = $this->registration->get_tourist_data($spots);
      extract($touristspotdata);
      if (empty($this->session->flashdata('data')))
      {
        $tabpane = 'information';
      }
      else
      {
        extract($this->session->flashdata('data'));
      }
   ?>
  <div class="panel logins p-body">
    <div class="panel-heading grad"><h3 style="color:#FFFF00;"><strong><?php echo $tourist.", " . $city; ?></strong></h3></div>
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
                              <input type="hidden" name="spots" value="<?php echo $tourist.", " . $city ?> ?>">
                              <span class="input-group-btn">
                                <button class="btn btn-success">Go!</button>
                              </span>
                            </div>
                          </div>
                        </div>
                  </div>
                </form>
                <div id="ors">
                    <?php
                      $origin = array('origin' => $city, 'destination' => $tourist.", " . $city);
                      $this->load->view('tourist/map', $origin);
                    ?>
                </div>
              </div>
            </div>
          </div>
          <!-- Content of the Tourist spot and for the reservation using tab bootstrap -->
          <div class="col-md-7" style="padding:0">
            <div class="panel logins">
                <div class="panel-heading grad"  style="color:#FFFF00;"><h4>Information About <?php echo $tourist ?></h4></div>
                <div class="panel-body">
                  <div>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                      <li role="presentation" class="<?php  echo $tabpane == 'information' ?  'active' : '' ?>"><a href="#information" aria-controls="home" role="tab" data-toggle="tab">Information</a></li>
                      <li role="presentation" class="<?php  echo $tabpane == 'images' ?  'active' : '' ?>"><a href="#images" aria-controls="profile" role="tab" data-toggle="tab">Images</a></li>
                      <li role="presentation" class="<?php  echo $tabpane == 'hotel' ?  'active' : '' ?>"><a href="#hotel" aria-controls="messages" role="tab" data-toggle="tab">Hotels</a></li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div role="tabpanel col-md-12" class="tab-pane <?php echo $tabpane == 'information' ? 'active' : '' ?>" id="information"  style="background-color:#FFFFE0;">
                          <br />
                          <?php
                              $data['information'] = $information;
                              $this->load->view('tourist/information', $data);
                          ?>
                      </div>
                      <div role="tabpanel col-md-12" class="tab-pane <?php echo $tabpane == 'images' ? 'active' : '' ?>"  id="images" style="background-color:#FFFFE0;">
                        <br />
                        <div class="col-md-12" style="background-color: #FFFFE0" >
                               <?php $this->load->view('tourist/images') ?>
                        </div>
                      </div>
                     <div role="tabpanel col-md-12" class="tab-pane <?php echo $tabpane == 'hotel' ? 'active' : '' ?>" id="hotel" style="background-color:#FFFFE0;">
                        <br />
                        <div class="col-md-12" style="background-color: #FFFFE0" >
                          <?php
                            if ($this->session->userdata('usertype') == "4"):

                          ?>
                              <form class="form" action="/insert_hotel" method="post">
                                <div class="col-md-4">
                                      <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
                                        <div>
                                          <span class="btn btn-info btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="..."></span>
                                          <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                        </div>
                                  </div>
                                </div>
                              <div class="col-md-8">
                                        <label>Hotel Name</label>
                                            <input type="hidden" name="spots" value="<?php echo $spots ?>">
                                            <input type="hidden" name="tabpane" value="hotel">
                                            <input type="text" class="form-control" name="name" value="<?php echo $tabpane ?>" style="width:100%">
                                        <label>Contact</label>
                                            <input type="text" class="form-control" name="name" value=""  style="width:100%">
                                        <label>Address</label>
                                            <input type="text" class="form-control" name="name" value="" style="width:100%">
                                            <button type="submit" class="btn btn-success" style="margin-top:10px"  name="button">Save</button>
                                            <br /><br />
                              </div>
                            </form>
                          <?php endif; ?>
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
