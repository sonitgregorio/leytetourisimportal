<div class="col-md-offset-3 col-md-6 centerdiv">
  <div class="panel panel-success logins">
    <div class="panel-heading p-head"><h3 style="color:#df3a01;"><strong>User Registration</strong></h3></div>
    <div class="panel-body">
        <form action="/verify_login" method="post">
                <!-- <label for="touristspotname"></label><br /> -->
                <?php
                  echo $this->session->flashdata('message');
                 ?>
                  <label for="touristspotname"><h4>Firstname</h4></label>
                  <input type="text" class="form-control input-background" name="fname" placeholder="Juan" required>
                  <label for="touristspotname"><h4>Middle Name</h4></label>
                  <input type="text" class="form-control input-background" name="mname" placeholder="Lango" required>
                  <label for="touristspotname"><h4>Last Name</h4></label>
                  <input type="text" class="form-control input-background" name="lname" placeholder="Tamad">
                  <label for="touristspotname"><h4>E-mail</h4></label>
                  <input type="email" class="form-control input-background" name="email" placeholder="example@yahoo.com" required>
                  <label for="touristspotname"><h4>Contact</h4></label>
                  <input type="text" class="form-control input-background" name="contact" placeholder="09*********" required>
                  <label for="touristspotname"><h4>Username</h4></label>
                  <input type="text" class="form-control input-background" name="username" placeholder="Username" required>
                  <label for="touristspotname"><h4>Password</h4></label>
                  <input type="password" class="form-control input-background" name="password" placeholder="Password" required>
                <br />
                <div class="pull-right">
                    <button type="submit" class="btn btn-primary" name="button">Submit</button>
                    <a href="/" class="btn btn-info">Cancel</a>
                </div>
                <br />
                <br />
                <br />
        </form>
    </div>

    </div>
</div>
