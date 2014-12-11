<a href="index.php">Home</a> 

<?php
session_start();
if ( !empty($_SEESION['loggedin']) ) {
   echo '<a href="?logout=true">logout</a>';
            if ( !isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true ) {
           header('Location: admin.php'); 
        }
} else {
    echo '<a href="login_form.php">Log-in</a> <a href="signup_form.php">Sign-up</a>';
}


?>