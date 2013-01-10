<link rel="stylesheet" type="text/css" href="dynamic_view.css">
<script type="text/javascript">

function Change_Background(tableRow){
	for (var i = 0; i < document.getElementsByTagName("tr").length; i++) {
		document.getElementsByTagName("tr")[i].style.backgroundColor = "white";
	}
tableRow.style.backgroundColor = "#00BFFF";


var nodes = tableRow.getElementsByTagName("td");
selected_row_key = nodes[1].innerHTML;

$("#Boot").value = nodes[0].innerHTML;
$("#TripTitle").value = nodes[1].innerHTML;
$("#von").value = nodes[2].innerHTML;
$("#nach").value = nodes[3].innerHTML;
$("#Skipper").value = nodes[4].innerHTML;
$("#Crew").value = nodes[5].innerHTML;
$("#Start").value = nodes[6].innerHTML;
$("#Ende").value = nodes[7].innerHTML;
$("#Motor").value = nodes[8].innerHTML;
$("#Tank").value = nodes[9].innerHTML;
}

function delete_entry(){
	window.location.href = "./TInfo.php?delete=" + selected_row_key;
}
</script>