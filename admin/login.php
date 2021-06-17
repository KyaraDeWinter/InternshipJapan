<?php
require_once('template/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/signup.css">
    <title>Internship Japan | Admin</title>
</head>
<body>
<div class="landing">
          <div class="landing-img">
             <div class="signup">
              <div class="row">
                  <div class="col-12 login">
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
              </div>
             </div>
          </div>
      </div>
</body>
<?php
require_once('template/footer.php');
?>
</html>