<?php
include 'config.php';

$id = $_GET['userid']; 


$sql = "DELETE FROM user WHERE userid='$id'";
$query = mysqli_query($conn, $sql);
if ($query) {
    echo "<script language='JavaScript'>
           (window.alert('Data User sudah dihapus'))
           location.href='index.php'
           </script>";
} else {
    echo "<script language='JavaScript'>
           (window.alert('Data User tidak dapat dihapus'))
           </script>";
}

?>