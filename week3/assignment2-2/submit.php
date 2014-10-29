<?php

$name = $_POST['name']; // take all the inputted fields
$email = $_POST['email'];
$zip = $_POST['zip'];
$phone = $_POST['phone'];



// check all inputs 
if ( empty($name) ||  empty($email) ||  empty($zip) ||  empty($phone)) { // error checking
    $error = "Can't leave any fields blank!";
    include('error.php');}
if ($phone.length<10)
{$error = "Phone must be 10 digits long.";
include('error.php');}
if ($zip.length<10)
{$error = "Zip code must be 5 digits long.";
include('error.php');}
 else {
    // if valid, add to userdata
    require_once('database.php'); // check db
    
    $query = "INSERT INTO userdata
                 (id, name, phone, email, zip)
              VALUES
                 ('', '$name', '$phone', '$email', '$zip');"; // add row
    $db->exec($query);
    echo '<pre><font color=blue>new user has been added.</pre></font>';
    // go back home
    include('index.php');
}
?>