<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/vehicles.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

</head>
<body>
    <?php require("req/header.php")?>

    <!-- map show -->
    <div class="map-wrap" >
        <div id="map" style="height: 50vh; width:  100vh; border-radius: 5vh;"></div>
        
    </div>
    
    <div class="discription" >
        <fieldset class="discription-group">
            <legend>You</legend>
            This marker that dipicts your location on the map
        </fieldset>
        <fieldset class="discription-group">
            <legend>Bike</legend>
            This marker shows the currently available bikes on the map near you
        </fieldset>
    </div>
    
    <!-- scanner -->
    <div  class="scanner-link" >
        <a href="scanner.html">
            <div class="scanner-wrap" >
            </div>
        </a>
    </div>
</body>
</html>


<script>
//     var map = L.map('map').setView([51.505, -0.09], 13);
//     var vehiclelist=[[51.510, -0.09711],[51.515, -1.09822],[51.520, -0.09112]]
// L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
//     attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
// }).addTo(map);



// for (item in vehiclelist){
//     L.marker(vehiclelist[item]).addTo(map)
//     .bindPopup(`${item}  location`)
//     .openPopup();

//     console.log(item)
// }
// L.marker([51.505, -0.09]).addTo(map)
//     .bindPopup('Your location')
//     .openPopup();

// map.setView([51.505, -0.09], 13);

    var map = L.map('map', {center: [51.505, -0.09],zoom: 13});
    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', { maxZoom: 19, attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'}).addTo(map);
    navigator.geolocation.watchPosition(sucess,error);

    let marker,circle,zoomed;

    function sucess(pos){
        const lat = pos.coords.latitude;
        const lng = pos.coords.longitude;
        const accuracy = pos.coords.accuracy;

        if(marker){
            map.removeLayer(marker);
            map.removeLayer(circle);
        }
        
        marker = L.marker([lat,lng]).addTo(map)
        circle = L.circle([lat,lng],{radius:accuracy}).addTo(map);

        if(!zoomed){
            zoomed = map.fitBounds(circle.getBounds());
        }
        map.setView([lat,lng]);
    }

    function error(err){
        if(err.code===1){
            alert("Please allow geolocation access");
        }
        else{
            alert("Cannot get user location");
        }
    }

</script>

<!-- oskm ipoo hthn jdtp -->
