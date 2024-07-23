<?php
session_start();

$users = [
    'user' => 'password'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($users[$username]) && $users[$username] === $password) {
        $_SESSION['username'] = $username;
        header('Location: content.php');
        exit();
    } else {
        header('Location: login.php?error=Invalid%20credentials');
        exit();
    }
}
?>
