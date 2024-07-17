<?php
$name = $_POST['name'];
$email = $_POST['email'];

// Process form data (e.g., save to database)
// For demonstration, just echo the received data
$response = "Received name: " . $name . " and email: " . $email;
echo $response;
?>
