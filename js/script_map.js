mapboxgl.accessToken = "pk.eyJ1Ijoiemhhbml4IiwiYSI6ImNsc3poOWZ0djBuZ3gyam8xMjVvcW44cGIifQ.3I04wS6NG6eJfv-KNHSCWQ";

navigator.geolocation.getCurrentPosition(successLocation, errorLocation, {
  enableHighAccuracy: true
});

function successLocation(position) {
  var lng = position.coords.longitude;
  var lat = position.coords.latitude;

  var map = new mapboxgl.Map({
      container: 'map',
      style: 'mapbox://styles/mapbox/streets-v11',
      center: [lng, lat],
      zoom: 12
  });

  map.on('load', function () {
      map.addControl(new mapboxgl.NavigationControl());

      // Add a marker for user's location
      new mapboxgl.Marker().setLngLat([lng, lat]).addTo(map);

      // Fetch nearby restaurants
      map.addSource('restaurants', {
          type: 'geojson',
          data: 'https://api.mapbox.com/geocoding/v5/mapbox.places/restaurant.json?proximity=' + lng + ',' + lat + '&access_token=' + mapboxgl.accessToken
      });

      map.addLayer({
          'id': 'restaurants',
          'type': 'symbol',
          'source': 'restaurants',
          'layout': {
              'icon-image': 'restaurant-15',
              'icon-allow-overlap': true
          }
      });
  });
}

function errorLocation() {
  console.error("Unable to retrieve your location");
}