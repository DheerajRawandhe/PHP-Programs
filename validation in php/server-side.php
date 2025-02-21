<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $errors = array();

    // Name validation
    if (empty($name)) {
        $errors[] = "The name field cannot be empty.";
    } elseif (strlen($name) < 3) {
        $errors[] = "The name must be at least 3 characters long.";
    }

    // Email validation
    if (empty($email)) {
        $errors[] = "The email field cannot be empty.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // Display errors
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } else {
        echo "Thank you, $name! We have received your email address ($email).";
    }
}
?>
