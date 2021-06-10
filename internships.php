<?php
require_once('template/header.php');
?>

  <body>

    <div class="container" style="margin-top: 5rem; margin-bottom: 5rem;">
      <div class="row">
        <div class="col-12 col-lg-3">
          <div class="card company-search">
            <div class="card-body">
              <h5 class="card-title">Search for Internships</h5>
              <form action="">
                <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
                  <div class="input-group">
                    <input type="search" placeholder="Search.." aria-describedby="button-addon1" class="form-control border-0 bg-light">
                    <div class="input-group-append">
                      <button id="button-addon1" type="submit" class="btn btn-link text-primary"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </form>
              
              <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
                <div class="dropdown">
                  <button class="btn btn-light" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">Order by..<i class="fas fa-angle-down" style="margin-left: 1rem;"></i></button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Alphabetically, A-Z</a></li>
                    <li><a class="dropdown-item" href="#">Alphabetically, Z-A</a></li>
                    <li><a class="dropdown-item" href="#">Date, new to old</a></li>
                    <li><a class="dropdown-item" href="#">Date, old to new</a></li>
                  </ul>
              </div>
              </div>
            </div>
          </div>
         </div>

         <?php
          $sql = "SELECT * FROM company";
          $stmt = $conn->prepare($sql);
          $stmt->execute();
          $result = $stmt->fetchAll();
            // var_dump($result);
          ?>

          <?php
          foreach($result as $res) { 
            // var_dump($res);
          ?>

        <div class="col-12 col-lg-9">
          <div class="card company">
            <div class="card-body">
              <h5 class="card-title"><?php echo $res['company_name'];?></h5>
              <p class="card-text"><?php echo $res['profile_text'];?></p>
              <a href="#" class="btn btn-primary button"><i class="fas fa-angle-down" style="margin-right: 1rem;"></i>Read more</a>
            </div>
          </div>
        </div>

        <?php } ?>

      </div>
    </div>

    <?php
    require_once('template/footer.php');
    ?>

  </body>
</html>