<!DOCTYPE html>
<html>
  <head>
    <style>
      #map {
        height: 480px;
        width: 640px; 
       }
    </style>
  </head>
  <body>
    <h3>Google Maps Demo</h3>
    <!--The div element for the map -->
    <div id="map"></div>
    <script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var centrar = {lat: 22.5848894, lng: -108.6699083};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 5, center: centrar});
  // The marker, positioned at Uluru
  // var marker = new google.maps.Marker({position: uluru, map: map});
}
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQcBMevHC_wfrYNyzr2RKv5mrPiBhtGt4&callback=initMap">
    </script>
  </body>
</html>

<!-- clave API:  -->