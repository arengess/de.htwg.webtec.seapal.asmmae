var entryName;
$(document).ready(function() {
	$("#save").click(function(){
		var fields = $("form").serializeArray();
		$.ajax({
			type : "POST",
			url : "saveEntry.jsp",
			data: fields,		
			success: function(){
				alert("Entry gespeichert");
			}
		});
	});
});