<?php

    
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
 
    <h2>Submit Information</h2>
    
           <form action="submit.php" method="post"
                  id="add_category_form">

                <label>Name:</label>
                <input type="input" name="name" />
                <br/>
                <label>Phone:</label>
                <input type="input" name="phone" />              
                <br/>
                <label>E-mail:</label>
                <input type="input" name="email" />
                <br/>
                <label>Zip:</label>
                <input type="input" name="zip" />
                <br/>
                 
                <label>&nbsp;</label>
                <input type="submit" value="Add" />
                <br />
            </form>    
    <br/><p><a href="currentdata.php">View current data</a></p>

    </body>
</html>
