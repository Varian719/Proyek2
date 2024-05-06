
let map, infoWindow, placesService;

function initMap() {
    map = new google.maps.Map(document.getElementById("map-container"), {
        center: { lat: -34.397, lng: 150.644 },
        zoom: 15,
    });
    infoWindow = new google.maps.InfoWindow();
    placesService = new google.maps.places.PlacesService(map);

    const locationButton = document.createElement("button");
    locationButton.textContent = "Pan to Current Location";
    locationButton.classList.add("custom-map-control-button");
    map.controls[google.maps.ControlPosition.TOP_CENTER].push(locationButton);

    locationButton.addEventListener("click", () => {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
                (position) => {
                    const pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude,
                    };

                    infoWindow.setPosition(pos);
                    infoWindow.setContent("Location found.");
                    infoWindow.open(map);
                    map.setCenter(pos);

                    findNearbyRestaurants(pos);
                },
                () => {
                    handleLocationError(true, infoWindow, map.getCenter());
                },
            );
        } else {
            handleLocationError(false, infoWindow, map.getCenter());
        }
    });
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    infoWindow.setPosition(pos);
    infoWindow.setContent(
        browserHasGeolocation
            ? "Error: The Geolocation service failed."
            : "Error: Your browser doesn't support geolocation."
    );
    infoWindow.open(map);
}

function findNearbyRestaurants(location) {
    const request = {
        location: location,
        radius: 500, // Define the radius within which to search for restaurants, in meters
        type: 'restaurant' // Specify the type of place to search for (e.g., 'restaurant', 'bar', 'cafe')
    };

    placesService.nearbySearch(request, (results, status) => {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
            for (let i = 0; i < results.length; i++) {
                createMarker(results[i]);
            }
        }
    });
}

function createMarker(place) {
    const marker = new google.maps.Marker({
        map,
        position: place.geometry.location,
    });

    google.maps.event.addListener(marker, "click", () => {
        infoWindow.setContent(place.name);
        infoWindow.open(map);
    });
}

window.initMap = initMap;
