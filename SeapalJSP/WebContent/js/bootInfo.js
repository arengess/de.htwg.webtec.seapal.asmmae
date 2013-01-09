var aktuellesBoot;
$(document).ready(function() {
	loadBootInfo();
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
function loadBootInfo() {
	$("#Boottabelle").empty();
	$("#Boottabelle").load("BootInfo.jsp" , function(){
		
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
			$(this).find("td").each(function ( index ){
				var data = $(this).text();
				var cssClassName = $(this).attr("class");
				$("#"+cssClassName).val(data);
			});
		});
	});
}