$(document).ready(function() {
	$(".row").mouseover(function() {
		$(this).css({
			"background-color" : "grey"
		});
	});
	$(".row").mouseleave(function() {
		$(this).css({
			"background-color" : "white"
		});
	});
});
