<link rel="stylesheet" type="text/css" href="dynamic_view.css">
<script type="text/javascript">

function Change_Background(tableRow){
	for (var i = 0; i < document.getElementsByTagName("tr").length; i++) {
		document.getElementsByTagName("tr")[i].style.backgroundColor = "white";
	}
tableRow.style.backgroundColor = "#00BFFF";


var nodes = tableRow.getElementsByTagName("td");
selected_row_key = nodes[1].innerHTML;

document.getElementById("Trip").value = nodes[0].innerHTML;
document.getElementById("Name").value = nodes[1].innerHTML;
document.getElementById("PosNStd").value = nodes[2].innerHTML;
document.getElementById("PosNMin").value = nodes[3].innerHTML;
document.getElementById("PosNSek").value = nodes[4].innerHTML;
document.getElementById("PosEStd").value = nodes[5].innerHTML;
document.getElementById("PosEMin").value = nodes[6].innerHTML;
document.getElementById("PosESek").value = nodes[7].innerHTML;
document.getElementById("COG").value = nodes[8].innerHTML;
document.getElementById("SOG").value = nodes[9].innerHTML;
document.getElementById("BTM").value = nodes[10].innerHTML;
document.getElementById("DTM").value = nodes[11].innerHTML;
document.getElementById("FahrtNach").value = nodes[12].innerHTML;
document.getElementById("Manoever").value = nodes[13].innerHTML;
document.getElementById("Vorsegel").value = nodes[14].innerHTML;
document.getElementById("Grosssegel").value = nodes[15].innerHTML;
}

function delete_entry(){
	window.location.href = "./boatInformation.php?delete=" + selected_row_key;
}
</script>