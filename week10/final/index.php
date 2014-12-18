<?php

// Karley Vasile - PHP Final 12/17/2014


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

$checkedText = 'checked="checked"';       

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mailing List</title>
        <link rel="stylesheet" type="text/css" href="main.css"/>
    </head>
    <body>
         <div id="content">
            <h1>Account Sign Up</h1>

            <form action="submit.php" method="post">

            <fieldset>
            <legend>Account Information</legend>
                <label>E-Mail:</label>
                <input type="text" name="email" value="<?php echo $email ?>" class="textbox"/>
                <br />

                <label>Phone Number:</label>
                <input type="text" name="phone" value="<?php echo $phone ?>" class="textbox"/>
            </fieldset>

            <fieldset>
            <legend>Settings</legend>

                <p>How did you hear about us?</p>
                <input type="radio" name="heard" value="Search Engine" <?php if($heard=='Search Engine'){echo $checkedText;} ?> />
                Search engine<br />
                <input type="radio" name="heard" value="Friend" <?php if($heard==='Friend'){echo $checkedText;} ?> />
                Word of mouth<br />
                <input type=radio name="heard" value="Other" <?php if($heard==='Other'){echo $checkedText;} ?> />
                Other<br />

                <p>Contact via:</p>
                <select name="contact">
                        <option value="email"            <?php
                if ( $contact === 'email') {
                    echo 'selected="selected"';
                }
            ?>>Email</option>
                        <option value="text"            <?php
                if ( $contact === 'text') {
                    echo 'selected="selected"';
                }
            ?>>Text Message</option>
                        <option value="phone"             <?php
                if ( $contact === 'phone') {
                    echo 'selected="selected"';
                }
            ?>>Phone</option>
                </select>

                <p>Comments: (optional)</p>
                <textarea name="comments" rows="4" cols="50" value=""><?php echo $comments ?></textarea>
            </fieldset>

            <input type="submit" value="Submit" />
            
            <br/><span><center><a href="view_data.php">View current data.</a></center></span>

            </form>
            <br />
        </div>
    </body>
</html>