<?php 
require_once('template/header.php');
?>

<?php 
if(!isset($_GET['id']))

$error = [];
// var_dump($_POST);
if(isset($_POST['submit'])){
    // if(!isset($_POST['company_name']) && $_POST['company_name'] == '') {
    //     $error['company_name'] = 'Company name is required.';
    // }
    if($_POST['company_name'] == '') {
        $error['company_name'] = 'Company name is required.';
    }
    if($_POST['street_adress'] == '') {
        $error['street_adress'] = 'Street adress is required.';
    }
    if($_POST['postal_code'] == '') {
        $error['postal_code'] = 'Postal code is required.';
    }
    if($_POST['city'] == '') {
        $error['city'] = 'City is required.';
    }
    if($_POST['country_id'] == '') {
        $error['country_id'] = 'Country ID is required.';
    }
    if($_POST['profile_text'] == '') {
        $error['profile_text'] = 'Profile text is required.';
    }
    if($_POST['position'] == '') {
        $error['position'] = 'Position is required.';
    }
    if($_POST['position_text'] == '') {
        $error['position_text'] = 'Position text is required.';
    }
    if($_POST['contact_name'] == '') {
        $error['contact_name'] = 'Name of contact person is required.';
    }
    if($_POST['contact_email'] == '') {
        $error['contact_email'] = 'Email of contact person is required.';
    }
    if($_POST['website'] == '') {
        $error['website'] = 'Website is required.';
    }
    //var_dump($error);

    if(count($error) == 0) {
        $sql = "INSERT INTO company (company_name, street_adress, postal_code, city, country_id, profile_text, position, position_text, contact_name, contact_email, website) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            $_POST['company_name'],
            $_POST['street_adress'],
            $_POST['postal_code'],
            $_POST['city'],
            $_POST['country_id'],
            $_POST['profile_text'],
            $_POST['position'],
            $_POST['position_text'],
            $_POST['contact_name'],
            $_POST['contact_email'],
            $_POST['website']
        ]);
        header('location: index.php?page=admin');
    }
}
?>

<html>
    <div class="container create-title">
        <h1>Create a new internship</h1>
        <hr>
    </div>

<div class="container mx-auto create">
    <form action="" method="post">
    <div class="form-group">
        <label for="input_companyname">Company name</label>
        <input value="<?php echo (isset($_POST['company_name']) ? $_POST['company_name'] : '' );?>" type="text" name="company_name" class="form-control" id="input_companyname" placeholder="Enter the name of the company..">
        <?php echo (isset($error['companyname']) ? $error['companyname'] : '');?>
    </div>
    <div class="form-group">
        <label for="input_streetadress">Street adress</label>
        <input value="<?php echo (isset($_POST['street_adress']) ? $_POST['street_adress'] : '' );?>" type="text" name="street_adress" class="form-control" id="input_streetadress" placeholder="Enter the street adress..">
        <?php echo (isset($error['street_adress']) ? $error['street_adress'] : '');?>
    </div>
    <div class="form-group">
        <label for="input_postalcode">Postal code</label>
        <input value="<?php echo (isset($_POST['postal_code']) ? $_POST['postal_code'] : '' );?>" type="text" name="postal_code" class="form-control" id="input_postalcode" placeholder="Enter the postal code..">
        <?php echo (isset($error['postal_code']) ? $error['postal_code'] : '');?>
    </div>
    <div class="form-group">
        <label for="input_city">City</label>
        <input value="<?php echo (isset($_POST['city']) ? $_POST['city'] : '' );?>" type="text" name="city" class="form-control" id="input_city" placeholder="Enter the city..">
        <?php echo (isset($error['city']) ? $error['city'] : '');?>
    </div>
    <div class="form-group">
        <label for="input_countryid">Country ID</label>
        <input value="<?php echo (isset($_POST['country_id']) ? $_POST['country_id'] : '' );?>" type="text" name="country_id" class="form-control" id="input_countryid" placeholder="Enter the country ID..">
        <?php echo (isset($error['country_id']) ? $error['country_id'] : '');?>
    </div>
    <div class="form-group">
        <label for="input_profiletext">Profile text</label>
        <textarea value="<?php echo (isset($_POST['profile_text']) ? $_POST['profile_text'] : '' );?>" class="form-control" name="profile_text" id="input_profiletext" placeholder="Enter the profile text.." cols="30" rows="5"></textarea>
        <?php echo (isset($error['profile_text']) ? $error['profile_text'] : '');?>
    </div>
    <div class="form-group">
        <label for="input_position">Position</label>
        <input value="<?php echo (isset($_POST['position']) ? $_POST['position'] : '' );?>" type="text" name="position" class="form-control" id="input_position" placeholder="Enter the position..">
        <?php echo (isset($error['position']) ? $error['position'] : '');?>
    </div>
    <div class="form-group">
        <label for="input_positiontext">Position text</label>
        <textarea value="<?php echo (isset($_POST['position_text']) ? $_POST['position_text'] : '' );?>" class="form-control" name="position_text" id="input_profiletext" placeholder="Enter the position text.." cols="30" rows="5"></textarea>
        <?php echo (isset($error['profilposition_texte_text']) ? $error['position_text'] : '');?>
    </div>
    <div class="form-group">
        <label for="input_contactname">Contact name</label>
        <input value="<?php echo (isset($_POST['contact_name']) ? $_POST['contact_name'] : '' );?>" type="text" name="contact_name" class="form-control" id="input_contactname" placeholder="Enter the name of the contact person..">
        <?php echo (isset($error['contact_name']) ? $error['contact_name'] : '');?>
    </div>
    <div class="form-group">
        <label for="input_contactemail">Contact email</label>
        <input value="<?php echo (isset($_POST['contact_email']) ? $_POST['contact_email'] : '' );?>" type="text" name="contact_email" class="form-control" id="input_contactemail" placeholder="Enter the email of the contact person..">
        <?php echo (isset($error['contact_email']) ? $error['contact_email'] : '');?>
    </div>
    <div class="form-group">
        <label for="input_website">Website</label>
        <input value="<?php echo (isset($_POST['website']) ? $_POST['website'] : '' );?>" type="text" name="website" class="form-control" id="input_website" placeholder="Enter the link of the website..">
        <?php echo (isset($error['website']) ? $error['website'] : '');?>
    </div>
    <button type="submit" name='submit' class="btn btn-primary button">Submit</button>
    </form>
</div>

</html>

<?php 
require_once('template/footer.php');
?>