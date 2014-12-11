<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <h1> Admin Page </h1>
        
        <a href="admin.php?logout=true">Logout</a>
        
        <?php
        // put your code here
        session_start();
        
        if ( !isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true ) {
           //header('Location: admin.php'); 
        }
        
        
            if ( !empty($_GET) ) {
                if ( $_GET['logout'] === 'true' ) {
                    $_SESSION['loggedin'] = false; 
                    header('Location: index.php');
                }
            }
        
        ?>
    </body>
</html>