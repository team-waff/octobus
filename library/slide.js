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
		tl_enter.staggerTo(element_enter, .3, { left: 20, autoAlpha:1}, 0.1);
	}

	function leave_animate(){
		var tl_enter = new TimelineMax();
		var element_enter = $(".enter-anim");
		tl_enter.set(element_enter, { left: 0, autoAlpha:0});
	}

	function openslide(direction){
		if (!$(".global--enfant.animating").length) {
			$(".global--enfant").addClass("animating");
			var tl = new TimelineMax();
			var element = $(".slide[data-slide="+direction+"]");
			element.addClass('open');
			enter_animate();
			if (direction == 'select') {
				show_select_child('John', 'terry');
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


	// SELECT
	// Call when needed !
	// show_select_child('John', 'terry');
	function show_select_child(value, value_2){
		var value = value;
		var value_2 = value_2;
		$('#select_child').append('<option>' + (value ? value : 'Empty') + '</option>');
		$('#select_child').append('<option>' + (value_2 ? value_2 : 'Empty') + '</option>');
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
	    show_select_hour(value);
	});

	$('#select_hour').on('change', function() {
	    var value = $(this).val();
	    $(".btn_bloc_valid").show();
	});

 	// SLICK 
 	// 
 	$('.slider_avatar').slick({
		dots: false,
		arrow: true,
		infinite: true,
		speed: 300,
		centerMode: true
	});

});



