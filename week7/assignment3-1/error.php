<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- the head section -->
<head>
    <title>Log-In</title>
</head>

<!-- the body section -->
<body>
        <h3>Error</h3>
        <p><?php
        $error0 = implode(" <br/>",$error);
        $error1 = print_r($error0);
        echo($error1);
        ?></p>
        <p><a href="index.php">Go back</a>.
        

</body>
</html>