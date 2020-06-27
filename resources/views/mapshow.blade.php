
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-NoP20OejFNd_gxMizvmRCDHwRPg0gJI" ></script>
<style type="text/css">
    #map {
      height: 100%;
    }

    
</style>
<script>

    function initMap() {
      
      //var position = ;

      // var locations = ;

      var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: {{ $dealer->latitude }} , lng: {{ $dealer->longitude }}}, 
        zoom: 15
        });

      var marker = new google.maps.Marker({
        position: {lat: {{ $dealer->latitude }} , lng: {{ $dealer->longitude }} }, 
        map: map,
      });     

      google.maps.event.addListener(marker,'click',function(){
        var info = new google.maps.InfoWindow({
          content : '<div style = "font-size:15px;"> {{ $dealer->name_dealers }}<br>{{ $dealer->location }} </div>'
        });
        info.open(map , marker);
      });

    }

    google.maps.event.addDomListener(window, 'load', initMap);

</script>
<div id="map"></div>
