
<nav class="navbar navbar-default navbar-fixed-top backsss" style="padding:0;">
      <div class="container-fluid backs">
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
    <li class="<?php echo $home ?>"><a href="/" style="color:white"><span class="glyphicon glyphicon-home"></span>&nbsp;<b>Home</b> <span class="sr-only">(current)</span></a></li>
    <li class = "<?php echo $tourist; ?>"><a href="/tourist-list" style="color:white"><span class="glyphicon glyphicon-road"></span>&nbsp;<b>Tourist Destination</b></a></li>
    <li>

    </li>


    <!-- <li><a href="/tourist"  style="color:white"><span class="glyphicon glyphicon-menu-hamburger" class="colors"></span>&nbsp;<b>About</b></a></li>
    <li><a href="/tourist"  style="color:white"><span class="glyphicon glyphicon-question-sign"></span>&nbsp;<b>FAQ</b></a></li> -->
  </ul>
   <form class="navbar-form navbar-left" role="search" action="/search_item" method="POST">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search" name="search">
           <span class="input-group-btn">
             <button type="submit" class="btn btn-success" type="button">Go!</button>
          </span>
        </div>
    </form>
  <ul class="nav navbar-nav navbar-right">
      <form class="navbar-form navbar-left" action="/verify_login" method="post">
          <div class="col-md-12">
              <!-- <button class="btn btn-success" type="submit" class="btn btn-default">Login</button> -->
              <a class="btn btn-success loging" data-type="1" data-toggle="modal" data-target="#login">Login</a>
              <a class="btn btn-info loging" data-type="2" data-toggle="modal" data-target="#myModal">Sign Up</a>
          </div>
        </form>

  </ul>

</div><!--.navbar-collapse -->
</div><!--.container-fluid -->
</nav>




<div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header backs">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title backs" id="myModalLabel" style="color:#FFFF00;"><strong>User Registration</strong></h4>
      </div>
          <div class="modal-body">
              <div class="panel-body" id="user_reg">
                <?php

                  $this->load->view('templates/user_reg')
                ?>
              </div>
          </div>
      </div>
    </div>
  </div>




  <div class="modal" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="margin-top:10%">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header backs">
          <button type="button" class="close backs" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title backs" id="myModalLabel" style="color:#FFFF00;"><strong><i class="fa fa-lock fa-fw"></i>&nbsp;User Login</strong></h4>
        </div>
            <div class="modal-body">
                <div class="panel-body" id="lo">
                  <?php
                    $this->load->view('templates/user_login');
                   ?>
                </div>
            </div>
        </div>
      </div>
    </div>





















