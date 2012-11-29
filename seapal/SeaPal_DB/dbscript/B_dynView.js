<link rel="stylesheet" type="text/css" href="dynamic_view.css">
<script type="text/javascript">

function Change_Background(tableRow){
	for (var i = 0; i < document.getElementsByTagName("tr").length; i++) {
		document.getElementsByTagName("tr")[i].style.backgroundColor = "white";
	}
tableRow.style.backgroundColor = "#00BFFF";


var nodes = tableRow.getElementsByTagName("td");
selected_row_key = nodes[1].innerHTML;

document.getElementById("Bootsname").value = nodes[0].innerHTML;
document.getElementById("Registernr").value = nodes[1].innerHTML;
document.getElementById("Segelzeichen").value = nodes[2].innerHTML;
document.getElementById("Heimathafen").value = nodes[3].innerHTML;
document.getElementById("Yachtclub").value = nodes[4].innerHTML;
document.getElementById("Eigner").value = nodes[5].innerHTML;
document.getElementById("Versicherung").value = nodes[6].innerHTML;
document.getElementById("Rufzeichen").value = nodes[7].innerHTML;
document.getElementById("Typ").value = nodes[8].innerHTML;
document.getElementById("Konstrukteur").value = nodes[9].innerHTML;
document.getElementById("Laenge").value = nodes[10].innerHTML;
document.getElementById("Breite").value = nodes[11].innerHTML;
document.getElementById("Tiefgang").value = nodes[12].innerHTML;
document.getElementById("Masthoehe").value = nodes[13].innerHTML;
document.getElementById("Verdraengung").value = nodes[14].innerHTML;
document.getElementById("Rig-Art").value = nodes[15].innerHTML;
document.getElementById("Baujahr").value = nodes[16].innerHTML;
document.getElementById("Motor").value = nodes[17].innerHTML;
document.getElementById("Tankgroesse").value = nodes[18].innerHTML;
document.getElementById("Wassertankgroesse").value = nodes[19].innerHTML;
document.getElementById("Abwassertankgroesse").value = nodes[20].innerHTML;
document.getElementById("Grosssegelgroesse").value = nodes[21].innerHTML;
document.getElementById("Genuagroesse").value = nodes[22].innerHTML;
document.getElementById("Spigroesse").value = nodes[23].innerHTML;
}

function delete_entry(){
	window.location.href = "./boatInformation.php?delete=" + selected_row_key;
}
</script>