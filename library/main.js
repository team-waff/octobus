/*  ==========================================================================
    Global
    ==========================================================================  */

var domain = $("body").data("domain");
var baseroot = $("body").data("baseroot");

$(document).ready(function() {

/*  ==========================================================================
    Login
    ==========================================================================  */

    $(".js_login").click(function(e){
    	e.preventDefault();
    	var error = 0;
    	$(".login__form").find(".form__input").each(function(){
    		if($(this).val()==""){
    			error++;
    			$(this).parents(".form__line").addClass("form__line--error");
    		} else {
    			$(this).parents(".form__line").removeClass("form__line--error");
    		}
    	});
   		if(error==0){
    		if($("input[name=username]").val()=="enfant"){
    			window.location.href = "enfant.php";
    		} else {
    			window.location.href = "parent_choice.php";
    		}
		} 	
    });

/*  ==========================================================================
    Parent view : children
    ==========================================================================  */

    function displayChildren(){
	    $.getJSON('app/accountable/4').done(function(response) {
	    	console.info(response,1);
	    	// info parent
	    	$(".json_listing_parent__item-firstname").text(response.firstname);
	    	$(".json_listing_parent__item-lastname").text(response.name);
	    	// list children
	    	for (var i = 0, len = response.childs.length; i < len; i++) {
	    		var cloned = $(".json_listing_children__item").last().clone(true);
	    		cloned.appendTo(".json_listing_children")
	    		.attr('data-id',response.childs[i].pk)
	    		.find(".json_listing_children__item-firstname").text(response.childs[i].firstname)
	    		.parents(".json_listing_children__item")
	    		.find(".json_listing_children__item-lastname").text(response.childs[i].name)
	    		.parents(".json_listing_children__item")
	    		.find(".json_listing_children__item-picture").attr("src", "graphics/avatar_"+response.childs[i].avatar+".png");
	    	}
	    	// remove last clone
	    	$(".json_listing_children").find(".json_listing_children__item").first().remove();
	    });
	}

	if($(".json_listing_children").is(":visible")){
		displayChildren();
	}

/*  ==========================================================================
    Parent view : child detail
    ==========================================================================  */

    $('body').on('click', '.js_redirect_child', function (e){
    	e.preventDefault();
    	var id = $(this).parents(".json_listing_children__item").data("id");
    	window.location.href = "enfant.php?id="+id;
    })

/*  ==========================================================================
    Parent view : map
    ==========================================================================  */

	function initMapParent(){

    	$.getJSON('data/trajet.php').done(function(response) {

    		// start coords

    		var start_lat = response.start_lat;
    		var start_lng = response.start_lng;

    		// init

			var mymap_parent = L.map('map_parent').setView([start_lat,start_lng], 18);

			L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
			    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
			    maxZoom: 22,
			    id: 'mapbox.streets',
			    accessToken: 'pk.eyJ1Ijoib2N0b2J1cyIsImEiOiJjanRrcmt2cnQxdTU5NDRteGluMnpxM2p1In0.Zm24PvVRygwc5BoipCjvMg'
			}).addTo(mymap_parent);

			// start icon

			var start_icon = L.icon({
			    iconUrl: 'graphics/marker_start.png',
			    shadowUrl: 'graphics/shadow.png',
			    iconSize:     [50, 50],
			    shadowSize:   [50, 50],
			    iconAnchor:   [25, 25],
			    shadowAnchor: [25, 25],
			    popupAnchor:  [-3, -76]
			});

			// moving icon

			var moving_icon = L.icon({
			    iconUrl: 'graphics/marker_moving.png',
			    shadowUrl: 'graphics/shadow.png',
			    iconSize:     [50, 50],
			    shadowSize:   [50, 50],
			    iconAnchor:   [25, 25],
			    shadowAnchor: [25, 25],
			    popupAnchor:  [-3, -76]
			});	

			var marker_bus = L.marker([start_lat,start_lng], {icon: start_icon}).addTo(mymap_parent);

			// refresh

			setInterval(function(){

				$.getJSON('data/trajet.php').done(function(response) {

					var status_bus = response.status;
					console.log(status_bus);		

					if(status_bus=="riding"){

						// remove last marker then recreate & update pos
						mymap_parent.removeLayer(marker_bus);
						marker_bus = L.marker([response.now_lat,response.now_lng], {icon: start_icon}).addTo(mymap_parent);

						L.circle([response.now_lat,response.now_lng], {
						    color: 'red',
						    fillColor: '#f03',
						    fillOpacity: 1,
						    radius: 2
						}).addTo(mymap_parent);
						mymap_parent.panTo([response.now_lat, response.now_lng]);

					}

				});

			},2000);

    	});

	}

	if($("body").hasClass("page_parent")){
		initMapParent();
	}

});
