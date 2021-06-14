<?php
require_once('template/header.php');
?>

<body>
      
  <div class="container contact">
    <div class="row">
      <div class="col-md-5">
       <h1 class="contact-title">Contact Us</h1>
       <h5>If you have any questions about our services, we'd like to hear from you.</h5>
      </div>
      <div class="col-md-7">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Message</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
      </div>
    </div>
  </div>
    

    <?php
    require_once('template/footer.php');
    ?>

  </body>
</html>