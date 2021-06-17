<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../internship/style/footer.css">
    <title>Document</title>
</head>
<body>
    <div class="footer">
        <div class="row">
            <div class="col-12 col-md-4">
                <h1>Lorem, ipsum dolor.</h1>
                <hr>
                <p>Lorem ipsum dolor sit amet.</p>
                <p>Lorem, ipsum dolor.</p>
                <p>Lorem ipsum dolor sit.</p>
            </div>
            <div class="col-12 col-md-4">
                <h1>Lorem, ipsum dolor.</h1>
                <hr>
                <p>Lorem ipsum dolor sit amet.</p>
                <p>Lorem, ipsum dolor.</p>
                <p>Lorem ipsum dolor sit.</p>
            </div>
            <div class="col-12 col-md-4">
                <h1>Contact Us</h1>
                <hr>
                <p><a href="mailto:webmaster@example.com"><i class="fas fa-envelope" style="margin-right: 1rem;"></i>Email us</a></p>
                <p><a href="https://www.linkedin.com/groups/4729663/" target="_blank"><i class="fab fa-linkedin"></i>LinkedIn</a></p>
                <p><a href="https://www.facebook.com/internshipjapan" target="_blank"><i class="fab fa-facebook-square"></i>Facebook</a></p>
            </div>
        </div>
    </div>
</body>

<button onclick="topFunction()" id="myBtn" title="Go to top" style="border-radius: 50%;"><i class="fas fa-arrow-up" style="margin: 0;"></i></button>

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
} else {
    mybutton.style.display = "none";
}
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
document.body.scrollTop = 0;
document.documentElement.scrollTop = 0;
}
</script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
</html>