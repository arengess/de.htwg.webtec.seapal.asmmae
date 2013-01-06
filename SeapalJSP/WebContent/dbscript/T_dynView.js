<link rel="stylesheet" type="text/css" href="dynamic_view.css">
<script type="text/javascript">

function Change_Background(tableRow){
	for (var i = 0; i < document.getElementsByTagName("tr").length; i++) {
		document.getElementsByTagName("tr")[i].style.backgroundColor = "white";
	}
tableRow.style.backgroundColor = "#00BFFF";


var nodes = tableRow.getElementsByTagName("td");
selected_row_key = nodes[1].innerHTML;

document.getElementById("Boot").value = nodes[0].innerHTML;
document.getElementById("TripTitle").value = nodes[1].innerHTML;
document.getElementById("von").value = nodes[2].innerHTML;
document.getElementById("nach").value = nodes[3].innerHTML;
document.getElementById("Skipper").value = nodes[4].innerHTML;
document.getElementById("Crew").value = nodes[5].innerHTML;
document.getElementById("Start").value = nodes[6].innerHTML;
document.getElementById("Ende").value = nodes[7].innerHTML;
document.getElementById("Motor").value = nodes[8].innerHTML;
document.getElementById("Tank").value = nodes[9].innerHTML;
}

function delete_entry(){
	window.location.href = "./boatInformation.php?delete=" + selected_row_key;
}
</script>