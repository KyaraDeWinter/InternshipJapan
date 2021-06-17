<?php
require_once('db.php');

if(isset($_GET['page']) && !empty($_GET['page'])){ // when page is empty then..
    $pages = ['home', 'account', 'signup', 'internships', 'contact', 'account-create'];
    if(in_array($_GET['page'], $pages)){ // check if GET shows in array
        require_once($_GET['page'].'.php');
    } else { // if not, show 404 error page
        require_once('404.php'); 
    } 
}
 else { // when page is correct, show home page
    require_once('home.php');
}
require_once('template/footer.php');
?>