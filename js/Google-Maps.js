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
		var $lat = 28.677915,
			$long = -106.077278,
			$title = 'Rincón de los Cerezos';
	} else if( $('#googleMap').attr('position') == 'encinos-oriente' ) {
		var $lat = 28.671897,
			$long = -105.937549,
			$title = 'Los Encinos Oriente';
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

	var marker = new google.maps.Marker({
		position: new google.maps.LatLng($lat, $long),
		map: map,
		title: $title,
		url: 'http://maps.google.com/maps?q=loc:'+String($lat)+','+String($long)
	});

	google.maps.event.addListener(marker, 'click', function() {
		window.location.href = this.url;
	});
}