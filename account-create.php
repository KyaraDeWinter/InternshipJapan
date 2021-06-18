<?php
require_once('template/header.php');
?>

<?php 
$error = [];
// var_dump($_POST);
if(isset($_POST['submit'])){
    // if(!isset($_POST['username']) && $_POST['username'] == '') {
    //     $error['username'] = 'Username is required.';
    // }
    if($_POST['username'] == '') {
        $error['username'] = '<span style="color: red;">Username is required.</span>';
    }
    if($_POST['password'] == '') {
        $error['password'] = 'Password is required.';
    }
    if($_POST['role'] == '') {
        $error['role'] = 'Role is required.';
    }
    //var_dump($error);

    if(count($error) == 0) {
        $hashed_pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

        /* Create a new user ID + set hashed pass into field */
        $stmt = $conn->prepare("INSERT INTO user(username, password, role) VALUES (:username,:password, :role)");
        $stmt->bindParam(":username", $_POST['username']);
        $stmt->bindParam(":password", $hashed_pass);
        $stmt->bindParam(":role", $_POST['role']);
        $stmt->execute();
    }

    if($_POST['role'] == '1') {
        header('location: index.php?page=intern-create');
    }
    if($_POST['role'] == '2') {
        header('location: index.php?page=company-create');
    }
    if($_POST['role'] == '3') {
        header('location: index.php?page=education-create');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../internship/style/signup.css">
    <title>Internship Japan</title>
</head>
<body>
    <div class="landing">
        <div class="landing-img">
           <div class="signup">
                <div class="col-12 join">
                <h1>Join the Community</h1>
                <form name="form" action="" method="post">
                  <div class="form-group">
                      <label for="input_username">Username</label>
                      <input value="<?php echo (isset($_POST['username']) ? $_POST['username'] : '' );?>" type="text" name="username" class="form-control" id="input_username" placeholder="Enter your username..">
                      <?php echo (isset($error['username']) ? $error['username'] : '');?>
                  </div>
                  <div class="form-group">
                      <label for="input_password">Password</label>
                      <input value="<?php echo (isset($_POST['password']) ? $_POST['password'] : '' );?>" type="password" name="password" class="form-control" id="input_password" placeholder="Enter your password..">
                      <?php echo (isset($error['password']) ? $error['password'] : '');?>
                  </div>
                  <div class="form-group">
                      <label for="input_role">Role</label>
                      <input value="<?php echo (isset($_POST['role']) ? $_POST['role'] : '' );?>" type="text" name="role" class="form-control" id="input_role" placeholder="Enter role ID..">
                      <?php echo (isset($error['role']) ? $error['role'] : '');?>
                  </div>
    
                  <button type="submit" name='submit' class="btn btn-primary button">Create account</button>
                 </form>
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