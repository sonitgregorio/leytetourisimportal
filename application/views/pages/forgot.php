<div class=" col-md-offset-4 col-md-4 centerdiv">
    <div class="panel panel-success logins">
        <div class="panel-heading p-head"><h3 style="color:#df3a01;"><strong>Recover Password</strong></h3></div>
        <div class="panel-body">
            <form action="/login/submitforgot" method="post">
                <?php
                  echo $this->session->flashdata('message');
                 ?>
                <label for="touristspotname"><h5>E-mail Address</h5></label>
                <input type="text" class="form-control input-background" name="email" placeholder="example@gmail.com">
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
