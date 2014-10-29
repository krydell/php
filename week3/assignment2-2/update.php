<?php

$id = $_POST['id']; // get values from form
$name = $_POST['name'];
$email = $_POST['email'];
$zip = $_POST['zip'];
$phone = $_POST['phone'];


// check all inputs 
if ( empty($name) ||  empty($email) ||  empty($zip) ||  empty($phone)) { // basic error checking
    $error = "Can't leave any fields blank!";
    include('error.php');
    
}
if ($phone.length<10)
{$error = "Phone must be 10 digits long.";
include('error.php');}
if ($zip.length<10)
{$error = "Zip code must be 5 digits long.";
include('error.php');}
else {
    // if valid, add to userdata
    require_once('database.php');
    
    $query = "UPDATE userData SET name='$name', phone='$phone', email='$email', zip='$zip' WHERE id='$id';";
    $db->exec($query); // update the row
    
    echo '<pre><font color=green>user ', $id,' was updated.</pre></font>';
    // go back home
    include('index.php');
}
?>