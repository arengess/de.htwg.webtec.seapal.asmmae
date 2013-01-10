var aktuellerEntry;
$(document).ready(function() {
	loadEntryList();
	$("input[type=text]").keyup(function(e) {
		if (e.keyCode == 13) {
			var fields = $("form").serializeArray();
			$.ajax({
				type : "POST",
				url : "saveTrip.jsp",
				data : fields
			});
		}
	});
	$("#delete").click(function() {
		var triptitle = $("#triptitle").val();
		$.ajax({
			type : "POST",
			url : "deleteEntry.jsp?title=" + triptitle+"&name="+aktuellerEntry,
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
			var entryName = $("#newEntry").val();
			var triptitle = $("#triptitle").text();
			$.ajax({
				type : "POST",
				url : "saveEntry.jsp?name="+entryName+"&von=&nach=&skipper=&crew=&start=&ende=&dauer=&motor=&notes=&tankgefuellt=&registernr="+reg,
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
	$("#Entrytabelle").load("EntryList.jsp", function() {
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