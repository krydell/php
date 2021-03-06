<?php
    // get the data from the form
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];

    $wants_updates = $_POST['wants_updates'];
    $contact_via = $_POST['contact_via'];
    $comments = $_POST['comments'];

    // turns heard from into unknown if not checked. 
    if ( isset($_POST['heard_from'])) {    
         $heard_from = $_POST['heard_from']; }
    else {$heard_from = 'Unknown';}
    
    // read wants updates as a yes or a no
    if ( $wants_updates == 'on') {    
    $wants_updates = 'Yes'; } 
    else {    
    $wants_updates = 'No'; }    

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Account Information</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<body>
    <div id="content">
        <h1>Account Information</h1>

        <label>Email Address:</label> 
        <span><?php echo htmlspecialchars($email); ?></span><br />

        <label>Password:</label>
        <span><?php echo htmlspecialchars($password); ?></span><br />

        <label>Phone Number:</label>
        <span><?php echo htmlspecialchars($phone); ?></span><br />

        <label>Heard From:</label>
        <span><?php echo htmlspecialchars($heard_from); ?></span><br />

        <label>Send Updates:</label>
        <span><?php echo htmlspecialchars($wants_updates); ?></span><br />

        <label>Contact Via:</label>
        <span><?php echo htmlspecialchars($contact_via); ?></span><br /><br />

        <span>Comments:</span><br />
        <span><?php echo nl2br($comments); ?></span><br />
        
        <p>&nbsp;</p>
    </div>
</body>
</html>