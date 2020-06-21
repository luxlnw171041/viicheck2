<!DOCTYPE html>
<html>
  <head>
    <title>Map</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-NoP20OejFNd_gxMizvmRCDHwRPg0gJI" ></script>
    <style type="text/css">
      #map {
        height: 100%;
      }

      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <script>

        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 13.9896219 , lng: 100.5778827}, 
            zoom: 15
            });
        }

        google.maps.event.addDomListener(window, 'load', initMap);

    </script>
  </head>
  <body>
    <div id="map"></div>
  </body>
</html>