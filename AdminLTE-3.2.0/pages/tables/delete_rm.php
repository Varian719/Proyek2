<?php
include 'config.php';

    // Sanitize the input to prevent SQL injection
    $id = mysqli_real_escape_string($conn, $_GET['id_rm']);

    // Use separate DELETE statements for each table with proper WHERE clause conditions
    $sql1 = "DELETE FROM rumahmakan WHERE id_rm = '$id'";

    // Execute each query separately
    $query1 = mysqli_query($conn, $sql1);

    // Check if the query was successful
    if ($query1) {
        echo "<script language='JavaScript'>
                window.alert('Data User sudah dihapus');
             // Redirect to a relevant page after deletion
              </script>";
    } else {
        echo "<script language='JavaScript'>
                window.alert('Data User tidak dapat dihapus');
              </script>";
    }

?>
