
<?php

    require_once('database.php');
    

    // get all data
    
    $query = 'SELECT * FROM userData
              ORDER BY id';
    $person = $db->query($query);

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
   <h2>Current Data</h2>
     <table>
        <tr>
            <th>Row</th>
            <th>Name</th>
            <th>E-mail</th>
            <th>Phone</th>
            <th>Zip</th>
            <th></th>
            <th></th>
        </tr>  
                <?php foreach ($person as $row) : ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['zip']; ?></td>
                    <td><form action="updatepage.php" method="post"
                              id="update_form">
                        <input type="hidden" name="id"
                               value="<?php echo $row['id']; ?>" />
                        <input type="submit" value="Update" />
                    </form></td>                     
                    <td><form action="delete.php" method="post"
                              id="delete_form">
                        <input type="hidden" name="id"
                               value="<?php echo $row['id']; ?>" />
                        <input type="submit" value="Delete" />
                    </form></td>
                 
                    </form></td> 
                     
                </tr>
                <?php endforeach; ?>
   
        
    
    </table>   
    <br/><p><a href="index.php">Go back</a></p>   
    </body>
</html>
