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
        $error['username'] = 'Username is required.';
    }
    if($_POST['password'] == '') {
        $error['password'] = 'Password is required.';
    }
    if($_POST['role'] == '') {
        $error['role'] = 'Role is required.';
    }
    //var_dump($error);

    if(count($error) == 0) {
        $sql = "INSERT INTO user (username, password, role) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            $_POST['username'],
            $_POST['password'],
            $_POST['role']
        ]);
        header('location: index.php?page=signup');
    }
}
?>

<body>
      <div class="landing">
          <div class="landing-img">
             <div class="signup">
                  <div class="col-12 join">
                  <h1>Join the Community</h1>
                  <form action="" method="post">
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
                        <input value="<?php echo (isset($_POST['role']) ? $_POST['role'] : '' );?>" type="text" name="role" class="form-control" id="input_role" placeholder="Enter the postal code..">
                        <?php echo (isset($error['role']) ? $error['role'] : '');?>
                    </div>

                    <button type="submit" name='submit' class="btn btn-primary button">Create account</button>
                   </form>
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