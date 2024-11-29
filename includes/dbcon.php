<?php
    // Change these values according to your database credentials
    $host = 'localhost'; // Database host
    $username = 'root'; // Database username
    $password = ''; // Database password (empty for XAMPP default)
    $database = 'marina'; // Database name

    // Create connection
    $mysqli = new mysqli($host, $username, $password, $database);

    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }
?>
