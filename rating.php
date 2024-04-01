<?php
include "config.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");

    :root {
      --header-height: 3rem;
      --nav-width: 68px;
      --first-color: #4723D9;
      --first-color-light: #AFA5D9;
      --white-color: #F7F6FB;
      --body-font: 'Nunito', sans-serif;
      --normal-font-size: 1rem;
      --z-fixed: 100
    }

    *,
    ::before,
    ::after {
      box-sizing: border-box
    }

    body {
      position: relative;
      margin: var(--header-height) 0 0 0;
      padding: 0 1rem;
      font-family: var(--body-font);
      font-size: var(--normal-font-size);
      transition: .5s
    }

    a {
      text-decoration: none
    }

    .header {
      width: 100%;
      height: var(--header-height);
      position: fixed;
      top: 0;
      left: 0;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 1rem;
      background-color: var(--white-color);
      z-index: var(--z-fixed);
      transition: .5s
    }

    .header_toggle {
      color: var(--first-color);
      font-size: 1.5rem;
      cursor: pointer
    }

    .header_img {
      width: 35px;
      height: 35px;
      display: flex;
      justify-content: center;
      border-radius: 50%;
      overflow: hidden
    }

    .header_img img {
      width: 40px
    }

    .l-navbar {
      position: fixed;
      top: 0;
      left: -30%;
      width: var(--nav-width);
      height: 100vh;
      background-color: var(--first-color);
      padding: .5rem 1rem 0 0;
      transition: .5s;
      z-index: var(--z-fixed)
    }

    .nav {
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      overflow: hidden
    }

    .nav_logo,
    .nav_link {
      display: grid;
      grid-template-columns: max-content max-content;
      align-items: center;
      column-gap: 1rem;
      padding: .5rem 0 .5rem 1.5rem
    }

    .nav_logo {
      margin-bottom: 2rem
    }

    .nav_logo-icon {
      font-size: 1.25rem;
      color: var(--white-color)
    }

    .nav_logo-name {
      color: var(--white-color);
      font-weight: 700
    }

    .nav_link {
      position: relative;
      color: var(--first-color-light);
      margin-bottom: 1.5rem;
      transition: .3s
    }

    .nav_link:hover {
      color: var(--white-color)
    }

    .nav_icon {
      font-size: 1.25rem
    }

    .show {
      left: 0
    }

    .body-pd {
      padding-left: calc(var(--nav-width) + 1rem)
    }

    .active {
      color: var(--white-color)
    }

    .active::before {
      content: '';
      position: absolute;
      left: 0;
      width: 2px;
      height: 32px;
      background-color: var(--white-color)
    }

    .height-100 {
      height: 100vh
    }

    @media screen and (min-width: 768px) {
      body {
        margin: calc(var(--header-height) + 1rem) 0 0 0;
        padding-left: calc(var(--nav-width) + 2rem)
      }

      .header {
        height: calc(var(--header-height) + 1rem);
        padding: 0 2rem 0 calc(var(--nav-width) + 2rem)
      }

      .header_img {
        width: 40px;
        height: 40px
      }

      .header_img img {
        width: 45px
      }

      .l-navbar {
        left: 0;
        padding: 1rem 1rem 0 0
      }

      .show {
        width: calc(var(--nav-width) + 156px)
      }

      .body-pd {
        padding-left: calc(var(--nav-width) + 188px)
      } }
      .wrapper2 {
      width: 40%;
      max-width: 34.37em;
      max-height: 90vh;
      background-color: #ffffff;
      position: absolute;
      transform: translate(-50%, -50%);
      top: 50%;
      left: 75%;
      padding: 3em;
      border-radius: 1em;
      box-shadow: 0 4em 5em rgba(27, 8, 53, 0.2);
    }
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      height: 100vh;
      background: linear-gradient(135deg, #c3a3f1, #6414e9);
    }

    #popup {
      width: 15em;
      height: 10em;
      display: none;
      font-size: 2rem;
      position: fixed;
      top: 60%;
      left: 50%;
      transform: translate(-50%, -50%);
      background: rgba(255, 255, 255, 0.9);
      padding: 100px 20px 20px 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
      text-align: center;

    }

    .wrapper {
      width: 40%;
      max-width: 34.37em;
      max-height: 90vh;
      background-color: #ffffff;
      position: absolute;
      transform: translate(-50%, -50%);
      top: 50%;
      left: 30%;
      padding: 3em;
      border-radius: 1em;
      box-shadow: 0 4em 5em rgba(27, 8, 53, 0.2);
    }

    .wrapper2 {
      width: 40%;
      max-width: 34.37em;
      max-height: 90vh;
      background-color: #ffffff;
      position: absolute;
      transform: translate(-50%, -50%);
      top: 50%;
      left: 75%;
      padding: 3em;
      border-radius: 1em;
      box-shadow: 0 4em 5em rgba(27, 8, 53, 0.2);
    }


    .container {
      position: relative;
      width: 100%;
      height: 100%;
    }
  

  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
    type="text/css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" type="text/css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" type="text/css">

  <script src="js/script_map.js" defer></script>
</head>
<body>
<header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i></div>
        <div class="navbar-header">
        <a class="navbar-brand ml-0" href="#">Spin A Meal</a>
      
        </div>
        <div class="header_img align-left"> <img src="images/spin_a_meal.png" alt=""> </div>
    </header>
    <div class="l-navbar sidebar-custom" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">BBBootstrap</span> </a>
                <div class="nav_list">
                <a href="dashboard.php" class="nav_link "> <i class='bx bx-map nav_icon'></i> <span class="nav_name">Dashboard</span> </a>
                <a href="roulette.php" class="nav_link"> <i class='bx bx-circle nav_icon'></i> <span class="nav_name">Users</span> </a>
                <a href="#" class="nav_link active"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Messages</span> </a>
                <a href="#" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Bookmark</span> </a>
                <a href="#" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Files</span> </a>
                <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Stats</span> </a> 
                </div>
            </div> <a href="index.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
        </nav>
    </div>
    <!--Container Main start-->

    <div class="wrapper2">
    <div class="container">
    <form action="" method="post" id="star-rating" class="review-form">
  <table>
    <tr>
        
      <td>
        <div class="stars">
        <label>Restaurant</label><br>
        <label>Beri rating</label><br>
          <input type="number" name="id_rm" value="" placeholder="id_rm"/><br>
          <input type="number" name="userid" value="" placeholder="userid"/><br>
          <input type="radio" id="star5" name="rating" value="5" />
          <label for="star5" title="5 stars">5</label>
          
          <input type="radio" id="star4" name="rating" value="4" />
          <label for="star4" title="4 stars">4</label>
          
          <input type="radio" id="star3" name="rating" value="3" />
          <label for="star3" title="3 stars">3</label>
          
          <input type="radio" id="star2" name="rating" value="2" />
          <label for="star2" title="2 stars">2</label>
          
          <input type="radio" id="star1" name="rating" value="1" />
          <label for="star1" title="1 star">1</label>
        </div>
        <br>
        <textarea name="comment" placeholder="comment"></textarea>
        <input type="submit" name="save" value="Submit"/>
        <?php
include "config.php";

if(isset($_POST['save'])){
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];
    $id_rm = $_POST['id_rm'];
    $userid= $_POST['userid'];
    
    $qry1 = "INSERT INTO rating (id_rm, userid, Rating) VALUES ('$id_rm', '$userid', '$rating')";
    $qry2 = "INSERT INTO komentar (Komentar, id_rm, userid) VALUES ('$comment', '$id_rm', '$userid')";
    
    $hasil1 = mysqli_query($conn, $qry1);
    $hasil2 = mysqli_query($conn, $qry2);
    
    if($hasil1 && $hasil2){
        echo "<script language='JavaScript'>
              (window.alert('Komentar dan rating sudah di Tambahkan'))
              location.href='roulette.php'
              </script>";
    } else{
        echo "<script language='JavaScript'>
              (window.alert('komentar dan rating tidak dapat ditambahkan'))
              </script>";
    }
}
?>

      </td>
    </tr>
  </table>
</form>


    </div>
  </div>
    
    <!--Container Main end-->

    <script src="js/dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>