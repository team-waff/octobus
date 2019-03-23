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

	$(".btn--slide").click(function(e){
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

});
