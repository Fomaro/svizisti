<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    if (empty($email) || empty($password) || $password !== $confirm_password) {
        header("Location: error.php");
        exit();
    } else {
        header("Location: success.php");
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
