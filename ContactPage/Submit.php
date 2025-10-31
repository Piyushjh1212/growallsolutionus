<?php
require '../Connectdb/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = $conn->real_escape_string($_POST['name']);
    $email   = $conn->real_escape_string($_POST['email']);
    $message = $conn->real_escape_string($_POST['message']);

    $sql = "INSERT INTO contact_form (name, email, message) 
            VALUES ('$name', '$email', '$message')";

    if (executeUpdate($sql, $conn)) {
        echo "Data inserted successfully!";
    } else {
        echo "Failed to insert data!";
    }
}
?>
