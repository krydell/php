
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <h2>Assignment 3 - 2: Log In</h2>
        <?php
        include './header.php';
        ?>     
    <p></p>
    <b> Log In</b>
           <form action="login.php" method="post"
                  id="login_form">

                <label>E-mail:</label>
                <input type="input" name="email1" />
                <br/>
                <label>Password:</label>
                <input type="input" name="password1" type="password" />              
                <br/>
                 
                <label>&nbsp;</label>
                <input type="submit" value="Log-In" />
                <br />
            </form>    
    </body>
</html>


