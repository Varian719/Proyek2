<!doctype html>
<!--
 @license
 Copyright 2019 Google LLC. All Rights Reserved.
 SPDX-License-Identifier: Apache-2.0
-->
<!-- [START maps_place_nearby_search] -->
<html>
  <head>
  <title>Dashboard</title>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");:root{--header-height: 3rem;--nav-width: 68px;--first-color: #4723D9;--first-color-light: #AFA5D9;--white-color: #F7F6FB;--body-font: 'Nunito', sans-serif;--normal-font-size: 1rem;--z-fixed: 100}*,::before,::after{box-sizing: border-box}body{position: relative;margin: var(--header-height) 0 0 0;padding: 0 1rem;font-family: var(--body-font);font-size: var(--normal-font-size);transition: .5s}a{text-decoration: none}.header{width: 100%;height: var(--header-height);position: fixed;top: 0;left: 0;display: flex;align-items: center;justify-content: space-between;padding: 0 1rem;background-color: var(--white-color);z-index: var(--z-fixed);transition: .5s}.header_toggle{color: var(--first-color);font-size: 1.5rem;cursor: pointer}.header_img{width: 35px;height: 35px;display: flex;justify-content: center;border-radius: 50%;overflow: hidden}.header_img img{width: 40px}.l-navbar{position: fixed;top: 0;left: -30%;width: var(--nav-width);height: 100vh;background-color: var(--first-color);padding: .5rem 1rem 0 0;transition: .5s;z-index: var(--z-fixed)}.nav{height: 100%;display: flex;flex-direction: column;justify-content: space-between;overflow: hidden}.nav_logo, .nav_link{display: grid;grid-template-columns: max-content max-content;align-items: center;column-gap: 1rem;padding: .5rem 0 .5rem 1.5rem}.nav_logo{margin-bottom: 2rem}.nav_logo-icon{font-size: 1.25rem;color: var(--white-color)}.nav_logo-name{color: var(--white-color);font-weight: 700}.nav_link{position: relative;color: var(--first-color-light);margin-bottom: 1.5rem;transition: .3s}.nav_link:hover{color: var(--white-color)}.nav_icon{font-size: 1.25rem}.show{left: 0}.body-pd{padding-left: calc(var(--nav-width) + 1rem)}.active{color: var(--white-color)}.active::before{content: '';position: absolute;left: 0;width: 2px;height: 32px;background-color: var(--white-color)}.height-100{height:100vh}@media screen and (min-width: 768px){body{margin: calc(var(--header-height) + 1rem) 0 0 0;padding-left: calc(var(--nav-width) + 2rem)}.header{height: calc(var(--header-height) + 1rem);padding: 0 2rem 0 calc(var(--nav-width) + 2rem)}.header_img{width: 40px;height: 40px}.header_img img{width: 45px}.l-navbar{left: 0;padding: 1rem 1rem 0 0}.show{width: calc(var(--nav-width) + 156px)}.body-pd{padding-left: calc(var(--nav-width) + 188px)}}
    #geocoder {
  position: absolute;
  top: 10px;
  left: 10px;
  z-index: 1000;
}

#restaurant-results {
  position: absolute;
  top: 60px;
  left: 10px;
  width: 300px;
  background-color: #fff;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  border-radius: 4px;
  padding: 10px;
  z-index: 1000;
  display: none;
}

#restaurant-results .result {
  padding: 5px 10px;
  border-bottom: 1px solid #ddd;
  cursor: pointer;
  transition: background-color 0.3s;
}

#restaurant-results .result:hover {
  background-color: #f5f5f5;
}

.sidebar-custom {
    background-color: #3904d9;

}
.navbar-custom {
    margin-left: 0px;

}

 </style>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" type="text/css">

  <script src="js/script_map.js" defer></script>
</head>
<body>
<header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i></div>
        <div class="navbar-header">
        <a class="navbar-brand ml-0" href="#">Spin A Meal</a>
      
        </div>
        <div class="header_img align-left"> <img src="images/spin_a_meal.png" alt=""> </div>
    </header>
    <div class="l-navbar sidebar-custom" id="nav-bar">
        <nav class="nav">
            <div> <div class="nav_list">
                <a href="dashboard3.php" class="nav_link active"> <i class='bx bx-map nav_icon'></i> <span class="nav_name">Dashboard</span> </a>
                <a href="roulette.php" class="nav_link"> <i class='bx bx-circle nav_icon'></i> <span class="nav_name">Users</span> </a>
                <a href="#" class="nav_link"> <i class='bx bx-message-square-detail nav_icon'></i> <span class="nav_name">Messages</span> </a>
                <a href="User_history.php" class="nav_link"> <i class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Bookmark</span> </a>
                </div>
            </div> 
            <a href="logout.php" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
            
        </nav>
    </div>
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <script type="module" >
 /**
 * @license
 * Copyright 2024 Google LLC. All Rights Reserved.
 * SPDX-License-Identifier: Apache-2.0
 */
// [START maps_place_nearby_search]
let map;
let userMarker; // Variabel untuk menyimpan marker lokasi pengguna

async function initMap() {
  const { Map, InfoWindow } = await google.maps.importLibrary("maps");

  // Mendapatkan lokasi pengguna saat ini menggunakan Geolocation API
  navigator.geolocation.getCurrentPosition(async (position) => {
    const userLocation = {
      lat: position.coords.latitude,
      lng: position.coords.longitude
    };

    map = new Map(document.getElementById("map"), {
      center: userLocation,
      zoom: 11,
      mapId: "DEMO_MAP_ID",
    });

    // Membuat marker kustom untuk lokasi pengguna
    userMarker = new google.maps.Marker({
      position: userLocation,
      map: map,
      icon: {
        url: 'https://developers.google.com/maps/documentation/javascript/examples/full/images/info-i_maps.png', // Ganti dengan URL gambar marker kustom Anda
        scaledSize: new google.maps.Size(40, 40) // Sesuaikan ukuran gambar marker kustom Anda
      },
      title: "Your Location"
    });

    // Memanggil fungsi nearbySearch dengan lokasi pengguna sebagai parameter
    await nearbySearch(userLocation);
  });
}

async function nearbySearch(userLocation) {
  //@ts-ignore
  const { Place, SearchNearbyRankPreference } = await google.maps.importLibrary(
    "places",
  );
  const { AdvancedMarkerElement } = await google.maps.importLibrary("marker");

  const request = {
    fields: ["displayName", "location", "businessStatus"],
    locationRestriction: {
      center: userLocation, // Menggunakan lokasi pengguna sebagai pusat pencarian
      radius: 500,
    },
    includedPrimaryTypes: ["restaurant"],
    maxResultCount: 5,
    rankPreference: SearchNearbyRankPreference.POPULARITY,
    language: "en-US",
    region: "us",
  };

  //@ts-ignore
  const { places } = await Place.searchNearby(request);

  if (places.length) {
    console.log(places);

    const { LatLngBounds } = await google.maps.importLibrary("core");
    const bounds = new LatLngBounds();

    // Menampilkan marker untuk setiap tempat yang ditemukan
    places.forEach((place) => {
      const markerView = new AdvancedMarkerElement({
        map,
        position: place.location,
        title: place.displayName,
      });

      bounds.extend(place.location);
      console.log(place);
    });
    map.fitBounds(bounds);
  } else {
    console.log("No results");
  }
}

initMap();
// [END maps_place_nearby_search]
    </script>
    <style>
        /**
 * @license
 * Copyright 2019 Google LLC. All Rights Reserved.
 * SPDX-License-Identifier: Apache-2.0
 */
/* [START maps_place_nearby_search] */
/* 
 * Always set the map height explicitly to define the size of the div element
 * that contains the map. 
 */
 #map {
  height: 100%;
}

/* 
 * Optional: Makes the sample page fill the window. 
 */
html,
body {
  height: 100%;
  margin: 0;
  padding: 0;
}

/* [END maps_place_nearby_search] */
    </style>
  </head>
  <body>
    <div id="map"></div>

    <!-- prettier-ignore -->
    <script>(g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})
        ({key: "AIzaSyCG42TcvzvW893Gom3uvSQdtD-qrNtA0fE", v: "beta"});</script>
  </body>
</html>
<!-- [END maps_place_nearby_search] -->