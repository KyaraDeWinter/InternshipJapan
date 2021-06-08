<?php
require_once('db.php');
require_once('template/header.php');
?>

    <div class="landing">
        <div class="landing-img">
            <div class="landing-content">
                <h1>Internship Japan</h1>
                <div class="landing-search">
                    <form action="">
                        <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
                            <div class="input-group">
                                <input type="search" placeholder="Search for companies, internships.." aria-describedby="button-addon1" class="form-control border-0 bg-light">
                                <div class="input-group-append">
                                 <button id="button-addon1" type="submit" class="btn btn-link text-primary"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

  <body>

  <div class="container uneven-grid">
    <div class="row">
        <div class="col-12 col-md-10">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div id="carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img class="d-block w-100" src="images/gradient1.png" alt="First slide">
                                <div class="carousel-caption">
                                    <h5>Company Name</h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat exercitationem quo deserunt? Voluptatem ipsam, quis distinctio laudantium labore deleniti expedita.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="images/gradient2.png" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="images/gradient3.png" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        </div>
                    </div>
                
                <div class="col-12 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">2 Lorem, ipsum dolor.</h5>
                            <hr>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est, libero!</p>
                            <a href="#" class="btn btn-primary button">button</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">3 Lorem, ipsum dolor.</h5>
                            <hr>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est, libero!</p>
                            <a href="#" class="btn btn-primary button">button</a>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
        <div class="col-12 col-md-2">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <div class="profilepicture">
                            <a href="account.php"><img src="images/defaultprofilepicture.png" alt="profilepicture"></a>
                        </div>
                        <h5>Full Name</h5>
                        <hr>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est, libero!</p>
                        <a href="account.php" class="btn btn-primary button">View my Account</a>
                    </div>
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