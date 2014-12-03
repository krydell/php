<?php

$category_id = $_POST['category_id'];

$category_name = $_POST['category_name'];

// Validate inputs
if ( empty($category_name) ) {
    $error = "Invalid category input. Can't leave field blank.";
    include('error.php');
} else {
    // If valid, add the product to the database
    require_once('database.php');
    $query = "INSERT INTO categories
                 (categoryID, categoryName)
              VALUES
                 ('$category_id', '$category_name')";
    $db->exec($query);

    // Display the Product List page
    include('category_list.php');
}
?>