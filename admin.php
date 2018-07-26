<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml">
<head>
<META HTTP-EQUIV="Content-Type" CONTENT="text/html;charset=ISO-8859-1">
<title>Mapa de Google</title>
<script src="http://maps.google.com/maps?file=api&v=2&key=AIzaSyAQcBMevHC_wfrYNyzr2RKv5mrPiBhtGt4"
type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[

function load() {
   if (GBrowserIsCompatible()) {
      var map = new GMap2(document.getElementById("map"));   
      map.setCenter(new GLatLng(19.4890817,-99.2057535),5);   
      map.addControl(new GLargeMapControl());
      map.setMapType(G_NORMAL_MAP); 
      
      var point = new GPoint (-99.2057535,19.4890817);
      var marker = new GMarker(point); 
      map.addOverlay(marker); 
      
      GEvent.addListener(map, "click", function (overlay,point){
         if (point){
            marker.setPoint(point);
            document.posicion.x.value=point.x
            document.posicion.y.value=point.y
         }
      });
   }
}

window.onload=load
//]]>
</script>

</head>

<body>
   <div id="map" style="width: 765px; height: 556px"></div>
   <div id="formulario" style="margin: 10px">
   <form action="#" id="posicion" name="posicion">
   X: <input type="text" id="x" name="x" value="" />
   <br />
   Y: <input type="text" id="y" name="y" value="" />
   </form>
   </div>
   <br />
<br />

</body>
</html>