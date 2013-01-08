$(document).ready(function() {
	loadTripInfo();
	$("#save").click(function() {
		var fields = $("form").serializeArray();
		$.ajax({
			type : "POST",
			url : "saveBoot.jsp",
			data : fields,
			success: function(){
				loadBootInfo();
			}
		});
	});
});
function loadTripInfo() {
	$("#Triptabelle").empty();
	$("#Triptabelle").load("TripInfo.jsp", function(){
		
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
			set_values($(this).get());
//			var boot = $(this).text();
//			document.getElementById("Bootsname").value = boot[0].innerHTML;
//			document.getElementById("registernr").value = boot[1].innerHTML;
//			document.getElementById("segelzeichen").value = boot[2].innerHTML;
//			document.getElementById("heimathafen").value = boot[3].innerHTML;
//			document.getElementById("yachtclub").value = boot[4].innerHTML;
//			document.getElementById("eigner").value = boot[5].innerHTML;
//			document.getElementById("versicherung").value = boot[6].innerHTML;
//			document.getElementById("rufzeichen").value = boot[7].innerHTML;
//			document.getElementById("typ").value = boot[8].innerHTML;
//			document.getElementById("konstrukteur").value = boot[9].innerHTML;
//			document.getElementById("laenge").value = boot[10].innerHTML;
//			document.getElementById("breite").value = boot[11].innerHTML;
//			document.getElementById("tiefgang").value = boot[12].innerHTML;
//			document.getElementById("masthoehe").value = boot[13].innerHTML;
//			document.getElementById("verdraengung").value = boot[14].innerHTML;
//			document.getElementById("rigArt").value = boot[15].innerHTML;
//			document.getElementById("baujahr").value = boot[16].innerHTML;
//			document.getElementById("motor").value = boot[17].innerHTML;
//			document.getElementById("tankgroesse").value = boot[18].innerHTML;
//			document.getElementById("wassertankgroesse").value = boot[19].innerHTML;
//			document.getElementById("abwassertankgroesse").value = boot[20].innerHTML;
//			document.getElementById("grosssegelgroesse").value = boot[21].innerHTML;
//			document.getElementById("genuagroesse").value = boot[22].innerHTML;
//			document.getElementById("spi").value = boot[23].innerHTML;	
		});
	});
}