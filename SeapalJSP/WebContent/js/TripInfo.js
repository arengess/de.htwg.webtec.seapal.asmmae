var triptitle;
var entryName;
$(document).ready(function() {
	triptitle = $("#triptitle").val();
	loadEntryList();
	$("#saveTrip").click(function() {
			var fields = $("form").serializeArray();
			$.ajax({
				type : "POST",
				url : "saveTrip.jsp",
				data : fields,
				success: function(){
					alert("Trip gespeichert");
				}
			});
	});
	$("#delete").click(function() {
		$.ajax({
			type : "POST",
			url : "deleteEntry.jsp?name="+entryName,
			success : function() {
				loadEntryList();
			}
		});
	});
	$("#newEntry").click(function() {
		$(this).after("<input type='button' value='OK' id='ok'>" +
				"<input type='text' id='newEntryName'>");
		$(this).hide();
		$("#ok").click(function(){
			entryName = $("#newEntryName").val();
			$.ajax({
				type : "POST",
				url : "saveEntry.jsp?triptitle=" + triptitle+"&name="+entryName+"&ngrad=&nmin=&nsec=&egrad=&emin=&esec=&btm=&dtm=&cog=&sog=&fahrtNach=null&manoever=null&vorsegel=null&grosssegel=null",
				success: function(){
					loadEntryList();
					$("#newEntry").show();
					$("#ok").hide();
					$("#newEntryName").hide();
				}
			});
		});
	});
});
function loadEntryList() {
	$("#Entrytabelle").empty();
	$("#Entrytabelle").load("EntryList.jsp?triptitle="+triptitle , function() {
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
		$(".row").click(function(){
			aktuellerEntry = $(this).find(".name").text();
		});
	});
}