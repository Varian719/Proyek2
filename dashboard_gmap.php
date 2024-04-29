<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Google Maps API Map with Nearby Restaurants</title>
  <style>
    /* Add your custom styles here */
  </style>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGlbr4VB6A8SL7mCJ9JS0sfd-ZqqfCWMc&libraries=places"></script>
</head>
<body>
<div id="map" style="height: 100vh;"></div>
<button onclick="getUserLocation()">Show My Location</button>

<script>
var map;
var userMarker;

function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: { lat: -0.493195, lng: 116.918643 }, // Coordinates of Samarinda City
    zoom: 12
  });
}

function getUserLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var userLocation = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };

      if (userMarker) {
        userMarker.setMap(null);
      }

      userMarker = new google.maps.Marker({
        position: userLocation,
        map: map,
        title: 'Your Location'
      });

      map.setCenter(userLocation);
      
      // Call function to display nearby restaurants
      displayNearbyRestaurants(userLocation);
    }, function() {
      alert('Error: The Geolocation service failed.');
    });
  } else {
    alert('Error: Your browser doesn\'t support Geolocation.');
  }
}

function displayNearbyRestaurants(location) {
  var request = {
    location: location,
    radius: '500', // Search radius in meters
    type: ['restaurant'] // Specify the type of place
  };

  var service = new google.maps.places.PlacesService(map);
  service.nearbySearch(request, callback);
}

function callback(results, status) {
  if (status == google.maps.places.PlacesServiceStatus.OK) {
    for (var i = 0; i < results.length; i++) {
      createMarker(results[i]);
    }
  }
}

function createMarker(place) {
  var marker = new google.maps.Marker({
    map: map,
    position: place.geometry.location,
    title: place.name
  });

  google.maps.event.addListener(marker, 'click', function() {
    // You can add more details or functionality here
    alert(place.name);
  });
}

// Load the map when the page is loaded
google.maps.event.addDomListener(window, 'load', initMap);
</script>
</body>
</html>
