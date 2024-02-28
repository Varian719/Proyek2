<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
  <link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet' />
  <link rel="stylesheet" href="styles.css" />
  <title>Google Maps Clone</title>
  <style>
    a{
      font-size: 24px;
    }
    body {
      margin: 0;
    }

    #map {
      height: 100vh;
      width: 100vw;
    }

    .navbar {
      background-color: #02257d;
      overflow: hidden;
      position: relative;
    }

    .navbar a {
      float: left;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    .navbar a:hover {
      background-color: #ddd;
      color: black;
    }
    h2{
      color:#ff6e42;
      padding-left:850px;
    }
  </style>
  <script src="script_map.js" defer></script>
</head>
<body>
  <div class="navbar">
    <a href="#">Home</a>
    <a href="#">About</a>
    <a href="#">Contact</a>
    <h2>Spin A Meal</h2>
  </div>
  <div id='map'></div>
</body>
</html>