<a href="index.php">Home</a> 

<?php

session_start();


if ( !empty($_SESSION['loggedin']) ) {
   echo '<a href="index.php?logout=true">Logout</a>';
        }
else {
    echo '<a href="login_form.php">Log-in</a> <a href="signup_form.php">Sign-up</a>';
}

?>