<?php
require_once('db.php');
require_once('template/header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../internship/style/home.css">
    <title>Internship Japan</title>
</head>

<header>
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
</header>

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
                                        <h5>Company X</h5>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt maxime enim libero vitae cupiditate consequuntur, sed obcaecati ratione pariatur quas deleniti distinctio, sequi molestias ipsum ad aut hic, facere qui eum fugiat et facilis reiciendis placeat possimus. Nulla, consequuntur iusto.</p>
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
                                <h5 class="card-title">Lorem, ipsum dolor.</h5>
                                <hr>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem eius impedit, quis omnis nemo blanditiis harum, nesciunt, distinctio repellat officiis nostrum explicabo nam fugit iste? Repellat consequuntur sapiente, sint, quos tenetur facere quam aut iure adipisci, deleniti est eos. Nobis nam error molestias? Quaerat facilis, voluptates neque minima consequatur velit!</p>
                                <a href="#" class="btn btn-primary button">button</a>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Lorem, ipsum dolor.</h5>
                                <hr>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta facere officia pariatur velit non? Sit sunt ipsam cum quod. Vel, asperiores laboriosam. Suscipit numquam necessitatibus ratione laboriosam dolores excepturi dolorum harum dolore vero exercitationem? Ipsum illum blanditiis deleniti necessitatibus. Deserunt maiores commodi magnam minus id, consectetur corrupti magni porro nesciunt, atque aperiam laudantium sed itaque deleniti placeat ab dolore modi?</p>
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
                            <h5>Account name</h5>
                            <hr>
                            <p class="card-text">Description: Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est, libero!</p>
                            <a href="index.php?page=account" class="btn btn-primary button">View Account</a>
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