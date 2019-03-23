/*  ==========================================================================
    Global
    ==========================================================================  */

var domain = $("body").data("domain");
var baseroot = $("body").data("baseroot");

$(document).ready(function() {

	$.getJSON('app/index.php').done(function(response) {
	    // console.log(response, response.name);
	    $(".child__name").html(response.name);
	});

});
