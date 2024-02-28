<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapbox Map</title>
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.2.0/mapbox-gl.js"></script>
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/v2.2.0/mapbox-gl.css" />
</head>
<body>
    <div id="map" style="width: 100%; height: 100vh;"></div>
    <script>// Set the access token
mapboxgl.accessToken = 'pk.eyJ1Ijoiemhhbml4IiwiYSI6ImNsc3poOWZ0djBuZ3gyam8xMjVvcW44cGIifQ.3I04wS6NG6eJfv-KNHSCWQ';

// Initialize the map
var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v12',
    center: [-2.9547949, 104.6929233],
    zoom: 13
});

// Add a marker at the user's location
if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
        var userLocation = [position.coords.latitude, position.coords.longitude];
        new mapboxgl.Marker()
            .setLngLat(userLocation)
            .setPopup(new mapboxgl.Popup().setHTML('<h3>You are here!</h3>'))
            .addTo(map);
    });
} else {
    alert("Geolocation is not supported by this browser.");
}</script>
</body>
</html>