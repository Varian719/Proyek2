<?php
session_start();
include_once("config.php");

if (isset($_POST['Username']) && isset($_POST['Password'])):
    $username = $_POST['Username'];
    $password = $_POST['Password'];

    // Hash the password using PHP's password_hash function
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = "SELECT * FROM user WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ss', $username, $hashed_password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0){
        // Login successful
        $_SESSION['username'] = $username;
        header('Location: dashboard.php');
    }
    else{
        // Login failed
        $_SESSION['error'] = 'Invalid username or password.';
        header('Location: login.php');

    }
else:
    // No POST data
    header('Location: login.php');
endif;