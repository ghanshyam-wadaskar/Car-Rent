<?php
function Connect()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "carrental";
    $dbport = 3308; // Ensure you're connecting to the correct port

    // Create Connection
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname, $dbport);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Set the charset to utf8mb4
    if (!$conn->set_charset("utf8mb4")) {
        die("Error loading character set utf8mb4: " . $conn->error);
    }

    return $conn;
}
?>
