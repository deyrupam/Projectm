
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register an Account</div>
        <div class="card-body">
          <div class='emptyErr'></div>
          <form>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="firstName" name="firstName" class="form-control" placeholder="First name" >
                    <div id="errFirstname"></div>
                    <label for="firstName">First name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Last name" >
                    <div id='errLastname'></div>
                    <label for="lastName">Last name</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address">
                <div id='errEmail'></div>
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password">
                    <div id='errPassword'></div>
                    <label for="inputPassword">Password</label>
                  </div>
                </div>
                
              </div>
            </div>
            <input type="button" class="btn btn-primary btn-block" id="register" value="Register">
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="/login">Login Page</a>
            <a class="d-block small" href="/forgot-password">Forgot Password?</a>
          </div>
        </div>
      </div>
    