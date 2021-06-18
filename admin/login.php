<?php
session_start();
require_once('db.php');
require_once('template/header.php');

if(isset($_POST['submit'])){
  // if empty password or username then output...
  if(empty($_POST['username'])){
    $name_error = '<span style="color: red;">This field is required.</span>';
   }
   if(empty($_POST['password'])){
    $password_error = '<span style="color: red;">This field is required.</span>';
   }
   // else check if userInput equals with the data from in the tabel users.
   else {
    $sql = "SELECT * FROM user WHERE username = ?";
    $stmt = $conn->prepare($sql); 
    $stmt->execute([$_POST['username']]);
    $result = $stmt->fetchAll();
    $hash = $result[0]['password'];
    if (password_verify($_POST['password'], $hash)) {

        $_SESSION['user_id'] = $result[0]['id'];
        header('location: index.php?page=internship-admin');
    } else {
      $name_error = '<span style="Color: red;">Username and/or password is incorrect!</span>';
      header('location: login.php');
    }
   }
  }
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
                          <form action="" method="post">
                              <div class="form-group">
                                  <label for="username">Username</label>
                                  <input type="text" class="form-control" name="username" placeholder="Enter username..">
                                  <?php if(isset($error_name)){ ?>
                                    <p><?php foreach($error_name as $value){
                                    echo $value, '<br>';
                                    } ?></p>
                                <?php } ?>
                              </div>
                              <div class="form-group">
                                  <label for="password">Password</label>
                                  <input type="password" class="form-control" name="password" placeholder="Enten password..">
                                  <?php if(isset($error_password)){ ?>
                                   <p><?php foreach($error_password as $value){
                                    echo $value, '<br>';
                                  } ?></p>
                                <?php } ?>
                              </div>
                              <input value="submit" name="submit" type="submit" class="btn btn-primary button">Login</input>
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