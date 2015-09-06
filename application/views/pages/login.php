  <div class=" col-md-offset-4 col-md-4 centerdiv">
      <div class="panel panel-success logins">
        <div class="panel-heading p-head"><h3 style="color:#df3a01;"><strong>User Login</strong></h3></div>
          <div class="panel-body">
            <form action="/verify_login" method="post">

                    <label for="touristspotname"><h4>Username</h4></label>
                  <input type="text" class="form-control input-background" name="username" placeholder="Username">
                    <label for="touristspotname"><h4>Password</h4></label>
                  <input type="password" class="form-control input-background" name="password" placeholder="Password">
                  <br />
                  <div class="pull-right">
                    <a href="/forgot">Forgot Password?</a>
                      <button type="submit" class="btn btn-primary" name="button">Login</button>
                      <a href="/signup" class="btn btn-info">Sign Up</a>
                  </div>
                  <br />
                  <br />
                  <br />
              </form>
          </div>
      </div>
  </div>
