<?php
require_once('template/header.php');
?>

  <body>

    <div class="container">

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

        <div class="col-12">
            <div class="account-detail">
                <div class="banner">
                    <div class="banner-profileimg">
                     <img src="images/defaultprofilepicture.png" alt="">
                    </div>
                 <h5 class="banner-name"><?php echo $res['first_name'];?></h5>
                </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         
                <div class="account-content">
                    <div class="row">
                        <div class="col-md-9">
                            <h5><?php echo $res['study'];?></h5>
                            <h6>in <?php echo $res['city'];?></h6>
                        </div>
                        <div class="col-md-3">
                            <a href=""><i class="fas fa-pencil-alt edit"></i></a>
                        </div>
                    </div>
                    <hr>
                    <p><?php echo $res['profile_text'];?></p>
                </div>
            </div>
        </div>

        <?php } ?>

    </div>

    <?php
    require_once('template/footer.php');
    ?>

  </body>
</html>