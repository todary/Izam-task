<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize form data
    $method = filter_var($_POST["method"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $phone = filter_var($_POST["phone"], FILTER_SANITIZE_STRING);

    // Validate based on method
    $error = "";
    if (empty($method)) {
        $error = "Please select a method";
    } else if ($method === "email" && empty($email)) {
        $error = "Please enter your email address";
    } else if ($method === "phone" && empty($phone)) {
        $error = "Please enter your phone number";
    }

    // If no errors, display submitted data (assuming success scenario)
    if (empty($error)) {
        echo "<h2>Submitted Information</h2>";
        echo "Method: " . $method . "<br>";
        if ($method === "email") {
            echo "Email Address: " . $email . "<br>";
        } else {
            echo "Phone Number: " . $phone . "<br>";
        }
    } else {
        echo "<p style='color: red;'>Error: " . $error . "</p>";
    }
}
