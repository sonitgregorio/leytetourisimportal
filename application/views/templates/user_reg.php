<form class="form-horizontal" id="form_submits" method="post" onsubmit="return false">
        <?php
           echo $this->session->flashdata('message');
           if (empty($firstname))
            {
              $password = "";
              $username = "";
              $firstname = "";
              $middlename = "";
              $lastname = "";
              $usertype = "";
              $email = "";
              $contact = "";
            }
         ?>
         <div class="form-group">
            <label for="touristspotname" class="col-sm-4 control-label">First Name <small style="color:red">*</small></label>
            <div class="col-sm-8">
                <input type="text" value="<?php echo $firstname ?>" class="form-control input-background" name="fname" placeholder="Juan" required>
            </div>
          </div>
        <div class="form-group">
             <label for="touristspotname" class="col-sm-4 control-label">Middle Name <small style="color:red">*</small></label>
             <div class="col-sm-8">
                <input type="text" value="<?php echo $middlename ?>" class="form-control input-background" name="mname" placeholder="Lango" required>
             </div>
        </div>
         <div class="form-group">
          <label for="touristspotname" class="col-sm-4 control-label">Last Name <small style="color:red">*</small></label>
          <div class="col-sm-8">
                <input type="text" value="<?php echo $lastname ?>" class="form-control input-background" name="lname" placeholder="Tamad">
          </div>
         </div>

          <div class="form-group">
          <label for="touristspotname" class="col-sm-4 control-label">E-mail <small style="color:red">*</small></label>
          <div class="col-sm-8">
                <input type="email" value="<?php echo $email ?>" class="form-control input-background" name="email" placeholder="example@yahoo.com" required>
            </div>
          </div>


          <div class="form-group">
          <label for="touristspotname" class="col-sm-4 control-label">Contact <small style="color:red">*</small></label>
            <div class="col-sm-8">
                <input type="text" value="<?php echo $contact ?>"class="form-control input-background" name="contact" placeholder="09*********" required>
            </div>
          </div>


          <div class="form-group">
          <label for="touristspotname" class="col-sm-4 control-label">Username <small style="color:red">*</small></label>
            <div class="col-sm-8">
                <input type="text" value="<?php echo $username ?>" class="form-control input-background" name="username" placeholder="Username" required>
            </div>
          </div>


          <div class="form-group">
          <label for="touristspotname" class="col-sm-4 control-label">Password <small style="color:red">*</small></label>
            <div class="col-sm-8">
                <input type="password" class="form-control input-background" name="password" placeholder="Password" required>
            </div>
          </div>
          <div class="form-group">
            <label for="" class="col-sm-4 control-label">Confirm Password</label>
              <div class="col-sm-8">
                <input type="text" class="form-control input-background" name="confirmpassword" placeholder="Confirm Password">
              </div>
          </div>
          <div class="form-group">
            <label for="" class="col-sm-4 control-label">Type <small style="color:red">*</small></label>
            <div class="col-sm-8">
              <select class="form-control" name="usertype">
                <?php
                  foreach ($this->registration->getAlltype() as $key => $value):
                  extract($value);
                ?>
                <?php if ($usertype == $id): ?>
                    <option value="<?php echo $id ?>" selected><?php echo $description ?></option>
                <?php else: ?>
                  <option value="<?php echo $id ?>"><?php echo $description ?></option>
                <?php endif; ?>

                <?php endforeach; ?>
              </select>
            </div>
          </div>

        <br />
        <div class="pull-right">
            <button type="submit" class="btn btn-primary" name="button">Submit</button>
           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </form>
