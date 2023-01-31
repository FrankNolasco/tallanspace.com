<?php
// Get the message from the request
$message = $_POST['message'];
// Get the name from the request
$name = $_POST['name'];
// Get the email from the request
$email = $_POST['email'];

// Set the email subject
$subject = "New message from $name";
// Set the email body
$body = "Name: $message";
// Set the email headers
$headers = "From: $email";

// Send the email
mail("fnv1298@gmail.com", $subject, $body, $headers);
