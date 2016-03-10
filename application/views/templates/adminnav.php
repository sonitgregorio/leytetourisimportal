
<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" style="padding:0;">
      <div class="container-fluid backs" style="padding:2;BORDER-BOTTOM: #522B04 2px solid;">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
  </button>
  <a class="navbar-brand" href="/" style="color:white">LTP</a>

</div>

 <!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
  <?php
      $tourist = "";
      $home = "";
      $settings = "";
      $gallery = "";
      $faq = "";
      $prom = "";
      $touristmanagement = "";
      if ($param) {
        if ($param == "settings") {
          $settings = "active";
        }
        elseif ($param == "home") {
            $home = "active";
        }
        elseif ($param == "gallery") {
            $gallery = "active";
        }
        elseif ($param == "touristmanagement") {
            $touristmanagement = "active";
        }elseif ($faq == "touristmanagement") {
            $faq = "active";
        }
        elseif ($param == "prom") {
            $prom = "active";
        }
      }

   ?>
   <?php 
    $x = $this->db->query('SELECT * FROM tbl_announcement WHERE status = 0')->num_rows();
    $y = $this->db->query('SELECT * FROM tbl_feedback WHERE stats = 0')->num_rows();
   ?>
    <ul class="nav navbar-nav">
      <li class="<?php echo $home ?>" ><a href="/home" style="color:white"><span class="glyphicon glyphicon-home"></span>&nbsp;<b>Home</b> <span class="sr-only">(current)</span></a></li>
      <li class = "<?php echo $touristmanagement; ?>"><a href="/tourist-list" style="color:white"><span class="glyphicon glyphicon-cog"></span>&nbsp;<b>Tourism Management</b></a></li> 
      <li class = "<?php echo $param == 'request' ? 'active' : ''; ?>"><a href="/posting_request" style="color:white"><span class="glyphicon glyphicon-cog"></span>&nbsp;<b>Posting Request</b> <span class="badge"><?= $x ?></span></a></li> 
      <li class = "<?php echo $faq; ?>"><a href="/faq" style="color:white"><span class="glyphicon glyphicon-question-sign"></span>&nbsp;<b>FAQ</b>&nbsp;&nbsp;


      <?php if ($this->session->userdata('usertype') == 4): ?>
            <span class="badge"><?= $y ?></span>
          <?php endif ?></a></li>
      <li class = "<?php echo $prom; ?>"><a href="/promotions" style="color:white"><span class="glyphicon glyphicon-question-sign"></span>&nbsp;<b>Promotions</b>&nbsp;&nbsp;

      
      <li class = "<?php echo $param == "logs" ? 'active' : ''; ?>"><a href="/user_logs" style="color:white"><span class="glyphicon glyphicon-cog"></span>&nbsp;<b>User Logs</b></a></li> 
    
    </ul>
  <ul class="nav navbar-nav navbar-right">
      <form class="navbar-form navbar-left" action="/verify_login" method="post">
          <div class="col-md-12">
              <a class="btn btn-info loging" data-type="2" data-toggle="modal" data-target="#myModal">Sign Up</a>

              <a class="btn btn-success" type="submit" class="btn btn-default" href="/logout">Logout&nbsp;<span class="glyphicon glyphicon-log-out"></span></a>
          </div>

      </form>
  </ul>

</div><!--.navbar-collapse -->
</div><!--.container-fluid -->
</nav>
</div>

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
