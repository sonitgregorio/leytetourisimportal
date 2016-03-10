
<nav class="navbar navbar-default navbar-fixed-top navbar-inverse grads" style="padding:0;">
      <div class="container-fluid backs" style="padding:2;BORDER-BOTTOM: #522B04 2px solid;">
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
      $settings = "";
      $gallery = "";
      $manage_tourist = "";
      if ($param) {
        if ($param == "settings") {
          $settings = "active";

        }elseif ($param == "home") {
            $home = "active";
        }
        elseif ($param == "gallery") {
            $gallery = "active";
        }
        elseif ($param == "manage_tourist")
        {
            $manage_tourist = "active";
        }
      }

   ?>
  <ul class="nav navbar-nav">
    <li class="<?php echo $home ?>" ><a href="/home" style="color:white"><span class="glyphicon glyphicon-home"></span>&nbsp;<b>Home</b> <span class="sr-only">(current)</span></a></li>
    <li class = "<?php echo $settings; ?>"><a href="/settings" style="color:white"><span class="glyphicon glyphicon-cog"></span>&nbsp;<b>Settings</b></a></li>
    <li class="<?php echo $gallery ?>"><a href="/gallery" style="color:white"><span class="glyphicon glyphicon-picture"></span>&nbsp;<b>Photo Gallery</b></a></li>
    <li class="<?php echo $manage_tourist ?>"><a href="/manage_tourist" style="color:white"><span class="glyphicon glyphicon-picture"></span>&nbsp;<b>Manage Tourist Spot</b></a></li>
      <li class = "<?= $param == 'faq' ? 'active' : ''; ?>"><a href="/faq" style="color:white"><span class="glyphicon glyphicon-question-sign"></span>&nbsp;<b>FAQ</b></a></li>
    

  </ul>
  <ul class="nav navbar-nav navbar-right">
      <form class="navbar-form navbar-left" action="/verify_login" method="post">
          <div class="col-md-12">
              <a class="btn btn-success loging" data-type="1" data-toggle="modal" data-target="#login"><?php echo $this->session->userdata('firstname') ?></a> 
              
              <a class="btn btn-success" type="submit" class="btn btn-default" href="/logout">Logout&nbsp;<span class="glyphicon glyphicon-log-out"></span></a>
          </div>
        </form>
  </ul>

</div><!--.navbar-collapse -->
</div><!--.container-fluid -->
</nav>
</div>
