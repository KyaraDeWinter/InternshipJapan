<?php
require_once('db.php');
if(isset($_GET['page']) && !empty($_GET['page'])){ // when page is empty then..
    $pages = ['home', 'account', 'signup','internships', 'contact'];
    if(in_array($_GET['page'], $pages)){ // check if GET shows in array
        include_once($_GET['page'].'.php');
    } else { // if not, show 404 error page
        include_once('404.php'); 
    } 
}
 else { // when page is correct, show home page
    include_once('home.php');
}
include_once('template/footer.php');
?>