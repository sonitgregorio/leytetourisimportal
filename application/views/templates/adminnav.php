
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
  <a class="navbar-brand" href="/">LTP</a>

</div>

 <!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
  <?php
      $tourist = "";
      $home = "";
      $settings = "";
      $gallery = "";
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
        }
      }

   ?>
    <ul class="nav navbar-nav">
      <li class="<?php echo $home ?>" ><a href="/admin"><span class="glyphicon glyphicon-home"></span>&nbsp;<b>Home</b> <span class="sr-only">(current)</span></a></li>
      <li class = <?php echo $touristmanagement; ?>><a href="/tourist-list"><span class="glyphicon glyphicon-cog"></span>&nbsp;<b>Tourism Management</b></a></li> 
    </ul>
  <ul class="nav navbar-nav navbar-right">
      <form class="navbar-form navbar-left" action="/verify_login" method="post">
          <div class="col-md-12">
              <a class="btn btn-success" type="submit" class="btn btn-default" href="/logout">Logout&nbsp;<span class="glyphicon glyphicon-log-out"></span></a>
          </div>
      </form>
  </ul>

</div><!--.navbar-collapse -->
</div><!--.container-fluid -->
</nav>
</div>
