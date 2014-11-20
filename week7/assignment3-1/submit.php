<?php

$error = array();

if(isset($_POST['email'])){ $email = $_POST['email']; } // take all the inputted fields
if(isset($_POST['password'])){ $pw = $_POST['password']; }

if ( empty($email) ||  empty($pw)) { // error checking
    array_push($error, "Do not leave either field blank.");}
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
    
    $query1 = mysql_query("SELECT email FROM signup WHERE email='$email'"); // check for e-mail
    
    if(!$query1){array_push($error, "E-mail not found.");include('error.php'); return;}
    
    $query2 = mysql_query("SELECT * FROM signup WHERE email='$email' AND WHERE password='$pw.'"); // check for e-mail
    
    if(!$query2){array_push($error, "Incorrect e-mail / password combination.");include('error.php'); return;}
    
    else{echo "Logged in.";} 
       
    // go back home
    include('index.php');
}
?>