<?php 
include "global.php";
require "map.php";
//getting all locations with lat and long null
$latLongBlank = new Map;
$result = $latLongBlank->getLocationsBlankLatLong();
$locations = array();
while($data = mysqli_fetch_array($result,MYSQLI_ASSOC)){
	$locations[] = $data;
}
echo "<div id='loc-data'>".json_encode($locations)."</div>";
?>

<div class="container map-container">
	<div id="map"></div>
</div>

<!-- google map script -->
<!-- once the key is verified it will call back the loadMap function -->

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCLGguLQt3hxR_0b-F2AX-GIWDA2R5PtCk&callback=loadMap"></script>