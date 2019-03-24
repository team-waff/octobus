/*  ==========================================================================
    Global
    ==========================================================================  */

var domain = $("body").data("domain");
var baseroot = $("body").data("baseroot");

$(document).ready(function() {

/*  ==========================================================================
    Child view : get name
    ==========================================================================  */

    if($(".enfant_detail_name").is(":visible")){
    	$.getJSON('app/child/'+id_enfant).done(function(response) {
    		$(".enfant_detail_name").text(response.firstname + " " + response.name);
    		$(".enfant_detail_picture").attr("src","graphics/avatar_"+response.avatar+".png");
    	});
    }

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
    			window.location.href = "enfant.php?id=14";
    		} else {
    			window.location.href = "parent_choice.php";
    		}
		} 	
    });

	  $(".login__form").on('keyup keypress', function (e) {
	    var keyCode = e.keyCode || e.which;
	    if (keyCode == 13) {
	      e.preventDefault();
	      $(".js_login").trigger("click");
	      return false;
	    }
	  });

/*  ==========================================================================
    Parent view : children
    ==========================================================================  */

    function displayChildren(){
	    $.getJSON('app/accountable/4').done(function(response) {
	    	console.info(response,1);
	    	// info parent
	    	$(".js_redirect_parent").attr('data-id',response.pk);
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
    });

/*  ==========================================================================
    Parent view : parent detail
    ==========================================================================  */

    $('body').on('click', '.js_redirect_parent', function (e){
    	e.preventDefault();
    	var id = $(this).data("id");
    	window.location.href = "parent.php?id="+id;
    });

/*  ==========================================================================
    Parent view : active children
    ==========================================================================  */

    function displayActiveChildren(){
	    $.getJSON('app/accountable/4').done(function(response) {

	    	// list children
	    	for (var i = 0, len = response.childs.length; i < len; i++) {
	    		var cloned = $(".json_children_active__item").last().clone(true);
	    		cloned.appendTo(".json_children_active")
	    		.attr('data-id',response.childs[i].pk)
	    		.find(".json_children_active-firstname").text(response.childs[i].firstname)
	    		.parents(".json_children_active__item")
	    		.find(".json_children_active-lastname").text(response.childs[i].name)
	    		.parents(".json_children_active__item")
	    		.find(".json_children_active-picture").attr("src", "graphics/avatar_"+response.childs[i].avatar+".png");
	    	}

	    	// remove last clone
	    	$(".json_children_active").find(".json_children_active__item").first().remove();

	    	// get rides for each child
    		$(".json_children_active__item").each(function(){
    			var child_id = $(this).data("id");
    			$.getJSON('app/child/'+child_id).done(function(response) {
    				console.info(response,1);
    				for (var i = 0, len = response.rides.length; i < len; i++) {
    					var n = new Date(response.rides[i].start_time);
	    				var cloned_child = $(".json_children_active__item[data-id="+child_id+"]").find(".json_trajets .json_trajet_active").last().clone(true);
			    		cloned_child.appendTo(".json_children_active__item[data-id="+child_id+"] .json_trajets")
			    		.attr('data-id',response.rides[i].course.pk)
			    		.attr('data-status',response.rides[i].status)
			    		.attr('data-name',response.firstname)
			    		.attr('data-avatar',response.avatar)
			    		.find(".json_trajet_active_start").text(n.getDate() + "/" + n.getMonth() + " - " + n.getHours() + ":" + n.getMinutes())
			    		.parents(".json_trajet_active")
			    		.find(".json_trajet_active_place").text(response.rides[i].course.name)
			    		.parents(".json_trajet_active")
			    		.find(".json_trajet_active_status").attr('data-status',response.rides[i].status);
		    		}
    			});
    		});

	    });
	}

	if($(".json_children_active").is(":visible")){
		displayActiveChildren();
	}

    $('body').on('click', '.json_trajet_active', function (e){
    	e.preventDefault();
    	var status = $(this).data("status");
    	var id = $(this).data("id");
    	var name = $(this).data("name");
    	var avatar = $(this).data("avatar");
    	$(".json_map_name").text(name);
    	$(".json_map_avatar").attr("src","graphics/avatar_"+avatar+".png");
    	if(status=="running" || status=="start"){
			initMapParent(id,true);
			initMapParent(id,false);
    	}
    });

/*  ==========================================================================
    Parent view : open register
    ==========================================================================  */

	var opencomplete_parent = function(){
	    $(".global--parent").removeClass("animating");
	    // enter_animate();
	};

	var closecomplete_parent = function(){
	    $(".global--parent").removeClass("animating");
	    leave_animate_parent();
	};

	function enter_animate_parent(){
		var tl_enter = new TimelineMax();
		var element_enter = $(".open .enter-anim");
		tl_enter.staggerFrom(element_enter, .3, { left: -60, autoAlpha:0}, 0.1);
	}

	function leave_animate_parent(){
		var tl_enter = new TimelineMax();
		var element_enter = $(".enter-anim");
		tl_enter.set(element_enter, { left: 0, autoAlpha:1});
	}

    $(".js_open_register").click(function(e){
    	e.preventDefault();
		if (!$(".global--parent").hasClass("animating")) {
			$(".global--enfant").addClass("animating");
			var tl = new TimelineMax();
			var element = $(".slide[data-slide=select]");
			element.addClass('open');
			enter_animate_parent();
			tl.to(element, .5, { left: 0, ease: Power3.easeOut, onComplete: opencomplete_parent });
		}
    });

	function registerOk(direction, away){
		if (!$(".global--parent.animating").length) {
			$(".global--parent").addClass("animating");
			var tl = new TimelineMax();
			var element = away;
			element.removeClass('open');
			tl.to(element, .3, { css : {left: "100%"}, ease: Power3.easeIn, onComplete: closecomplete_parent });
		}
	}

/*  ==========================================================================
    Parent view : notif
    ==========================================================================  */

    $(".notif").click(function(){
    	if($(this).hasClass("notif--visible")){
    		$(this).removeClass("notif--visible");
    	}
    });

/*  ==========================================================================
    Parent view : back view
    ==========================================================================  */

    $(".btn--return-parent").click(function(e){
    	e.preventDefault();
    	$(".parent__view--listing").addClass("parent__view--active");
		$(".parent__view--map").removeClass("parent__view--active");
    });

/*  ==========================================================================
    Parent view : map
    ==========================================================================  */

	function initMapParent(id,kill){

		$(".parent__view--listing").removeClass("parent__view--active");
		$(".parent__view--map").addClass("parent__view--active");

		// init

		var mymap_parent = L.map('map_parent', { zoomControl:false });

		// kill

		if(kill){
			mymap_parent.off();
			mymap_parent.remove();
			return false;
		}

    	$.getJSON('app/course/1').done(function(response) {

    		// start coords

    		var start_lat = response.start_pos.lat;
    		var start_lng = response.start_pos.lng;

    		// end coords

    		// var end_lat = response.end_lat;
    		// var end_lng = response.end_lng;

    		// init

    		mymap_parent.setView([start_lat,start_lng], 16);

			L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
			    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
			    id: 'mapbox.streets',
			    zoomControl:false,
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

			// end icon

			var end_icon = L.icon({
			    iconUrl: 'graphics/marker_end.png',
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


			// create end marker & bus marker

			L.marker([response.points[response.points.length-1].lat,response.points[response.points.length-1].lng], {icon: end_icon}).addTo(mymap_parent);
			var marker_bus = L.marker([start_lat,start_lng], {icon: moving_icon}).addTo(mymap_parent);

			// create route with all points

			for (var i = 0, len = response.points.length; i < len; i++) {
				L.circle([response.points[i].lat,response.points[i].lng], {
				    color: '#2297c9',
				    fillColor: '#fff',
				    fillOpacity: 1,
				    radius: 2
				}).addTo(mymap_parent);				
			}

			// refresh

			var is_started = false;

			// move bus

			var i_inter = 0;

			status_bus = "riding";

			interval = setInterval(function(){

				var now_lat = response.points[i_inter].lat;
				var now_lng = response.points[i_inter].lng;

				if(status_bus=="riding"){

					if(!is_started){
						L.marker([response.start_pos.lat,response.start_pos.lng], {icon: start_icon}).addTo(mymap_parent);
					}

					is_started = true;

					// remove last marker then recreate & update pos
					mymap_parent.removeLayer(marker_bus);
					marker_bus = L.marker([now_lat,now_lng], {icon: moving_icon}).addTo(mymap_parent);

					mymap_parent.panTo([now_lat, now_lng]);

				}	

					console.log(status_bus);
				// finish

				if(i_inter==response.points.length-1){
					status_bus = "stop";
					finishRide();
					window.clearInterval(interval);
				} else {
					i_inter++;			
				}


			},1500);

    	});

	}

/*  ==========================================================================
    Parent view : select register
    ==========================================================================  */

    if($("body").hasClass("page_parent")){

    	// populate selects

    	$.getJSON('app/accountable/4').done(function(response) {
    		for (var i = 0, len = response.childs.length; i < len; i++) {
				$('#select_child').append('<option value="'+response.childs[i].pk+'">' + (response.childs[i].firstname ? response.childs[i].firstname : 'Empty') + '</option>');
    		}
			$('#select_child').selectric('refresh');
    	});

    	$.getJSON('app/ride').done(function(response) {
    		console.info(response,1);
    		for (var i = 0, len = response.length; i < len; i++) {
				$('#select_day').append('<option value="'+response[i].pk+'">' + (response[i].start_time ? response[i].start_time : 'Empty') + '</option>');
    		}
			$('#select_day').selectric('refresh');
    	});
	}

/*  ==========================================================================
    Parent view : finish ride
    ==========================================================================  */

	function finishRide(){
		$(".notif").addClass("notif--visible");
	}

});
