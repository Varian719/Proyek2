<?php
include "config.php";
if (isset($_GET['id'])) {
  $id = $_GET['id'];
}
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
      }
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
      left: 30%;
      padding: 3em;
      border-radius: 1em;
      box-shadow: 0 4em 5em rgba(27, 8, 53, 0.2);
    }

    .wrapper3 {
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
    /* Chat bubble styles */
        .chat-container {
            max-height: 300px; /* Adjust the max-height as needed */
            overflow-y: auto;
        }

        .chat-bubble {
            display: flex;
            margin-bottom: 20px;
        }

        .chat-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #ccc; /* You can add background image here for profile pictures */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .avatar-initials {
            font-size: 16px;
            color: #fff;
        }

        .chat-message {
            flex: 1;
            margin-left: 10px;
            background-color: #f3f4f6;
            padding: 10px;
            border-radius: 10px;
        }

        .chat-user {
            font-weight: bold;
        }

        .chat-text {
            margin: 0;
        }
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
    type="text/css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" type="text/css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
    type="text/css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" type="text/css">

  <script src="js/script_map.js" defer></script>
</head>

<body>
  
  <div class="l-navbar sidebar-custom" id="nav-bar">
    <nav class="nav">
      <div>  <div class="nav_list">
          <a href="dashboard3.php" class="nav_link "> <i class='bx bx-map nav_icon'></i> <span
              class="nav_name">Dashboard</span> </a>
          <a href="roulette.php" class="nav_link"> <i class='bx bx-circle nav_icon'></i> <span
              class="nav_name">Users</span> </a>
          <a href="#" class="nav_link active"> <i class='bx bx-message-square-detail nav_icon'></i> <span
              class="nav_name">Messages</span> </a>
          <a href="#" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Bookmark</span>
          </a>
        </div>
      </div> <a href="logout.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span
          class="nav_name">SignOut</span> </a>
    </nav>
  </div>
  <!--Container Main start-->

  <div class="wrapper2">
    <div class="container">

      <?php
      $sql1 = "SELECT * FROM rumahmakan where id_rm = $id";
      $query1 = mysqli_query($conn, $sql1);
          while ($row = mysqli_fetch_assoc($query1)) {
            echo "<tr>
                    <td><h2>" . $row['nama_rumahmakan'] . "</h2></td>
                    <td><h5>Alamat:" . $row['Alamat'] . "</h5></td>
                    <td><h5>Telp:" . $row['no_telp'] . "</h5></td>
                  </tr>";
          }
        ?>
        <br>
      <h2>Menu</h2>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Food</th>
            <th scope="col">Harga</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql2 = "SELECT * FROM menu where id_rm = $id";
          $query2 = mysqli_query($conn, $sql2);
          while ($row = mysqli_fetch_assoc($query2)) {
            echo "<tr>
                    <td>" . $row['Menu'] . "</td>
                    <td>" . $row['Harga'] . "</td>
                  </tr>";
          }
          ?>
        </tbody>
      </table>
    </div>

  </div>

  <div class="wrapper3">

    <div class="container">
    <h2>Reviews</h2>
      <?php
      // Query untuk menghitung rata-rata rating
      $query = "SELECT AVG(Rating) AS avg_rating FROM rating WHERE id_rm = $id";
      $result = mysqli_query($conn, $query);
      $row = mysqli_fetch_assoc($result);
      // Mengambil nilai rata-rata rating
      $summary = number_format($row['avg_rating'], 1); // Batasi ke satu angka desimal
      
      // Menampilkan summary rating dengan bintang kuning
      echo "<h2>Summary Rating: <br> <span style='font-size: 1.2em;'>$summary</span> ";
      for ($i = 1; $i <= 5; $i++) {
        if ($i <= round($summary)) {
          echo "<span style='color: #FFD700; font-size: 1.5em;'>&#9733;</span>"; // Bintang terisi (kuning)
        } else {
          echo "<span style='color: #000; font-size: 1.5em;'>&#9733;</span>"; // Bintang kosong
        }
      }
      echo "</h2>";
      ?>

      <div class="chat-container">
        <?php
        if (isset($_GET['id'])) {
          $id = $_GET['id'];
        }
        $sql = "SELECT * FROM rating where id_rm = $id";
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($query)) {
          ?>
          <div class="chat-bubble">
            <div class="chat-avatar">
              <span class="avatar-initials">
                <?php echo substr($row['username'], 0, 2); ?>
              </span>
            </div>
            <div class="chat-message">
              <p class="chat-user">
                <?php echo $row['username']; ?>
              </p>
              <p class="chat-text">
                <?php echo $row['Rating']; ?>
              </p>
              <p class="chat-text">
                <?php echo $row['Komentar']; ?>
              </p>
            </div>
          </div>
          <?php
        }
        ?>
      </div>
    </div>
  </div>


  <!--Container Main end-->

  <script src="js/dashboard.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>