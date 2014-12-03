<?php

    $id = $_POST['id'];
    require_once('database.php');
    
    // get all data
    
    $query = "SELECT * FROM userData
              WHERE id='$id'";
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
 
    <h2>Update Information</h2>


                <?php foreach ($person as $row) : ?>
           <form action="update.php" method="post"
                 id="update_user_form">    
                <label>ID:</label>
                <input type="input" name="id" value="<?php echo $row['id']; ?>" style="background-color:lightgray;" readonly/>
                <br/>
                <label>Name:</label>
                <input type="input" name="name" value="<?php echo $row['name']; ?>"  />
                <br/>
                <label>Phone:</label>
                <input type="input" name="phone" value="<?php echo $row['phone']; ?>" maxlength="10" />              
                <br/>
                <label>E-mail:</label>
                <input type="input" name="email" value="<?php echo $row['email']; ?>"  />
                <br/>
                <label>Zip:</label>
                <input type="input" name="zip" value="<?php echo $row['zip']; ?>" maxlength="5" />
                <br/>
                <?php endforeach; ?>
                 
                <label>&nbsp;</label>
                <input type="submit" value="Update" />
                <br />
            </form>    
    <br/><p><a href="currentdata.php">View current data</a></p>

    </body>
</html>
