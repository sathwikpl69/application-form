<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $fullName = htmlspecialchars($_POST['fullName']);
    $email = htmlspecialchars($_POST['email']);
    $contactNumber = htmlspecialchars($_POST['contactNumber']);
    $eventName = htmlspecialchars($_POST['eventName']);
    $paymentMethod = htmlspecialchars($_POST['paymentMethod']);
    $dietaryPreferences = htmlspecialchars($_POST['dietaryPreferences']);
    $comments = htmlspecialchars($_POST['comments']);

    // Here you can process the data, e.g., save to a database or send an email

    // For demonstration, we will just return the data as a JSON response
    echo json_encode([
        'fullName' => $fullName,
        'email' => $email,
        'contactNumber' => $contactNumber,
        'eventName' => $eventName,
        'paymentMethod' => $paymentMethod,
        'dietaryPreferences' => $dietaryPreferences,
        'comments' => $comments
    ]);
} else {
    // If the request method is not POST, return a 405 error
    http_response_code(405);
    echo "Method Not Allowed";
}
?>