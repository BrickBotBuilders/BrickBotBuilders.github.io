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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coaches Corner - Robotics Team Website</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="menu">
    <a href="index.html">Home</a>
    <a href="about.html">About Us</a>
    <a href="robots.html">Our Robots</a>
    <a href="events.html">Events</a>
    <a href="contact.html">Contact Us</a>
    <a href="coach.php">Coaches Corner</a>
</div>

<div class="content">
    <h1>Coaches Corner</h1>
    <p>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
    <p>This is where the coach can post useful information for the team.</p>
    <p>This is a link to <a href="./PythonCrashCourse.html" target="_blank">Python Crash Course From UMBC</a>.</p>
    <p>This is a link to <a href="https://github.com/jhwangt/spike3python" target="_blank">Code Repository forked ("copied") from Creator Academy Australia</a>.</p>
    <p>This is a link to <a href="https://www.youtube.com/channel/UC_EJBSPUTFORXV6gbQFdRgA" target="_blank">YouTube Channel from Creator Academy Australia</a>.</p>
</div>

</body>
</html>
