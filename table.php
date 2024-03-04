<!DOCTYPE html>
<html>
<head>
  <title>Nearby Restaurants</title>
  <script src='https://api.mapbox.com/mapbox-gl-js/v2.12.0/mapbox-gl.js'></script>
  <link href='https://api.mapbox.com/mapbox-gl-js/v2.12.0/mapbox-gl.css' rel='stylesheet' />
  <style>
    body { margin:0; padding:0; }
    #map { position:absolute; top:0; bottom:0; width:100%; }
    #table { position:absolute; top:0; right:0; margin:20px; max-height:80vh; overflow-y:auto; }
  </style>
</head>
<body>

<div id='map'></div>
<table id='table'></table>
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

</body>
</html>