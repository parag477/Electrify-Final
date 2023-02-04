<?php
    // $json = file_get_contents('https://geolocation-db.com/json');
    // $data = json_decode($json);
    // $longitude = $data->longitude;
    // $latitude = $data->latitude;
    // $ip = $data->IPv4;
    // echo $longitude;
    // echo "<br>";
    // echo $latitude;
    // echo "<br>";
    // echo $ip;

    $latitude = 28.458887;
    $longitude = 77.2967776;
    $ip = '136.232.148.242';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Display navigation directions</title>
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
<link href="https://api.mapbox.com/mapbox-gl-js/v2.12.0/mapbox-gl.css" rel="stylesheet">
<script src="https://api.mapbox.com/mapbox-gl-js/v2.12.0/mapbox-gl.js"></script>
<style>
body { margin: 0; padding: 0; }
#map { position: absolute; top: 0; bottom: 0; width: 100%; }
</style>



<script>
        function clickHandler() {
            var img1 = $$("input")[0].value;

            var r = new Request.JSON({
                'url: "http://localhost/EV%20Station/maps.php",
                'method': 'post',
                'onComplete': function(success) { alert('AJAX call status: ' + (success ? 'succeeded': 'failed!'); },
                'onFailure': function() { alert('Could not contact server'); },
                'data': 'img1=' + img1
            }).send();
}
</script>



</head>
<body>
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.1/mapbox-gl-directions.js"></script>



<!-- <script src="fuck.js"></script> -->




<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-directions/v4.1.1/mapbox-gl-directions.css" type="text/css">
<div id="map"></div>

<script>
	mapboxgl.accessToken = 'pk.eyJ1Ijoic2hpdnU3ODg5IiwiYSI6ImNsZGhkbGdhbzA4Z28zd21lMHR1ZXNpbmEifQ.3PxQZmLwdla0ZFL66b8-nw';
    const map = new mapboxgl.Map({
        container: 'map',
        // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
        style: 'mapbox://styles/mapbox/streets-v12',
        // center: [-79.4512, 43.6568],
        center: [<?php echo $longitude; ?>, <?php echo $latitude; ?>],
        zoom: 10,
        // attributionControl: false
    });

    const marker = new mapboxgl.Marker({color: "blue"})
    .setLngLat([78.13413,28.48830])
    .addTo(map);

    const marker2 = new mapboxgl.Marker({color: "green"})
    .setLngLat([77.20552,28.57735])
    .addTo(map);

    const marker3 = new mapboxgl.Marker({color: "orange"})
    .setLngLat([77.96283,27.39904])
    .addTo(map);

    const marker4 = new mapboxgl.Marker({color: "brown"})
    .setLngLat([77.44367,28.70153])
    .addTo(map);

    const marker5 = new mapboxgl.Marker({color: "black"})
    .setLngLat([77.44367,28.70153])
    .addTo(map);

    const marker6 = new mapboxgl.Marker({color: "grey"})
    .setLngLat([77.44954,28.41413])
    .addTo(map);






    map.addControl(
        new MapboxDirections({
            accessToken: mapboxgl.accessToken
        }),
        'top-left'
    );

    map.addControl(
        new mapboxgl.GeolocateControl({
            positionOptions: {
                enableHighAccuracy: true
            },
        // When active the map will receive updates to the device's location as it changes.
        trackUserLocation: true,
        // Draw an arrow next to the location dot to indicate which direction the device is heading.
        showUserHeading: true
        })
    );
</script>
</body>
</html>
