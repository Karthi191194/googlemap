/* 
Navigate to Google API Console to get API key
CREDENTIALS > CREATE CREDENTIALS > API KEY

Navigate to developers.google.com/maps/ or cloud.google.com/maps-platform/

If API is not working enable map and gecode in the below URL

https://console.developers.google.com/projectselector/apis/library

https://console.developers.google.com/projectselector/apis/api/geocoding_backend

*/

function loadMap() {
	var myLatLng = {lat: 13.0827, lng: 80.2707};

	var map = new google.maps.Map(document.getElementById('map'), {
          center: myLatLng,
          zoom: 12
	});

// Create a marker and set its position.
	var marker = new google.maps.Marker({
          map: map,
          position: myLatLng,
          title: 'Hello World!'
	});
	
//getting all locations with lat and long null from db
var loc_datas = document.getElementById("loc-data").innerHTML;
console.log(loc_datas);	
}

