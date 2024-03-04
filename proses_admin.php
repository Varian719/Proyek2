<?php
include_once("config.php");

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($conn, "SELECT * FROM admin WHERE Admin_name = '$username' AND password = '$password'");

if(mysqli_num_rows($query)==0){
    ?>
    <script>
        alert("username dan password anda tidak ditemukan!");
        window.location.assign("index.php");
    </script>
<?php
}else{
    session_start();
    $_SESSION['username']= $username;
    $_SESSION['password']= $password;

    header("Location:AdminLTE-3.2.0\index.php");
}

?>