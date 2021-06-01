<?php
require_once('template/header.php');
?>

<body>
      <div class="landing">
          <div class="landing-img">
             <div class="signup">
              <div class="row">
                  <div class="col-12 col-sm-4 login">
                      <h1>Login</h1>
                      <div class="login-form">
                          <form>
                              <div class="form-group">
                                  <label for="input_email">Email address</label>
                                  <input type="email" class="form-control" id="input_email" placeholder="Enter email">
                              </div>
                              <div class="form-group">
                                  <label for="input_password">Password</label>
                                  <input type="password" class="form-control" id="input_password" placeholder="Password">
                              </div>
                              <button type="submit" class="btn btn-primary">Login</button>
                          </form>
                      </div>
                  </div>
                  <div class="col-12 col-sm-8 join">
                      <h1>Join the Community</h1>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore, qui! Ratione, possimus officia cumque, pariatur repellat minima voluptatum sequi vero a accusantium odit hic dicta fugit, natus voluptatem consequatur maiores.</p>
                      <button type="button" class="btn btn-primary">Create Your Account</button>
                  </div>
              </div>
             </div>
          </div>
      </div>

         <?php
        require_once('template/footer.php');
        ?>

  </body>
</html>