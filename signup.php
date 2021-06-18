<?php
session_start();
require_once('template/header.php');
require_once('db.php');

if(isset($_POST['submit'])) {
    if(empty($_POST['username'])) {
        $error_name['username'] = '<span style="color: red;">Username is required.</span>';
    }
    if(empty($_POST['password'])) {
        $error_password['password'] = '<span style="color: red;">Password is required.</span>';
    } else {

    $stmt = $conn->prepare("SELECT password FROM user WHERE username LIKE :username"); // ophalen password van username
    $stmt->bindParam(":username", $_POST['username']); // bind username aan post van username
    $stmt->execute();

    $dbhash = $stmt->fetchColumn(); // haalt password op

    if(password_verify($_POST['password'], $dbhash)) {
        echo 'equals';
    } else {
        echo 'false';
    }
        
    // $username = strip_tags(trim($_POST['username']));
    // password_verify($_POST['password']);
    // // $password = strip_tags(trim($_POST['password']));
    // $query = $conn->prepare("SELECT * FROM user WHERE username = ? AND password = ?");
    // $query->execute(array($username, $hash));
    // $control = $query->fetch(PDO::FETCH_OBJ);
    // if($control>0) {
    //   $_SESSION['username']=$username;
    //   header('location: index.php?page=account');
    // }
    // echo "<center><p>Username and/or password is incorrect!</p></center>";
    // echo $hash;
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
            <div class="row">
                <div class="col-12 col-sm-4 login">
                    <h1>Signin</h1>
                    <div class="login-form">
                         <form action="" method="post">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" placeholder="Enter your username..">
                                <?php if(isset($error_name)){ ?>
                                <p><?php foreach($error_name as $value){
                                    echo $value, '<br>';
                                } ?></p>
                                <?php } ?>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter your password..">
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
                <div class="col-12 col-sm-8 join">
                    <h1>Join the Community</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore, qui! Ratione, possimus officia cumque, pariatur repellat minima voluptatum sequi vero a accusantium odit hic dicta fugit, natus voluptatem consequatur maiores.</p>
                      <a href="index.php?page=account-create"><button type="button" class="btn btn-primary button">Create Your Account</button></a>
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