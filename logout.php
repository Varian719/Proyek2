<?php
session_start();
//membaca session
$username=$_SESSION['username'];
$password=$_SESSION['password'];
unset($_SESSION);
session_destroy();
header("Location:index.php");
?>