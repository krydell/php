<?php

$heard = $_POST['heard']; // take all the inputted fields
$email = $_POST['email'];
$contact = $_POST['contact'];
$comments = $_POST['comments'];    
$phone = $_POST['phone'];   

    ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
         <title>Mailing List Results</title>
        <link rel="stylesheet" type="text/css" href="main.css"/>
    </head>
    <body>
       <div id="content">
            <h1>Account Information</h1>

            <label>Email Address:</label>
            <span><?php echo $email; ?></span><br />

            <label>Phone:</label>
            <span><?php echo $phone; ?></span><br />                 
            
            <label>Heard From:</label>
            <span><?php echo $heard; ?></span><br />

            <label>Contact Via:</label>
            <span><?php echo $contact; ?></span><br /><br />

            <label>Comments:</label>
            <span><?php echo $comments; ?></span><br /><br/>
            <span><a href="index.php">Back.</a></span>

       
            
        </div>
    </body>
</html>