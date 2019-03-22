$(document).ready(function() {
	console.log("test");
    $("body").click(function() {
        $.getJSON('app/index.php')
            .done(function(response) {
                console.log(response, response.name);
            });
    });


});
