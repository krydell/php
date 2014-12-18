<?php
if(isset($_POST['error'])){ $error = $_POST['error'];}
else{$error = "";}
if(isset($_POST['email'])){ $email = $_POST['email']; }
else{$email = "";}
if(isset($_POST['phone'])){ $phone = $_POST['phone']; }
else{$phone = "";}
if(isset($_POST['contact'])){ $contact = $_POST['contact']; }
else{$contact = "";}
if(isset($_POST['heard'])){ $heard = $_POST['heard']; }
else{$heard = "";}
if(isset($_POST['comments'])){ $comments = $_POST['comments']; }
else{$comments = "";}

if (strlen($phone)<7||strlen($phone)>10){
    $error = "Phone must be valid.";}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error = "E-mail must be valid.";}      
if ( empty($email) ||  empty($contact) ||  empty($heard) ||  empty($phone)) { // error checking
    $error = "All fields except for comments are required."; }
 

if ( !empty($error) )
    
{ echo '<pre><font color=red><center>ERROR. '.$error.'</center></pre></font>'; include('index.php'); return;}

 else { 
    //
    // if valid, add to userdata
    
    require_once('database.php'); // check db
    
    $query = "INSERT INTO account
                 (id, email, phone, heard, contact, comments)
              VALUES
                 ('', '$email','$phone', '$heard', '$contact', '$comments');"; // add row
    $db->exec($query);
    echo '<center><pre><font color=blue>Signup completed. Added to DB.</pre></font></center>';
    // go back home
    include('display_results.php');
}
?>