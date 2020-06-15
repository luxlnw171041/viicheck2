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
        //google.maps.event.addDomListener(window, 'load', init);
        var map;
        var overlay;
        USGSOverlay.prototype = new google.maps.OverlayView();

        //var src = "https://weather.ckartisan.com/sample/kml/test1.kmz";
        // var src = "https://www.rtfloodbma.com/storage/uploads/xTBpcDCjX4c2DtsDFFi1imtBTlRo3ljTQBWJNZZV.zip ";
        //var src = "https://weather.ckartisan.com/sample/kml/2D_Base.kmz";
        // /2D_Base.kmz
        //var src = "https://www.rtfloodbma.com/reports/2019-08-14_10-00-00/kml/1RG.kmz";
        //var src = "https://csincube.com/us_states.kml";
        //var src = 'https://developers.google.com/maps/documentation/javascript/examples/kml/westcampus.kml';

        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
            //center: {lat: 21.3143328800798, lng: 105.603779579014},
            center: {lat: 13.9954868 , lng: 100.5675586},
            //13.751288, 100.628847
            zoom: 15
            });

            // var kmlLayer = new google.maps.KmlLayer(src, {
            // suppressInfoWindows: true,
            // preserveViewport: true,
            // map: map
            // });
            // console.log("kmlLayer : " , kmlLayer);

            // //OVERLAY                                        

            // var bounds = new google.maps.LatLngBounds(
            //     new google.maps.LatLng(12.75026910981639, 99.73642387358632),
            //     new google.maps.LatLng(14.91950740666351, 101.9563556674292));

                

            // // The photograph is courtesy of the U.S. Geological Survey.                                       
            // var srcImage = 'http://weather.bangkok.go.th/Images/Radar/NjKML/njRadarOnGoogle.png';

            // // The custom USGSOverlay object contains the USGS image,
            // // the bounds of the image, and a reference to the map.
            // overlay = new USGSOverlay(bounds, srcImage, map);
            
        }
        function USGSOverlay(bounds, image, map) {
            // Initialize all properties.
            this.bounds_ = bounds;
            this.image_ = image;
            this.map_ = map;

            // Define a property to hold the image's div. We'll
            // actually create this div upon receipt of the onAdd()
            // method so we'll leave it null for now.
            this.div_ = null;

            // Explicitly call setMap on this overlay.
            this.setMap(map);
        }
        google.maps.event.addDomListener(window, 'load', initMap);
    </script>
  </head>
  <body>
    <div id="map"></div>
  </body>
</html>