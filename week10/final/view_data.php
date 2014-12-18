
<?php

    require_once('database.php');
    

    // get all data
    
    $query = 'SELECT * FROM account
              ORDER BY id';
    $r = $db->query($query);

?> 
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mailing List</title>
        <link rel="stylesheet" type="text/css" href="main.css"/>
    </head>
    <body>
         <div id="content">
   <h2 align="center">Current Data</h2>
     <table>
        <tr>
            <th>ID</th> 
            <th>E-mail</th>
            <th>Phone</th>
            <th>Heard From</th>
            <th>Contact</th>
            <th>Comments</th>           
            <th></th>
            <th></th>
        </tr>  
                <?php foreach ($r as $row) : ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['heard']; ?></td>
                    <td><?php echo $row['contact']; ?></td>
                    <td><?php echo $row['comments']; ?></td>                   
                     
                </tr>
                <?php endforeach; ?>
   
        
    
    </table>   
    <br/><p><a href="index.php">Go back</a></p>   
    </div>
    </body>
</html>