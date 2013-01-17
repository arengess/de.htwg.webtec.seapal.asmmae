<link rel="stylesheet" type="text/css" href="dynamic_view.css">
<script type="text/javascript">

function Change_Background(tableRow){
	for (var i = 0; i < document.getElementsByTagName("tr").length; i++) {
		document.getElementsByTagName("tr")[i].style.backgroundColor = "white";
	}
tableRow.style.backgroundColor = "#a9a9a9";


var werte = tableRow.getElementsByTagName("td");
selected_row_key = werte[1].innerHTML;

$("#Bootsname").value = werte[0].innerHTML;
$("#Registernr").value = werte[1].innerHTML;
$("#Segelzeichen").value = werte[2].innerHTML;
$("#Heimathafen").value = werte[3].innerHTML;
$("#Yachtclub").value = werte[4].innerHTML;
$("#Eigner").value = werte[5].innerHTML;
$("#Versicherung").value = werte[6].innerHTML;
$("#Rufzeichen").value = werte[7].innerHTML;
$("#Typ").value = werte[8].innerHTML;
$("#Konstrukteur").value = werte[9].innerHTML;
$("#Laenge").value = werte[10].innerHTML;
$("#Breite").value = werte[11].innerHTML;
$("#Tiefgang").value = werte[12].innerHTML;
$("#Masthoehe").value = werte[13].innerHTML;
$("#Verdraengung").value = werte[14].innerHTML;
$("#Rig-Art").value = werte[15].innerHTML;
$("#Baujahr").value = werte[16].innerHTML;
$("#Motor").value = werte[17].innerHTML;
$("#Tankgroesse").value = werte[18].innerHTML;
$("#Wassertankgroesse").value = werte[19].innerHTML;
$("#Abwassertankgroesse").value = werte[20].innerHTML;
$("#Grosssegelgroesse").value = werte[21].innerHTML;
$("#Genuagroesse").value = werte[22].innerHTML;
$("#Spiegroesse").value = werte[23].innerHTML;
}

function delete_entry(){
	window.location.href = "./BInfo.php?delete=" + selected_row_key;
}
</script>