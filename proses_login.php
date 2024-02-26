<?php

$username = $_POST['username'];
$password = $_POST['password'];
$conn=mysqli_connect("localhost","root","","spin_a_meal");
if(!$conn)
{
    echo"Koneksi gagal";
}


$query = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password ='$password'");

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

    header("Location:dashboard.php");
}

?>