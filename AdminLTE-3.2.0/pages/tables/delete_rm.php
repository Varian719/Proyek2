<?php
include 'config.php';

// Periksa apakah 'id_rm' ada dalam $_GET dan tidak kosong
if(isset($_GET['id_rm']) && !empty($_GET['id_rm'])) {
    $id_rm = $_GET['id_rm'];

    $sql = "DELETE FROM nama_tabel WHERE id_rm=$id_rm";
    $query = mysqli_query($conn, $sql);

    if($query){
        echo "<script language='JavaScript'>
                  (window.alert('Data sudah dihapus'))
                  location.href='index.php'
                  </script>";
    } else {
        echo "<script language='JavaScript'>
                  (window.alert('Data tidak dapat dihapus'))
                  location.href='index.php'
                  </script>";
    }
} else {
    echo "Parameter 'id_rm' tidak valid atau tidak disertakan.";
}
?>
