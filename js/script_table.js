// server.js
mapboxgl.accessToken = "pk.eyJ1Ijoiemhhbml4IiwiYSI6ImNsc3poOWZ0djBuZ3gyam8xMjVvcW44cGIifQ.3I04wS6NG6eJfv-KNHSCWQ";
const express = require('express');
const axios = require('axios');
const mysql = require('mysql');

const app = express();
const PORT = process.env.PORT || 3000;

// MySQL database connection configuration
const connection = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: '',
  database: 'spin_a_meal'
});

// Connect to MySQL database
connection.connect((err) => {
  if (err) {
    console.error('Error connecting to MySQL database:', err);
    return;
  }
  console.log('Connected to MySQL database');
});

// API endpoint to fetch nearby restaurants and insert into database
app.get('/fetch-restaurants', async (req, res) => {
  const userLocation = req.query.location; // User's location (latitude, longitude)
  const radius = 1000; // Radius in meters (adjust as needed)

  try {
    // Fetch nearby restaurants using Mapbox API
    const response = await axios.get(`https://api.mapbox.com/geocoding/v5/mapbox.places/restaurant.json?proximity=${userLocation}&radius=${radius}&access_token=YOUR_MAPBOX_ACCESS_TOKEN`);

    // Extract relevant data from the response
    const restaurants = response.data.features.map((restaurant) => ({
      name: restaurant.text,
      latitude: restaurant.center[1],
      longitude: restaurant.center[0]
    }));

    // Insert fetched restaurant data into MySQL database
    const query = 'INSERT INTO restaurants (nama_rumahmakan, latitude, longitude) VALUES ?';
    const values = restaurants.map((restaurant) => [restaurant.name, restaurant.latitude, restaurant.longitude]);

    connection.query(query, [values], (error, results) => {
      if (error) {
        console.error('Error inserting data into MySQL database:', error);
        res.status(500).send('Error inserting data into database');
        return;
      }
      console.log('Inserted data into MySQL database');
      res.status(200).send('Restaurant data inserted successfully');
    });
  } catch (error) {
    console.error('Error fetching nearby restaurants:', error);
    res.status(500).send('Error fetching nearby restaurants');
  }
});

app.listen(PORT, () => {
  console.log(`Server is running on port ${PORT}`);
});
