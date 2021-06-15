<?php 
require_once('template/header.php');
?>
<html>
<div class="error-page">
    <div class="error">
        <h1><b>404 ERROR</b> | The page you requested was not found</h1>
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

</html>

<?php 
require_once('template/footer.php');
?>