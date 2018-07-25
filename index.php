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
  
  var centrar = {lat: 21.6660159, lng: -98.6699083};
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 5, center: centrar});
  
  
  // var marker = new google.maps.Marker({position: centrar, map: map});
  var logoCWeb 		= 'https://comunicacionweb.com.mx/images/main-logo.png';
  var logoXHTWEB	= 'https://xhtweb.com.mx/wp-content/uploads/2016/07/xhtweb_transparente_1.png';
  
var iconCWeb = {
    url: logoCWeb, // url
    scaledSize: new google.maps.Size(100, 50), // scaled size
    /*
	origin: new google.maps.Point(0,0), // origin
    anchor: new google.maps.Point(0, 0) // anchor*/
};

var iconXHTWEB = {
    url: logoXHTWEB, // url
    scaledSize: new google.maps.Size(100, 100), // scaled size
	/*
    origin: new google.maps.Point(0,0), // origin
    anchor: new google.maps.Point(0, 0) // anchor */
};
  
  
  var cwebPM = {lat: 20.8635538, lng: -86.9022525};
  var cwebCDMX = {lat: 19.4890817, lng: -99.2057535};
  var xhtweb = {lat: 20.8698738, lng: -86.9654525};
  
  var cweb = '<h3>Comunicación <br/>Web</h3>';
  var cwebPMTXT = '<h3>Comunicación <br/>Web<br/>Puerto Morelos</h3>';
  var xhtwebTXT = '<h3>XHTWEB</h3>';
  
  
  var infowindowCWEB = new google.maps.InfoWindow({
    content: cweb
  });
  
  var infowindowXHTWEB = new google.maps.InfoWindow({
    content: xhtwebTXT
  });
  
  var infowindowCWEBPM = new google.maps.InfoWindow({
    content: cwebPMTXT
  });

  var markCWEB = new google.maps.Marker({
    position: cwebCDMX,
    map: map,
    title: 'Comunicación Web Ciudad de México', 
	icon: iconCWeb
  });
  
  markCWEB.addListener('click', function() {
    infowindowCWEB.open(map, markCWEB);
  });
  
  var markCWEBPM = new google.maps.Marker({
    position: cwebPM,
    map: map,
    title: 'Comunicación Web Puerto Morelos', 
	icon: iconCWeb
  });
    
	markCWEBPM.addListener('click', function() {
		infowindowCWEBPM.open(map, markCWEBPM);
	});
	
  var markXHTWEB = new google.maps.Marker({
    position: xhtweb,
    map: map,
    title: 'XHTWEB', 
	icon: iconXHTWEB
  });
    
	markXHTWEB.addListener('click', function() {
		infowindowXHTWEB.open(map, markXHTWEB);
	});
  
  
  
  
  
  
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