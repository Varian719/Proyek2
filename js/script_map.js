mapboxgl.accessToken = "pk.eyJ1Ijoiemhhbml4IiwiYSI6ImNsc3poOWZ0djBuZ3gyam8xMjVvcW44cGIifQ.3I04wS6NG6eJfv-KNHSCWQ";

navigator.geolocation.getCurrentPosition(successLocation, errorLocation, {
  enableHighAccuracy: true
});

function successLocation(position) {
  setupMap([position.coords.longitude, position.coords.latitude]);
}

function errorLocation() {
  setupMap([-2.24, 53.48]);
}

function setupMap(center) {
  const map = new mapboxgl.Map({
    container: "map",
    style: "mapbox://styles/mapbox/streets-v12",
    center: center,
    zoom: 15,
    geolocate: true
  
  });



  // Add geolocate control to the map.
  map.addControl(
    new mapboxgl.GeolocateControl({
      positionOptions: {
        enableHighAccuracy: true
      },
      trackUserLocation: true,
      showUserHeading: true
    })
    
    
  );
  
  // Add search control to the map.
  
  // Add the search control to the map
  
}