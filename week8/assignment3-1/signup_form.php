
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <h2>Assignment 3 - 2: Sign-up</h2>
        <?php
        include './header.php';
        ?>     
    <p></p>
    <b> Sign Up</b>
           <form action="signup.php" method="post"
                  id="signup_form">

                <label>E-mail:</label>
                <input type="input" name="email" />
                <br/>
                <label>Password:</label>
                <input type="input" name="password" type="password" />              
                <br/>
                 
                <label>&nbsp;</label>
                <input type="submit" value="Log-In" />
                <br />
            </form>    
    </body>
</html>


