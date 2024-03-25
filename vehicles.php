<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/vehicles.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

</head>
<body>
    <!-- header -->
    <header>
        <div class="logo"></div>
        <div class="header-links-wrap">
            <div class="header-links">
                <a href="ride.html">Find Ride</a>
                <a href="#support">Support</a>
                <a href="#footer">Contact Us</a>
            </div>
            <div class="user">
                <a href="authentication/login.html" style="color: black;" >U</a>
            </div>
        </div>
    </header>

    <!-- map show -->
    <div class="map-wrap" >
        <!-- <img src="assets/map.png" alt="" class="map">
        <img src="assets/bike.png" alt="" class="mark" style="top: 0;left: 500px;">
        <img src="assets/bike.png" alt="" class="mark" style="top: 30px;left: 450px;">
        <img src="assets/bike.png" alt="" class="mark" style="top: 200px;left: 670px;">
        <img src="assets/bike.png" alt="" class="mark" style="top: 210px;left: 670px;">
        <img src="assets/bike.png" alt="" class="mark" style="top: 150px;left: 680px;">
        <div class="you" style="top: 120px;left: 700px;">YOU</div> -->
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



<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>


<script>
    var map = L.map('map').setView([51.505, -0.09], 13);
    var vehiclelist=[[51.510, -0.09711],[51.515, -1.09822],[51.520, -0.09112]]
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);



for (item in vehiclelist){
    L.marker(vehiclelist[item]).addTo(map)
    .bindPopup(`${item}  location`)
    .openPopup();

    console.log(item)
}
L.marker([51.505, -0.09]).addTo(map)
    .bindPopup('Your location')
    .openPopup();

map.setView([51.505, -0.09], 13);
</script>


