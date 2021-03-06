/*  ==========================================================================
    Global
    ==========================================================================  */

var domain = $("body").data("domain");
var baseroot = $("body").data("baseroot");

$(document).ready(function() {

/*  ==========================================================================
    Slide
    ==========================================================================  */

	var opencomplete = function(){
	    $(".global--enfant").removeClass("animating");
	    // enter_animate();
	};

	var closecomplete = function(){
	    $(".global--enfant").removeClass("animating");
	    leave_animate();
	};

	function enter_animate(){
		var tl_enter = new TimelineMax();
		var element_enter = $(".open .enter-anim");
		tl_enter.staggerFrom(element_enter, .3, { left: -60, autoAlpha:0}, 0.1);
	}

	function leave_animate(){
		var tl_enter = new TimelineMax();
		var element_enter = $(".enter-anim");
		tl_enter.set(element_enter, { left: 0, autoAlpha:1});
	}

	function openslide(direction){
		if (!$(".global--enfant.animating").length) {
			$(".global--enfant").addClass("animating");
			var tl = new TimelineMax();
			var element = $(".slide[data-slide="+direction+"]");
			element.addClass('open');
			enter_animate();
			if (direction == 'select') {
				// show_select_child('John', 'terry');
			}
			tl.to(element, .5, { left: 0, ease: Power3.easeOut, onComplete: opencomplete });
		}
	}

	function closeslide(direction, away){
		if (!$(".global--enfant.animating").length) {
			$(".global--enfant").addClass("animating");
			var tl = new TimelineMax();
			var element = away;
			element.removeClass('open');
			tl.to(element, .3, { css : {left: "100%"}, ease: Power3.easeIn, onComplete: closecomplete });
		}
	}

	$(".btn_slide").click(function(e){
		e.preventDefault();
		var direction = $(this).data("direction");
		openslide(direction);
	})

	$(".btn--return").click(function(e){
		e.preventDefault();
		var away = $(this).parents(".slide");
		var direction = $(this).data("direction");
		closeslide(direction, away);
	})

	// openslide('select');


	// SELECT
	// Call when needed !
	// show_select_child('John', 'terry');
	function show_select_child(value, value_2){
		var value = value;
		$('#select_child').append('<option>' + (value ? value : 'Empty') + '</option>');
		$('#select_child').selectric('refresh');
	}

	function show_select_day(value){
		$(".select_day_bloc").show();
	}

	function show_select_hour(value){
		$(".select_hour_bloc").show();
	}

	$('.select').selectric();

	$('#select_child').on('change', function() {
	    var value = $(this).val();
	    show_select_day(value);
	});

	$('#select_day').on('change', function() {
	    var value = $(this).val();
	    $(".btn_bloc_valid").show();
	});


	$(".btn--validation_select").click(function(e){
		e.preventDefault();
		var child_id = 1;
		var ride_id = 2;
		$.post( "app/ride", { child: child_id, ride: ride_id} );
	});


 	// SLICK 
 	$('.slider_avatar').slick({
		dots: false,
		arrow: true,
		infinite: true,
		speed: 300,
		centerMode: true
	});


 	// SLICK 
 	$(".btn--validation_avatar").click(function(e){
 		e.preventDefault();
 		if (!$(this).parents(".slider_avatar_item.locked").length) {
			var src = $(this).parents(".slider_avatar_item").find('img').attr('src');
 			$(".avatar_inner img").attr('src', src);
 		// 	var direction = $(this).data("direction");
			// closeslide(direction);
			$(".slide--avatar .btn--return").trigger("click");
 		}
 	});

 	$(".btn--return").click(function(e){
		e.preventDefault();
		var away = $(this).parents(".slide");
		var direction = $(this).data("direction");
		closeslide(direction, away);
	})


	// ANIMATION PROCENT
	if ($(".global--enfant").is(':visible')) {
		var tl_procent = new TimelineMax();
		tl_procent.to($(".floating_avatar .green"), .6, { autoAlpha:1 });
		tl_procent.to($(".procent_inner"), 1, { width:"73%"}, .5);
	}

});



