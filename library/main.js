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

		var mymap_parent = L.map('map_parent').setView([50.7185525,4.6102546], 20);

		L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
		    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		    maxZoom: 22,
		    id: 'mapbox.streets',
		    accessToken: 'pk.eyJ1Ijoib2N0b2J1cyIsImEiOiJjanRrcmt2cnQxdTU5NDRteGluMnpxM2p1In0.Zm24PvVRygwc5BoipCjvMg'
		}).addTo(mymap_parent);

		var i = 0;

		setInterval(function(){



			var greenIcon = L.icon({
			    iconUrl: 'marker_start.png',
			    shadowUrl: 'marker_start_shadow.png',
			    iconSize:     [38, 95],
			    shadowSize:   [50, 64],
			    iconAnchor:   [22, 94],
			    shadowAnchor: [4, 62],
			    popupAnchor:  [-3, -76]
			});			

			$.getJSON('data/trajet.php').done(function(response) {
				L.circle([response.lat,response.lng], {
				    color: 'red',
				    fillColor: '#f03',
				    fillOpacity: 1,
				    radius: 1
				}).addTo(mymap_parent);
				mymap_parent.panTo([response.lat, response.lng]);
			});

		},2000);

	}

});
