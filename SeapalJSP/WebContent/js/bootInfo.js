alert("geladen");
var aktuellesBoot;
$(document).ready(function() {
	loadBootInfo();
	$("#save").click(function() {
		var fields = $("form").serializeArray();
		$.ajax({
			type : "POST",
			url : "saveBoot.jsp",
			data : fields,
			success:loadBootInfo()
		});
		
	});
//	$(".boot").click(function(){
//		alert("funtioniert");
//		$(this).css({
//			"background-color": "blue"
//		  });
//	});
});
function loadBootInfo() {
	$("#Boottabelle").empty();
	$("#Boottabelle").load("BootInfo.jsp");
}
function showBoot(aktuellesBoot){
	
}
function resetForm(){
	$('#registernr').value="";
	$('#bootsname').value="";
	$('#segelzeichen').value="";
	$('#heimathafen').value="";
	$('#yachtclub').value="";
	$('#eigner').value="";
	$('#versicherung').value="";
	$('#rufzeichen').value="";
	$('#typ').value="";
	$('#konstrukteur').value="";
	$('#laenge').value="";
	$('#breite').value="";
	$('#tiefgang').value="";
	$('#masthoehe').value="";
	$('#verdraengung').value="";
	$('#rigArt').value="";
	$('#baujahr').value="";
	$('#motor').value="";
	$('#tankgroesse').value="";
	$('#wassertankgroesse').value="";
	$('#abwassertankgroesse').value="";
	$('#grosssegelgroesse').value="";
	$('#genuagroesse').value="";
	$('#spi').value="";
}