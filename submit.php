<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = htmlspecialchars($_POST['fullName']);
    $email = htmlspecialchars($_POST['email']);
    $contactNumber = htmlspecialchars($_POST['contactNumber']);
    $eventName = htmlspecialchars($_POST['eventName']);
    $paymentMethod = htmlspecialchars($_POST['paymentMethod']);
    $dietaryPreferences = htmlspecialchars($_POST['dietaryPreferences']);
    $comments = htmlspecialchars($_POST['comments']);

    // Here you can add code to save the data to a database or send an email

    echo "Thank you, $fullName! You have successfully registered for the $eventName.";
} else {
    echo "Invalid request.";
}
?>