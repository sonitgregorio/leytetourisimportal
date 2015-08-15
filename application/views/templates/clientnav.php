
<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" style="padding:0;">
      <div class="container-fluid" style="padding:2;background-color: #8C4600;BORDER-BOTTOM: #522B04 2px solid;BACKGROUND-COLOR: #8C4600;">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <a class="navbar-brand" href="/">LTP</a>

</div>

 <!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
  <?php
      $tourist = "";
      $home = "";
      if ($param) {
        if ($param == "tourist") {
          $tourist = "active";

        }elseif ($param = "home") {
            $home = "active";
        }
      }

   ?>
  <ul class="nav navbar-nav">
    <li class="<?php echo $home ?>" ><a href="/"><span class="glyphicon glyphicon-home"></span>&nbsp;<b>Home</b> <span class="sr-only">(current)</span></a></li>
    <li class = <?php echo $tourist; ?>><a href="/tourist-list"><span class="glyphicon glyphicon-road"></span>&nbsp;<b>Tourist Destination</b></a></li>
    <li><a href="/tourist"><span class="glyphicon glyphicon-menu-hamburger"></span>&nbsp;<b>About</b></a></li>
    <li><a href="/tourist"><span class="glyphicon glyphicon-question-sign"></span>&nbsp;<b>FAQ</b></a></li>


  </ul>
  <ul class="nav navbar-nav navbar-right">
      <form class="navbar-form navbar-left" action="/verify_login" method="post">
          <div class="col-md-12">

            <label><?php
                echo $this->session->flashdata('message');
               ?></label>

              <!-- <a href=""><small>Forgot Password?</small></a> -->
              <div class="form-group">

                <input type="text" class="form-control" name="username" placeholder="Username">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Password">
              </div>

              <button class="btn btn-success" type="submit" class="btn btn-default">Login</button>
              <a class="btn btn-info" data-toggle="modal" data-target="#myModal">Sign Up</a>

          </div>
  </form>
  </ul>

</div><!--.navbar-collapse -->
</div><!--.container-fluid -->
</nav>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header modal-style">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><h4 style="color:#FFFF00;"><strong>User Registration</strong></h4></h4>
      </div>
          <div class="modal-body">
              <div class="panel-body">
                <form class="form-horizontal" action="/verify_login" method="post">
                        <?php
                           echo $this->session->flashdata('message');
                         ?>
                         <div class="form-group">
                            <label for="touristspotname" class="col-sm-4 control-label">First Name <small style="color:red">*</small></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control input-background" name="fname" placeholder="Juan" required>
                            </div>
                          </div>
                        <div class="form-group">
                             <label for="touristspotname" class="col-sm-4 control-label">Middle Name <small style="color:red">*</small></label>
                             <div class="col-sm-8">
                                <input type="text" class="form-control input-background" name="mname" placeholder="Lango" required>
                             </div>
                        </div>
                         <div class="form-group">
                          <label for="touristspotname" class="col-sm-4 control-label">Last Name <small style="color:red">*</small></label>
                          <div class="col-sm-8">
                                <input type="text" class="form-control input-background" name="lname" placeholder="Tamad">
                          </div>
                         </div>



                          <div class="form-group">
                          <label for="touristspotname" class="col-sm-4 control-label">E-mail <small style="color:red">*</small></label>
                          <div class="col-sm-8">
                                <input type="email" class="form-control input-background" name="email" placeholder="example@yahoo.com" required>
                            </div>
                          </div>


                          <div class="form-group">
                          <label for="touristspotname" class="col-sm-4 control-label">Contact <small style="color:red">*</small></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control input-background" name="contact" placeholder="09*********" required>
                            </div>
                          </div>


                          <div class="form-group">
                          <label for="touristspotname" class="col-sm-4 control-label">Username <small style="color:red">*</small></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control input-background" name="username" placeholder="Username" required>
                            </div>
                          </div>


                          <div class="form-group">
                          <label for="touristspotname" class="col-sm-4 control-label">Password <small style="color:red">*</small></label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control input-background" name="password" placeholder="Password" required>
                            </div>
                          </div>
                          <!-- <div class="progress">
  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100"
  aria-valuemin="0" aria-valuemax="100" style="width:100%">
    100% Complete (warning)
  </div>
</div> -->

                        <br />
                        <div class="pull-right">
                            <button type="submit" class="btn btn-primary" name="button">Submit</button>
                           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </form>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>
