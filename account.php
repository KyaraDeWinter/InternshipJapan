<?php
require_once('template/header.php');
?>

  <body>

    <div class="container">

        <div class="col-12">
            <?php
            $sql = "SELECT * FROM intern";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
                // var_dump($result);
            ?>

            <?php
            foreach($result as $res) { 
                // var_dump($res);
            ?>
            <div class="banner">
                <div class="banner-profileimg">
                <img src="images/defaultprofilepicture.png" alt="">
                </div>
            <h5 class="banner-name"><?php echo $res['first_name'];?></h5>
            </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
            <div class="account-content">
                <h5><?php echo $res['study'];?></h5>
                <h6>in <?php echo $res['city'];?></h6>
                <hr>
            </div>

            <?php } ?>

        </div>
    </div>

    <?php
    require_once('template/footer.php');
    ?>

  </body>
</html>