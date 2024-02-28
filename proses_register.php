<?php
include_once ("config.php");
$username = $_POST['username'];
$password = $_POST['password'];
$query_validasi = "SELECT*FROM user where username = '$username'";
$query = mysqli_query($conn, $query_validasi);

if(mysqli_num_rows($query)==0){
    $query_register = mysqli_query($conn, "INSERT INTO user(username,password) VALUES ('$username','$password')");
    if($query_register){
        ?>
        <script>
            alert("Data register sudah berhasil dilakukan, silahkan login");
            window.location.assign("index.php");
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("username dan password anda gunakan sudah terdaftar");
            window.location.assign("index.php");
        </script>
        <?php
    }
}