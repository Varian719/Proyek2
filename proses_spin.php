<?php
$access_token = 'pk.eyJ1Ijoiemhhbml4IiwiYSI6ImNsc3poOWZ0djBuZ3gyam8xMjVvcW44cGIifQ.3I04wS6NG6eJfv-KNHSCWQ';
$lng = 'user_longitude_here';
$lat = 'user_latitude_here';

// Set up the Mapbox API request
$url = "https://api.mapbox.com/geocoding/v5/mapbox.places/$lng,$lat,restaurant.json?access_token=$access_token";

// Make the API request
$response = file_get_contents($url);

// Parse the response as JSON
$json = json_decode($response);

// Extract the nearest restaurant from the response
$restaurant = $json->features[0];

// Print out the name and address of the nearest restaurant
echo "The nearest restaurant is: " . $restaurant->place_name . "\n";
echo "Address: " . $restaurant->properties->address . "\n";
?>