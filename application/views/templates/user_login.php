<form class="form login_submit" action="/verify_login" method="post" onsubmit="return false">
    <?php
        echo $this->session->flashdata('message');
     ?>
    <div class="col-md-12">
        <div class="form-group">
          <label for="">Username</label>
          <input type="text" class="form-control" name="username" placeholder="Username">
        </div>
        <div class="form-group">
          <label for="">Password</label>
          <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <button class="btn btn-success pull-right" type="submit" class="btn btn-default">Login</button>
    </div>
  </form>
