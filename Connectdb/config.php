<?php
// config.php

// Database credentials
$servername = "localhost";
$dbusername = "root";    // Change if using a different user
$dbpassword = "Piyush@1234"; // Your root password
$dbname     = "growallsolutions";

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    // Log detailed error for debugging
    error_log("DB Connect Error (" . date('Y-m-d H:i:s') . "): " . $conn->connect_error);
    // Display user-friendly message
    die("Database connection failed. Please try again later.");
} else {
    // ✅ Browser message for successful connection
    echo "Database connected successfully!<br>";
}

// Set charset to UTF-8 for proper encoding
$conn->set_charset("utf8");

// Optional: function to perform updates safely
function executeUpdate($sql, $conn) {
    if ($conn->query($sql) === TRUE) {
        return true;
    } else {
        error_log("DB Update Error (" . date('Y-m-d H:i:s') . "): " . $conn->error);
        return false;
    }
}

// Example usage of executeUpdate function:
// $updateSQL = "UPDATE contact_form SET name='Piyush' WHERE id=1";
// executeUpdate($updateSQL, $conn);
?>
