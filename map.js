		function initialize() {
			var myLatlng = new google.maps.LatLng(-7.870799, 112.526100);
  			var mapOptions = {
    		zoom: 13,
    		center: myLatlng
  			}
  			var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  			var marker = new google.maps.Marker({
      		position: myLatlng,
      		map: map,
      		title: 'Hello World!'
  			});
		}

			google.maps.event.addDomListener(window, 'load', initialize);

