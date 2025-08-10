<?php
// process_login.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Example validation (replace with real authentication logic)
    if ($email === "admin@example.com" && $password === "password123") {
        echo "Login successful!";
        // Redirect or start session here
    } else {
        echo "Invalid credentials.";
    }
}
?>
