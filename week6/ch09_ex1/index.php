<?php
if (isset($_POST['action'])) {
    $action =  $_POST['action'];
} else {
    $action =  'start_app';
}

switch ($action) {
    case 'start_app':
        $message = 'Enter some data and click on the Submit button.';

        break;
    case 'process_data':
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        if ( empty($name)) { // error checking
            $message = "Do not leave name field blank.";
            break;}        
        else {
            $first_name = explode(' ',$name);
            $first_name = $first_name[0];
            $first_name = ucfirst($first_name);
        }
        if ( empty($email)) { // error checking
            $message = "Do not leave e-mail field blank.";
            break;}        
        if (!strpos($email, '@')||!strpos($email, '.'))
        {
           $message = "Invalid e-mail entry.";
           break;
        }

        if ( empty($phone)) { // error checking
            $message = "Do not leave phone field blank.";
            break;}        
        else
        {
            $phone = str_replace("-", "", $phone);
            $phone = str_replace(".", "", $phone);
            $phone = str_replace(" ", "", $phone);

            $phone_len = strlen($phone);
            
            if($phone_len == 7)
            {
                $phone1 = substr($phone, 0, 3);
                $phone2 = substr($phone, 3);
                $phone = "$phone1-$phone2";
            }
            else if($phone_len == 10)
            {
                $phone1 = substr($phone, 0, 3);
                $phone2 = substr($phone, 3, 3);
                $phone3 = substr($phone, 6);        
                $phone = "$phone1-$phone2-$phone3";
            }    
            else
            {
                $message = "Phone must be 7 or 10 digits long.";
                break;
            }
        }

        $message = "Hello " . $first_name .",\n\n" . 
                        "Thank you for entering this data:\n\n" .
                        "Name: " . $name . "\n" .
                        "E-mail: " .$email . "\n" .
                        "Phone:" . $phone;

        break;
}
include 'string_tester.php';
?>