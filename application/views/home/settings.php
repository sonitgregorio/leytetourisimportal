<?php
      $in = $this->registration->get_info($this->session->userdata('uid'));
 ?>
<div class="col-md-8 col-md-offset-2">
  <div class="panel logins p-body" style="margin-top:0;box-shadow:none;margin-top:60px">
    <div class="panel-heading grad" style="box-shadow:none"><h4 style="color:#FFFF00;"><span class="glyphicon glyphicon-edit"></span>&nbsp;Edit Account Information</h4></div>
      <div class="panel-body">
        <div class="col-md-12">
          <form class="form-horizontal" action="/update_setts" method="post">
            <div class="form-group">
                <label for="" class="col-sm-3 control-label">First Name</label>
                <div class="col-sm-9">
                  <input type="text" name="firstname" value="<?php echo $in['firstname'] ?>" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-3 control-label">Middle Name</label>
                <div class="col-sm-9">
                  <input type="text" name="middlename" value="<?php echo $in['middlename'] ?>" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-3 control-label">Last Name</label>
                <div class="col-sm-9">
                  <input type="text" name="lastname" value="<?php echo $in['lastname'] ?>" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-3 control-label">Email Address</label>
                <div class="col-sm-9">
                  <input type="text" name="email" value="<?php echo $in['email'] ?>" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label for="" class="col-sm-3 control-label">Contact</label>
                <div class="col-sm-9">
                  <input type="text" name="contact" value="<?php echo $in['contact'] ?>" class="form-control">
                  <div class="col-sm-3 pull-right" style="padding:0">
                    <br />
                    <button type="submit" class="btn btn-info" name="button">Cancel</button>
                    <button type="submit" class="btn btn-success" name="button">Save</button>
                  </div>
                </div>
            </div>
          </form>

        </div>

          <div class="col-md-12">
            <div class="panel logins p-body" style="margin-top:0;box-shadow:none;background-color: #FFFFE0;min-height:100px">
              <div class="panel-heading grad" style="box-shadow:none"><h4 style="color:#FFFF00;"><span class="glyphicon glyphicon-lock"></span>&nbsp;Change Password</h4></div>
                <div class="panel-body">
                      <div class="col-md-12">
                        <form class="form-horizontal" action="index.html" method="post">
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Old Pasword</label>
                            <div class="col-sm-9">
                                <input type="password" name="name" value="sonitgregorio" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">New Pasword</label>
                            <div class="col-sm-9">
                                <input type="password" name="name" value="sonitgregorio" class="form-control">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">Confirm Pasword</label>
                            <div class="col-sm-9">
                                <input type="password" name="name" value="sonitgregorio" class="form-control">
                            </div>
                          </div>
                          <button class="btn btn-success pull-right" type="button" name="button" style="margin-top:10px">Save</button>
                        </form>
                            <br /><br />
                            <hr style="background: #8C4600;height:2px;">
                      </div>
                </div>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>
