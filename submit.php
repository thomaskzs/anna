<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Retrieve form data
    $name = $_GET["name"];
    $email = $_GET["email"];
    $message = $_GET["message"];

    // Display the submitted data
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Message: " . $message . "<br>";
}
?>
