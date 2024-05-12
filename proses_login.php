<?php
include_once("config.php");

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");

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

    header("Location:dashboard3.php");
}

?>