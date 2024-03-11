<?php
include 'config.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {

   
    $id = mysqli_real_escape_string($conn, $_POST['userid']);

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
               location.href='index.php'
               </script>";
    }
}
?>