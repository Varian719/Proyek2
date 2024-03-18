<?php
include 'config.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
   
    // Sanitize the input to prevent SQL injection
    

    // Use separate DELETE statements for each table with proper WHERE clause conditions
    $sql1 = "DELETE FROM rumahmakan WHERE id_rm = '$id'";

    // Execute each query separately
    $query1 = mysqli_query($conn, $sql1);

    // Check if the query was successful
    if ($query1) {
        echo "<script language='JavaScript'>
                window.alert('Data User sudah dihapus');
             // Redirect to a relevant page after deletion
             location.href='data_rm.php'
              </script>";
    } else {
        echo "<script language='JavaScript'>
                window.alert('Data User tidak dapat dihapus');
                location.href='data_rm.php'
              </script>";
    }
    
?>
