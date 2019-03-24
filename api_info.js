

//Pour ajouter un enfant a une ride,
var child_id = 3//get l'id du child select
var ride_id = 3//get l'id de la ride select
$.post( "app/ride", { child: child_id, ride: ride_id} );
