<?php
$error = array();

if(isset($_POST['email1'])){ $email = $_POST['email1']; } // take all the inputted fields
if(isset($_POST['password1'])){ $pw = $_POST['password1']; }



if ( empty($email) ||  empty($pw)) { // error checking for blank
    array_push($error, "Do not leave either field blank.");}
    
if (strlen($pw)<4){ // error checking for short length 
    array_push($error, "Invalid password entry. Must be more than 4 characters long.");}
    
if (!strpos($email, '@')||!strpos($email, '.')){ // error checking for e-mail
    array_push($error, "Invalid e-mail entry.");}   
if( !empty($error) )
{
    include('error.php'); return;
}
 else {
    $pw = sha1($pw); // hash pw
    
    require_once('database.php'); // connect to DB...
 
    $sql = "SELECT email FROM signup WHERE email='$email'"; // check for email
    
    $result = $db->query($sql);

    $rows = $result->fetchAll();
    $rowCount = count($rows);   
  
    if ($rowCount == 0) { // if e-mail not found...
        array_push($error, "E-mail not found.");include('error.php'); return;
    }   

    $sql2 = "SELECT email FROM signup WHERE email='$email' AND password='$pw'"; // check for email!
    
    $result2 = $db->query($sql2);

    $rows2 = $result2->fetchAll();
    $rowCount2 = count($rows2);   
  
    if ($rowCount2 == 0) { // if password / email combo is wrong...
        array_push($error, "Incorrect password.");include('error.php'); return;
    } 
    else{ // otherwise...
        $_SESSION['loggedin'] = true;
        echo("Successful login! <a href=admin.php>Go to admin</a>.");
        }


}
?>