<?php
// Get IDs
$id = $_POST['id'];

// Delete the product from the database
require_once('database.php');
$query = "DELETE FROM userdata
          WHERE id = '$id'";
$db->exec($query);
echo '<pre><font color=red>user ', $id,' was deleted.</pre></font>';
// display the Product List page
include('currentdata.php');
?>