
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-NoP20OejFNd_gxMizvmRCDHwRPg0gJI" ></script>
<style type="text/css">
    #map {
      height: calc(70vh);
    }

    
</style>
<script>

    function initMap() {
      
      //var position = ;

      // var locations = ;

      var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: 13.9896219 , lng: 100.5778827}, 
        zoom: 15
        });

      @foreach($dealers as $item)
      var marker = new google.maps.Marker({
        position: {lat: {{ $item->latitude }} , lng: {{ $item->longitude }} }, 
        map: map,
      });     

      /*google.maps.event.addListener(marker,'click',function(){
        var info = new google.maps.InfoWindow({
          content : '<div style = "font-size:15px;"> marker </div>'
        });
        info.open(map , marker);
      });*/
      @endforeach

    }

    google.maps.event.addDomListener(window, 'load', initMap);

</script>
<div id="map"></div>
