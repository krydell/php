<?php

$error = array();
if(isset($_POST['email'])){ $email = $_POST['email']; } // take all the inputted fields
if(isset($_POST['password'])){ $pw = $_POST['password']; }
if ( empty($email) ||  empty($pw)) { // error checking
    array_push($error, "Do not leave fields blank.");}
if (strlen($pw)<4){
    array_push($error, "Invalid password entry.");}
if (!strpos($email, '@')||!strpos($email, '.')){
    array_push($error, "Invalid e-mail entry.");}   
if( !empty($error) )
{
    include('error.php'); return;
}    
 else {
    $pw = sha1($pw); // hash pw
    //
    // if valid, add to userdata
    
    require_once('database.php'); // check db
    
    $query = "INSERT INTO signup
                 (id, email, password)
              VALUES
                 ('', '$email','$pw');"; // add row
    $db->exec($query);
    echo '<pre><font color=blue>Signup completed. Added to DB.</pre></font>';
    // go back home
    include('index.php');
}
?>