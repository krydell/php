<?php

if (!empty($_GET['logout'])) {
    unset($_SESSION['loggedin']); include 'index.php'; 
}

?>



<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <h2>Assignment 3 - 2: Index</h2>
        <?php
        include './header.php';
        ?>     

    </body>
</html>
