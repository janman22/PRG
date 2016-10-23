<?php
include "functions.php";
?>

<!doctype html>
<html lang=de>
    <head>
        <meta charset=utf-8>
    </head>
    
    <?php include("Navigationsleiste.php"); ?>
    
    <body>
    <?php getSite($_GET['site']);?>    
    </body>

    <?php include("Footer.php"); ?>

</html>