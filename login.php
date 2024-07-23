<?php
// Start the session
session_start();

// Hardcoded user credentials for simplicity
$username = 'coach';
$password = 'password123';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    // Validate credentials
    if ($input_username == $username && $input_password == $password) {
        // Set session variables
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

        // Redirect to the protected page
        header("Location: coach.php");
        exit();
    } else {
        // Invalid credentials
        $error_message = "Invalid username or password";
    }
}
?>
