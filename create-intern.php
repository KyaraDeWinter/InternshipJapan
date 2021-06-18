<?php 
require_once('template/header.php');
echo 'Account for intern is created!';
?>

<?php 
$error = [];
// var_dump($_POST);
if(isset($_POST['submit'])){
    // if(!isset($_POST['company_name']) && $_POST['company_name'] == '') {
    //     $error['company_name'] = 'Company name is required.';
    // }
    if($_POST['email'] == '') {
        $error['email'] = '<span style="color: red;">This field is required.</span>';
    }
    if($_POST['first_name'] == '') {
        $error['first_name'] = '<span style="color: red;">This field is required.</span>';
    }
    if($_POST['surname'] == '') {
        $error['surname'] = '<span style="color: red;">This field is required.</span>';
    }
    if($_POST['street_adress'] == '') {
        $error['street_adress'] = '<span style="color: red;">This field is required.</span>';
    }
    if($_POST['city'] == '') {
        $error['city'] = '<span style="color: red;">This field is required.</span>';
    }
    if($_POST['dateofbirth'] == '') {
        $error['dateofbirth'] = '<span style="color: red;">This field is required.</span>';
    }
    if($_POST['country_id'] == '') {
        $error['country_id'] = '<span style="color: red;">This field is required.</span>';
    }
    if($_POST['profile_text'] == '') {
        $error['profile_text'] = '<span style="color: red;">This field is required.</span>';
    }
    if($_POST['study'] == '') {
        $error['study'] = '<span style="color: red;">This field is required.</span>';
    }
    // if($_POST['video'] == '') {
    //     $error['video'] = 'Video is required.';
    // }
    // if($_POST['profile_image'] == '') {
    //     $error['profile_image'] = 'Profile image is required.';
    // }
    //var_dump($error);

    if(count($error) == 0) {
        $sql = "INSERT INTO user (email, first_name, surname, street_adress, city, dateofbirth, country_id, profile_text, study, video, profile_image) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            $_POST['email'],
            $_POST['first_name'],
            $_POST['surname'],
            $_POST['street_adress'],
            $_POST['city'],
            $_POST['dateofbirth'],
            $_POST['country_id'],
            $_POST['profile_text'],
            $_POST['study'],
            $_POST['video'],
            $_POST['profile_image']
        ]);
        header('location: index.php?page=admin');
    }
}
?>

<html>
    <div class="container create-title">
        <h1>Add account information</h1>
        <hr>
    </div>

<div class="container mx-auto create">
    <form action="" method="post">
    <div class="form-group">
        <label for="input_email">Email</label>
        <input value="<?php echo (isset($_POST['email']) ? $_POST['email'] : '' );?>" type="email" name="email" class="form-control" id="input_email" placeholder="Enter your email..">
        <?php echo (isset($error['email']) ? $error['email'] : '');?>
    </div>
    <div class="form-group">
        <label for="input_firstname">First name</label>
        <input value="<?php echo (isset($_POST['first_name']) ? $_POST['first_name'] : '' );?>" type="text" name="first_name" class="form-control" id="input_firstname" placeholder="Enter your first name..">
        <?php echo (isset($error['first_name']) ? $error['first_name'] : '');?>
    </div>
    <div class="form-group">
        <label for="input_surname">Sur name</label>
        <input value="<?php echo (isset($_POST['surname']) ? $_POST['surname'] : '' );?>" type="text" name="surname" class="form-control" id="input_surname" placeholder="Enter your surname..">
        <?php echo (isset($error['surname']) ? $error['surname'] : '');?>
    </div>
    <div class="form-group">
        <label for="input_streetadress">Street adress</label>
        <input value="<?php echo (isset($_POST['street_adress']) ? $_POST['street_adress'] : '' );?>" type="text" name="street_adress" class="form-control" id="input_streetadress" placeholder="Enter your street adress..">
        <?php echo (isset($error['street_adress']) ? $error['street_adress'] : '');?>
    </div>
    <div class="form-group">
        <label for="input_city">City</label>
        <input value="<?php echo (isset($_POST['city']) ? $_POST['city'] : '' );?>" type="text" name="city" class="form-control" id="input_city" placeholder="Enter the city..">
        <?php echo (isset($error['city']) ? $error['city'] : '');?>
    </div>
    <div class="form-group">
        <label for="input_dateofbirth">Date of Birth</label>
        <input value="<?php echo (isset($_POST['dateofbirth']) ? $_POST['dateofbirth'] : '' );?>" type="text" class="form-control" name="dateofbirth" id="input_dateofbirth" placeholder="Enter your date of birth.."></input>
        <?php echo (isset($error['dateofbirth']) ? $error['dateofbirth'] : '');?>
    </div>
    <div class="form-group">
        <label for="input_countryid">Country ID</label>
        <input value="<?php echo (isset($_POST['country_id']) ? $_POST['country_id'] : '' );?>" type="text" name="country_id" class="form-control" id="input_countryid" placeholder="Enter the country ID..">
        <?php echo (isset($error['country_id']) ? $error['country_id'] : '');?>
    </div>
    <div class="form-group">
        <label for="input_profiletext">Profile text</label>
        <textarea value="<?php echo (isset($_POST['profile_text']) ? $_POST['profile_text'] : '' );?>" type="text" class="form-control" name="profile_text" id="input_profiletext" placeholder="Enter the profile text.." cols="30" rows="5"></textarea>
        <?php echo (isset($error['profile_text']) ? $error['profile_text'] : '');?>
    </div>
    <div class="form-group">
        <label for="input_study">Study</label>
        <input value="<?php echo (isset($_POST['study']) ? $_POST['study'] : '' );?>" type="text" name="study" class="form-control" id="input_study" placeholder="Enter your study..">
        <?php echo (isset($error['study']) ? $error['study'] : '');?>
    </div>
    <div class="form-group">
        <label for="input_video">Video</label>
        <input value="<?php echo (isset($_POST['video']) ? $_POST['video'] : '' );?>" type="text" name="video" class="form-control" id="input_video" placeholder="Enter a video..">
        <?php echo (isset($error['video']) ? $error['video'] : '');?>
    </div>
    <div class="form-group">
        <label for="input_profileimage">Profile image</label>
        <input value="<?php echo (isset($_POST['profile_image']) ? $_POST['profile_image'] : '' );?>" type="text" name="profile_image" class="form-control" id="input_profileimage" placeholder="Enter a profile picture..">
        <?php echo (isset($error['profile_image']) ? $error['profile_image'] : '');?>
    </div>


    <button type="submit" name='submit' class="btn btn-primary button">Submit</button>
    </form>
</div>

</html>

<?php 
require_once('template/footer.php');
?>