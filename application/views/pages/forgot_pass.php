
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<?php if ($chk == 1): ?>
    <div class="col-md-4 col-md-offset-4">
      <div class="panel logins ">
          <div class="panel-heading grad"><h3 style="color:#FFFF00;"><strong>Forgot Password</strong></h3></div>
          <div class="panel-body">
                <div class="col-md-12">
                <?php echo $this->session->flashdata('emai') ?>
                  <form class="form login_submit " action="/reset_pass" method="post">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="">Email Address</label>
                        <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                      </div>
                      <div class="col-md-12" style="padding:0">
                        <button type="submit" class="btn btn-success" type="submit">Submit</button>
                        <a href="/" class="">Cancel</a>
                      </div>
                  </div>
                </form>

                </div>

          </div>
      </div>
    </div>
<?php elseif($chk == 2): ?>
    <div class="col-md-4 col-md-offset-4">
      <div class="panel logins ">
          <div class="panel-heading grad"><h3 style="color:#FFFF00;"><strong>Forgot Password</strong></h3></div>
          <div class="panel-body">
          <?php echo $this->session->flashdata('confirmcode') ?>
                <div class="col-md-12">
                  <form class="form login_submit " action="/submit_code" method="post">
                    <input type="hidden" name="email" value="<?php echo $em ?>">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="">Confirmation Code</label>
                        <input type="text" class="form-control" name="confirmcode" placeholder="Confirmation Code" required>
                      </div>
                      <div class="col-md-12" style="padding:0">
                        <button type="submit" class="btn btn-success" type="submit">Submit</button>
                        <a href="/" class="">Cancel</a>
                      </div>
                  </div>
                </form>
                </div>
          </div>
      </div>
    </div>
<?php elseif($chk == 3): ?>
    <div class="col-md-4 col-md-offset-4">
      <div class="panel logins ">
          <div class="panel-heading grad"><h3 style="color:#FFFF00;"><strong>Forgot Password</strong></h3></div>
          <div class="panel-body">
                <?php echo $this->session->flashdata('password') ?>
                <div class="col-md-12">
                  <form class="form login_submit " action="/submit_password" method="post">
                    <input type="hidden" name="email" value="<?php echo $em ?>">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="">New Password</label>
                        <input type="password" class="form-control" name="password" placeholder="New Password" required>
                      </div>
                      <div class="form-group">
                        <label for="">Confirm Password Password</label>
                        <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password" required>
                      </div>
                      <div class="col-md-12" style="padding:0">
                        <button type="submit" class="btn btn-success" type="submit">Submit</button>
                        <a href="/" class="">Cancel</a>
                      </div>
                  </div>
                </form>
                </div>
          </div>
      </div>
    </div>
  <?php else: ?>
      <div class="col-md-4 col-md-offset-4">
      <div class="panel logins ">
          <div class="panel-heading grad"><h3 style="color:#FFFF00;"><strong>Forgot Password</strong></h3></div>
          <div class="panel-body">
                <div class="col-md-12">
                    <?php echo $this->session->flashdata('password') ?>
                </div>
          </div>
      </div>
    </div>
<?php endif ?>
