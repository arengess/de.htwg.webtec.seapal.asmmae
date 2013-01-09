var aktuellerTrip;

$(document).ready(function() {
	loadTripList();
	$("#delete").click(function() {
		$.ajax({
			type : "POST",
			url : "deleteTrip.jsp?title="+aktuellerTrip,
			success: function(){
				loadTripList();
			}
		});
	});
	$("#newTrip").click(function() {
		$(this).after("<input type='button' value='OK' id='ok'>" +
				"<input type='text' id='newtitle'>");
		$(this).hide();
		$("#ok").click(function(){
			var titel = $("#newtitle").val();
			var reg = $("#registernr").text();
			$.ajax({
				type : "POST",
				url : "saveTrip.jsp?title="+titel+"&von=&nach=&skipper=&crew=&start=&ende=&dauer=&motor=&notes=&tankgefuellt=&registernr="+reg,
				success: function(){
					loadTripList();
					$("#newTrip").show();
					$("#ok").hide();
					$("#newtitle").hide();
				}
			});
		});
	});
});
function loadTripList() {
	var reg = $("#registernr").text();
	$("#Triptabelle").empty();
	$("#Triptabelle").load("TripList.jsp?registernr="+reg , function(){
		
		$(".row").mouseover(function(){
			$(this).css({
				"background-color": "grey"
			  });
		});
		$(".row").mouseleave(function(){
			$(this).css({
				"background-color": "white"
			  });
		});
		$(".row").click(function(){
			aktuellerTrip = $(this).find(".title").text();
		});
	});
}