$(document).ready(function(){
 	$("dd label").append(":");

	$("#registerbutton").click(function(){
		if ( $("#wrap_register").css("display") == "none" ) {
			$("#wrap_register").slideDown("slow", function () {
			$("#_corner1").fadeIn("fast");
			})
	} else {
			$("#_corner1").fadeOut("fast", function () {
			$("#wrap_register").slideUp("slow");
			})
		}
	});
});