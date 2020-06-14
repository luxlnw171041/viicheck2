<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3I4EnpJKFV_LHMXwiRoCMIUWGiDAaxR4&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
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
      (function(exports) {
        "use strict";

        function initMap() {
          exports.map = new google.maps.Map(document.getElementById("map"), {
            center: {
              lat: 13.397,
              lng: 100.644
            },
            zoom: 8
          });
        }

        exports.initMap = initMap;
      })((this.window = this.window || {}));
    </script>
  </head>
  <body>
    <div id="map"></div>
  </body>
</html>