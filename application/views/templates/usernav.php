
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
    <li class="<?php echo $home ?>" ><a href="/home"><b>Home</b> <span class="sr-only">(current)</span></a></li>
    <li class = <?php echo $tourist; ?>><a href="/tourist-list"><b>Settings</b></a></li>
    <li><a href="/tourist"><b>Photo Gallery</b></a></li>
    <li><a href="/tourist"><b>Activities</b></a></li>


  </ul>
  <ul class="nav navbar-nav navbar-right">
      <form class="navbar-form navbar-left" action="/verify_login" method="post">
          <div class="col-md-12">
              <button class="btn btn-success" type="submit" class="btn btn-default">Logout</button>
          </div>
        </form>
  </ul>

</div><!--.navbar-collapse -->
</div><!--.container-fluid -->
</nav>
</div>
