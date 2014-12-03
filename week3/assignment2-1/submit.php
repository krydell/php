<?php

$name = $_POST['name'];
$email = $_POST['email'];
$zip = $_POST['zip'];
$phone = $_POST['phone'];



// check all inputs 
if ( empty($name) ||  empty($email) ||  empty($zip) ||  empty($phone)) {
    $error = "Can't leave any fields blank!";
    include('error.php');
} else {
    // if valid, add to userdata
    require_once('database.php');
    
    $query = "INSERT INTO userdata
                 (id, name, phone, email, zip)
              VALUES
                 ('', '$name', '$phone', '$email', '$zip');";
    $db->exec($query);

    // go back home
    include('index.php');
}
?>