/*  ==========================================================================
    Global
    ==========================================================================  */

var domain = $("body").data("domain");
var baseroot = $("body").data("baseroot");

$(document).ready(function() {

/*  ==========================================================================
    Parent view : map
    ==========================================================================  */

    if($(".global--parent").is(":visible")){

    	$.getJSON('data/trajet.php').done(function(response) {

    		// start coords

    		var start_lat = response.start_lat;
    		var start_lng = response.start_lng;

    		// init

			var mymap_parent = L.map('map_parent').setView([start_lat,start_lng], 20);

			L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
			    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
			    maxZoom: 22,
			    id: 'mapbox.streets',
			    accessToken: 'pk.eyJ1Ijoib2N0b2J1cyIsImEiOiJjanRrcmt2cnQxdTU5NDRteGluMnpxM2p1In0.Zm24PvVRygwc5BoipCjvMg'
			}).addTo(mymap_parent);

			// start icon

			var start_icon = L.icon({
			    iconUrl: 'graphics/marker_start.png',
			    shadowUrl: 'graphics/marker_start_shadow.png',
			    iconSize:     [50, 50],
			    shadowSize:   [50, 50],
			    iconAnchor:   [25, 25],
			    shadowAnchor: [25, 25],
			    popupAnchor:  [-3, -76]
			});	

			L.marker([start_lat,start_lng], {icon: start_icon}).addTo(mymap_parent);

			// refresh

			setInterval(function(){

					$.getJSON('data/trajet.php').done(function(response) {

						var status_bus = response.status;
						console.log(status_bus);		

						if(status_bus=="riding"){

							L.circle([response.now_lat,response.now_lng], {
							    color: 'red',
							    fillColor: '#f03',
							    fillOpacity: 1,
							    radius: 0.2
							}).addTo(mymap_parent);
							mymap_parent.panTo([response.now_lat, response.now_lng]);

						}

					});

			},2000);

    	});

	}

});
