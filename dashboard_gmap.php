<!DOCTYPE html>
<?php
error_reporting(0);
session_start();
$username = $_SESSION['username'];
$password = $_SESSION['password'];
if($username=="" or $password=="")
{ ?>
	<script>
        alert("username dan password anda tidak ditemukan!");
        window.location.assign("login.php");
    </script>
    <?php
}else{

?>


<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <title>Dashboard</title>
  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    <script type="module" src="./js/index.js"></script>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");:root{--header-height: 3rem;--nav-width: 68px;--first-color: #4723D9;--first-color-light: #AFA5D9;--white-color: #F7F6FB;--body-font: 'Nunito', sans-serif;--normal-font-size: 1rem;--z-fixed: 100}*,::before,::after{box-sizing: border-box}body{position: relative;margin: var(--header-height) 0 0 0;padding: 0 1rem;font-family: var(--body-font);font-size: var(--normal-font-size);transition: .5s}a{text-decoration: none}.header{width: 100%;height: var(--header-height);position: fixed;top: 0;left: 0;display: flex;align-items: center;justify-content: space-between;padding: 0 1rem;background-color: var(--white-color);z-index: var(--z-fixed);transition: .5s}.header_toggle{color: var(--first-color);font-size: 1.5rem;cursor: pointer}.header_img{width: 35px;height: 35px;display: flex;justify-content: center;border-radius: 50%;overflow: hidden}.header_img img{width: 40px}.l-navbar{position: fixed;top: 0;left: -30%;width: var(--nav-width);height: 100vh;background-color: var(--first-color);padding: .5rem 1rem 0 0;transition: .5s;z-index: var(--z-fixed)}.nav{height: 100%;display: flex;flex-direction: column;justify-content: space-between;overflow: hidden}.nav_logo, .nav_link{display: grid;grid-template-columns: max-content max-content;align-items: center;column-gap: 1rem;padding: .5rem 0 .5rem 1.5rem}.nav_logo{margin-bottom: 2rem}.nav_logo-icon{font-size: 1.25rem;color: var(--white-color)}.nav_logo-name{color: var(--white-color);font-weight: 700}.nav_link{position: relative;color: var(--first-color-light);margin-bottom: 1.5rem;transition: .3s}.nav_link:hover{color: var(--white-color)}.nav_icon{font-size: 1.25rem}.show{left: 0}.body-pd{padding-left: calc(var(--nav-width) + 1rem)}.active{color: var(--white-color)}.active::before{content: '';position: absolute;left: 0;width: 2px;height: 32px;background-color: var(--white-color)}.height-100{height:100vh}@media screen and (min-width: 768px){body{margin: calc(var(--header-height) + 1rem) 0 0 0;padding-left: calc(var(--nav-width) + 2rem)}.header{height: calc(var(--header-height) + 1rem);padding: 0 2rem 0 calc(var(--nav-width) + 2rem)}.header_img{width: 40px;height: 40px}.header_img img{width: 45px}.l-navbar{left: 0;padding: 1rem 1rem 0 0}.show{width: calc(var(--nav-width) + 156px)}.body-pd{padding-left: calc(var(--nav-width) + 188px)}}
    #geocoder {
  position: absolute;
  top: 10px;
  left: 10px;
  z-index: 1000;
}

#restaurant-results {
  position: absolute;
  top: 60px;
  left: 10px;
  width: 300px;
  background-color: #fff;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  border-radius: 4px;
  padding: 10px;
  z-index: 1000;
  display: none;
}

#restaurant-results .result {
  padding: 5px 10px;
  border-bottom: 1px solid #ddd;
  cursor: pointer;
  transition: background-color 0.3s;
}

#restaurant-results .result:hover {
  background-color: #f5f5f5;
}

.sidebar-custom {
    background-color: #3904d9;

}
.navbar-custom {
    margin-left: 0px;

}

 </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" type="text/css">

  <script src="js/script_map.js" defer></script>
</head>
<body>
<div id="map"></div>

<!-- 
  The `defer` attribute causes the callback to execute after the full HTML
  document has been parsed. For non-blocking uses, avoiding race conditions,
  and consistent behavior across browsers, consider loading using Promises.
  See https://developers.google.com/maps/documentation/javascript/load-maps-js-api
  for more information.
  -->
<script
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCG42TcvzvW893Gom3uvSQdtD-qrNtA0fE&callback=initMap&v=weekly"
  defer
></script>
<header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i></div>
        <div class="navbar-header">
        <a class="navbar-brand ml-0" href="#">Spin A Meal</a>
      
        </div>
        <div class="header_img align-left"> <img src="images/spin_a_meal.png" alt=""> </div>
    </header>
    <div class="l-navbar sidebar-custom" id="nav-bar">
        <nav class="nav">
            <div> <div class="nav_list">
                <a href="dashboard.php" class="nav_link active"> <i class='bx bx-map nav_icon'></i> <span class="nav_name">Dashboard</span> </a>
                <a href="roulette.php" class="nav_link"> <i class='bx bx-circle nav_icon'></i> <span class="nav_name">Users</span> </a>
                <a href="#" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Messages</span> </a>
                <a href="#" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Bookmark</span> </a>
                </div>
            </div> 
            <a href="logout.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
            
        </nav>
    </div>
    <!--Container Main start-->
    <div class="height-100 bg-light" id='map'>
    </div>
    <mapbox-search access-token="pk.eyJ1Ijoiemhhbml4IiwiYSI6ImNsc3poOWZ0djBuZ3gyam8xMjVvcW44cGIifQ.3I04wS6NG6eJfv-KNHSCWQ"
    proximity="0,0"
    ></mapbox-search>
    
    <!--Container Main end-->

    <script src="js/dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
<?php
}
?>