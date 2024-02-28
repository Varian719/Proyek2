<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
  <link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet' />
  <link
    rel="stylesheet"

    type="text/css"
  />
  <div class="navbar">
		<div id="menu-icon">&#9776; Menu</div>
		<div class="sidebar">
			<a href="#">Profile</a>
			<a href="#">Change Theme</a>
			<a href="#">Log Out</a>
		</div>
	</div>
  <title>Google Maps Clone</title>
  <style>
    body {
      margin: 0;
    }

    #map {
      height: 100vh;
      width: 100vw;
    }
    @media screen and (max-width: 768px) {
    .navbar {
        flex-direction: column;
        align-items: flex-start;
    }

    .navbar #menu-icon {
        order: -1; /* Menempatkan icon menu di atas logo */
        margin-bottom: 10px;
    }

    .sidebar {
        width: 100%;
        top: 60px;
    }
    
}
  </style>
  <script src="script_map.js" defer></script>
</head>
<body>
  <div id='map'></div>
</body>
</html>