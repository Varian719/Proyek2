<?php
include 'config.php';
error_reporting(0);
?>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Spin Meal App</title>
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
  </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
    type="text/css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" type="text/css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet" />
  <!-- Stylesheet -->
  <style>
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

    #wheel {
      max-height: inherit;
      width: inherit;
      top: 0;
      padding: 0;
    }

    @keyframes rotate {
      100% {
        transform: rotate(360deg);
      }
    }

    #spin-btn {
      position: absolute;
      transform: translate(-50%, -50%);
      top: 50%;
      left: 50%;
      height: 26%;
      width: 26%;
      border-radius: 50%;
      cursor: pointer;
      border: 0;
      background: radial-gradient(#fdcf3b 50%, #d88a40 85%);
      color: #c66e16;
      text-transform: uppercase;
      font-size: 1.8em;
      letter-spacing: 0.1em;
      font-weight: 600;
    }

    img {
      position: absolute;
      width: 4em;
      top: 45%;
      right: -8%;
    }

    #final-value {
      font-size: 1.5em;
      text-align: center;
      margin-top: 1.5em;
      color: #202020;
      font-weight: 500;
    }

    @media screen and (max-width: 768px) {

      .wrapper{
        width: 80%;
        max-width: none;
        left: 50%;
        transform: translateX(-50%) translateY(-50%);
      }
      .wrapper2 {
        width: 80%;
        max-width: none;
        left: 50%;
        transform: translateX(-50%) translateY(170%);
      }
      img {
        right: -5%;
      }
    }

    /* Popup container */
  </style>
</head>

<body>
  <div class="l-navbar" id="nav-bar" style="background-color: #6414e9">
    <nav class="nav">
      <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span
            class="nav_logo-name">BBBootstrap</span> </a>
        <div class="nav_list">
          <a href="dashboard.php" class="nav_link"> <i class='bx bx-map nav_icon'></i> <span
              class="nav_name">Dashboard</span> </a>
          <a href="roulette.php" class="nav_link active"> <i class='bx bx-circle nav_icon'></i> <span
              class="nav_name">Users</span> </a>
          <a href="#" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span
              class="nav_name">Messages</span> </a>
          <a href="#" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Bookmark</span>
          </a>
          <a href="#" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span class="nav_name">Files</span> </a>
          <a href="#" class="nav_link"> <i class='bx bx-bar-chart-alt-2 nav_icon'></i> <span
              class="nav_name">Stats</span> </a>
        </div>
      </div> <a href="#" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span>
      </a>
    </nav>
  </div>
  <!--Container Main start-->
  <div class="wrapper">
    <div class="container">
      <canvas id="wheel"></canvas>
      <button id="spin-btn">Spin</button>
      <img src="images/left_arrow.png" alt="spinner arrow" />
    </div>
    <div id="final-value">
      <p>Click On The Spin Button To Start</p>
    </div>
    <!-- Elemen HTML untuk pop-up -->
    <div id="popup">
      <button onclick="closePopup()">Tutup</button>
    </div>
  </div>

  <div class="wrapper2">
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Restaurants Name</th>
            <th scope="col">Location</th>
            <th scope="col">!</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql = "SELECT * FROM rumahmakan";
          $query = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_assoc($query)) {
            echo "<tr>
                    <td>" . $row['id_rm'] . "</td>
                    <td>" . $row['nama_rumahmakan'] . "</td>
                    <td>" . $row['Alamat'] . "</td>
                    <td><a href='menu.php?id=". $row['id_rm'] ."' class='btn btn-primary'>Show Menu</a>
                  </tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
  <script>
    // Initialize map
    mapboxgl.accessToken = 'YOUR_MAPBOX_ACCESS_TOKEN';
    const map = new mapboxgl.Map({
      container: 'map',
      style: 'mapbox://styles/mapbox/streets-v11',
      center: [-77.0323, 38.9131],
      zoom: 12
    });

    // Fetch nearby restaurants from Mapbox API
    fetch('https://api.mapbox.com/datasets/v1/mapbox/restaurant-locations?access_token=YOUR_MAPBOX_ACCESS_TOKEN')
      .then(response => response.json())
      .then(data => {
        // Add markers to the map
        data.features.forEach(feature => {
          const marker = new mapboxgl.Marker()
            .setLngLat(feature.geometry.coordinates)
            .addTo(map);
        });

        // Add table rows
        const table = document.getElementById('table');
        data.features.forEach(feature => {
          const row = document.createElement('tr');
          const nameCell = document.createElement('td');
          nameCell.textContent = feature.properties.name;
          const addressCell = document.createElement('td');
          addressCell.textContent = feature.properties.address;
          row.appendChild(nameCell);
          row.appendChild(addressCell);
          table.appendChild(row);
        });
      })
      .catch(error => console.log(error));
  </script>
  </div>
  </div>
  <!-- Chart JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
  <!-- Chart JS Plugin for displaying text over chart -->
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.1.0/chartjs-plugin-datalabels.min.js"></script>
  <!-- Script -->
  <script>
    const wheel = document.getElementById("wheel");
    const spinBtn = document.getElementById("spin-btn");
    const finalValue = document.getElementById("final-value");
    //Object that stores values of minimum and maximum angle for a value
    const rotationValues = [
      { minDegree: 0, maxDegree: 36, value: 2 },
      { minDegree: 37, maxDegree: 109, value: 1 },
      { minDegree: 110, maxDegree: 182, value: 5 },
      { minDegree: 183, maxDegree: 255, value: 4 },
      { minDegree: 256, maxDegree: 328, value: 3 },
      { minDegree: 329, maxDegree: 360, value: 2 },
    ];
    //Size of each piece
    const data = [20, 20, 20, 20, 20];
    //background color for each piece
    var pieColors = [
      "#8b35bc",
      "#b163da",
      "#8b35bc",
      "#b163da",
      "#8b35bc",
      "#b163da",
    ];
    //Create chart
    let myChart = new Chart(wheel, {
      //Plugin for displaying text on pie chart
      plugins: [ChartDataLabels],
      //Chart Type Pie
      type: "pie",
      data: {
        //Labels(values which are to be displayed on chart)
        labels: [1, 2, 3, 4, 5],
        //Settings for dataset/pie
        datasets: [
          {
            backgroundColor: pieColors,
            data: data,
          },
        ],
      },
      options: {
        //Responsive chart
        responsive: true,
        animation: { duration: 0 },
        plugins: {
          //hide tooltip and legend
          tooltip: false,
          legend: {
            display: false,
          },
          //display labels inside pie chart
          datalabels: {
            color: "#ffffff",
            formatter: (_, context) => context.chart.data.labels[context.dataIndex],
            font: { size: 24 },
          },
        },
      },
    });
    //display value based on the randomAngle
    const valueGenerator = (angleValue) => {
      for (let i of rotationValues) {
        //if the angleValue is between min and max then display it
        if (angleValue >= i.minDegree && angleValue <= i.maxDegree) {
          finalValue.innerHTML = `<p>Rumah Makan : ${i.value}</p><a href="rating.php"><button>Rating</button></a>`;
          spinBtn.disabled = false;
          break;
        }
      }
    };

    //Spinner count
    let count = 0;
    //100 rotations for animation and last rotation for result
    let resultValue = 101;
    //Start spinning
    spinBtn.addEventListener("click", () => {
      spinBtn.disabled = true;
      //Empty final value
      finalValue.innerHTML = `<p>Good Luck!</p>`;
      //Generate random degrees to stop at
      let randomDegree = Math.floor(Math.random() * (355 - 0 + 1) + 0);
      //Interval for rotation animation
      let rotationInterval = window.setInterval(() => {
        //Set rotation for piechart
        /*
        Initially to make the piechart rotate faster we set resultValue to 101 so it rotates 101 degrees at a time and this reduces by 1 with every count. Eventually on last rotation we rotate by 1 degree at a time.
        */
        myChart.options.rotation = myChart.options.rotation + resultValue;
        //Update chart with new value;
        myChart.update();
        //If rotation>360 reset it back to 0
        if (myChart.options.rotation >= 360) {
          count += 1;
          resultValue -= 5;
          myChart.options.rotation = 0;
        } else if (count > 15 && myChart.options.rotation == randomDegree) {
          valueGenerator(randomDegree);
          clearInterval(rotationInterval);
          count = 0;
          resultValue = 101;
        }
      }, 10);
    });

  </script>
  <!--Container Main end-->

  <script src="js/dashboard.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>

</html>