<?php
require_once('template/header.php');
?>

  <body>

    <div class="container" style="margin-top: 5rem; margin-bottom: 5rem;">
      <div class="row">
        <div class="col-3 col-lg-3">
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

         <div class="company9 col-9">

         <a class="btn btn-primary button" href="index.php?page=internship-create" style="margin-bottom: 1rem; width: 100%;">Add a new internship</a>
         
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
  
          <div class="col-12">
            <div class="card company">
              <div class="card-body row">
                <div class="col-lg-9">
                  <h5 class="company-name"><?php echo $res['company_name'];?> | <?php echo $res['position'];?></h5>
                  <p class="card-text"><i class="fas fa-map-marker-alt"></i><?php echo $res['city'];?></p>
                  <p class="card-text"><?php echo $res['profile_text'];?></p>

                     <p class="card-text"><?php echo $res['position_text'];?></p>

                     <?php // echo substr($res['position_text'], 0, 100);?>

                     <h5>Contact</h5>
                     <p class="card-text">For more information about the company <?php echo $res['company_name'];?>, you can send an email with your question (don't forget to use your full name).</p>
                     <p class="card-text">If you're interested in the internship vacancy, you can send your motivation letter and curriculum vitae to <?php echo $res['contact_name'];?> at the email: <?php echo $res['contact_email'];?></p>
                    </div>

               <div class="col-lg-3 company-img">
                 <img src="images/gradient4.png" alt="image">
                 <div class="row" style="margin: auto;">
                    <a class="btn btn-primary button" href="index.php?page=internship-update&id=" style="margin-top: 1rem;">Update</a>
                    <a class="btn btn-primary button" href="index.php?page=internship-delete&id=" style="margin-top: 1rem;">Delete</a>
                 </div>
               </div>
              </div>
            </div>
          </div>
  
          <?php } ?>

         </div>
      </div>
    </div>

    <?php
    require_once('template/footer.php');
    ?>

  </body>
</html>