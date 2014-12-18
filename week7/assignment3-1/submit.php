<?php
$error = array();

if(isset($_POST['email'])){ $email = $_POST['email']; } // take all the inputted fields, if they are set
if(isset($_POST['password'])){ $pw = $_POST['password']; }


if ( empty($email) ||  empty($pw)) { // error checking for blank fields
    array_push($error, "Do not leave either field blank.");}
    
if (strlen($pw)<4){ // error checking for short length (invalid pw)
    array_push($error, "Invalid password entry. Must be more than 4 characters long.");}
    
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // error checking for e-mail
    array_push($error, "Invalid e-mail entry.");}   
    
if( !empty($error) ) // if there is an error... 
{
    include('error.php'); return;
}
 else { // if there is not an error...
    $pw = sha1($pw); // hash pw
    
    require_once('database.php'); // connect to DB...
 
    $sql = "SELECT email FROM signup WHERE email='$email'"; // check for email
    
    $result = $db->query($sql);

    $rows = $result->fetchAll();
    
    $rowCount = count($rows);   
  
    if ($rowCount == 0) { // if e-mail not found...
        array_push($error, "E-mail not found.");include('error.php'); return;
    }   

    $sql2 = "SELECT email FROM signup WHERE email='$email' AND password='$pw'"; // check log in, to confirm e-mail + password combo matches
    
    $result2 = $db->query($sql2);

    $rows2 = $result2->fetchAll();
    $rowCount2 = count($rows2);   
  
    if ($rowCount2 == 0) { // if password / email combo is wrong...
        array_push($error, "Incorrect password.");include('error.php'); return;
    } 
    
    else{ // otherwise...
        echo("<pre><font color=green>You have logged in!</font></pre>");
    }

    include('index.php');
}
?>