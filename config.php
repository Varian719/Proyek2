<?php
// error_reporting(0);
$databaseHost = 'localhost';
$databaseName = 'spin_a_meal';
$databaseUsername = 'root';
$databasePassword = '';

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
if(!$conn)
{
    echo"Koneksi gagal";
}
?>