alert("geladen");
var aktuellesBoot;
$(document).ready(function() {
	loadBootInfo();
	$("#save").click(function() {
		var fields = $("form").serializeArray();
		$.ajax({
			type : "POST",
			url : "saveBoot.jsp",
			data : fields
		});
		loadBootInfo();
	});
	$("#Boottabelle span").click(function(){
		$(this).css({
			"background-color": "blue"
		  });
	});
});
function loadBootInfo() {
	$("#Boottabelle").empty();
	$("#Boottabelle").load("BootInfo.jsp");
}
function showBoot(aktuellesBoot){

}