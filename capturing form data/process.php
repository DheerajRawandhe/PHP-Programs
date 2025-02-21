<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Validate input (e.g., check for empty fields)
    if (empty($name) || empty($email)) {
        echo "Please fill in all fields.";
    } else {
        // Process the data (e.g., save to database, send email)
        echo "Thank you, $name! We have received your email address ($email).";
    }
} else {
    echo "Form not submitted.";
}

?>
  