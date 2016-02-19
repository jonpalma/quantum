var map, draggable;
$(document).ready(function () {
	google.maps.event.addDomListener(window, 'load', initialize);
});

function initialize() {
	if( $('#googleMap').attr('position') == 'central' ) {
		var $lat = 28.674548,
			$long = -106.079630,
			$title = 'Quantum Desarollos';
	} else if( $('#googleMap').attr('position') == 'america-latina' ) {
		var $lat = 28.680628,
			$long = -106.094501,
			$title = 'América Latina';
	} else if( $('#googleMap').attr('position') == 'rincon-cerezos' ) {
		var $lat = 28.674548,
			$long = -106.079630,
			$title = 'Rincón de los Cerezos';
	}
	
	var map_canvas = document.getElementById('googleMap');

	var map_options = {
		center: new google.maps.LatLng($lat, $long),
		zoom: 15,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		scrollwheel: false,
		draggable: !("ontouchend" in document)
	};

	map = new google.maps.Map(map_canvas, map_options);

	var markerChihuahua = new google.maps.Marker({
		position: new google.maps.LatLng($lat, $long),
		map: map,
		title: $title
	});
}