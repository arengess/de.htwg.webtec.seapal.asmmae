function update_div(){
	$('#dynamic_view').load('dynamic_view.php');
	reset_form();
}

function set_values(tableRow){
	var nodes = tableRow.getElementsByTagName("td");
	selected_row_key=nodes[1].innerHTML;
	$("#bootsname").value = nodes[0].innerHTML;
	$("#registernr").value = nodes[1].innerHTML;
	$("#segelzeichen").value = nodes[2].innerHTML;
	$("#heimathafen").value = nodes[3].innerHTML;
	$("#yachtclub").value = nodes[4].innerHTML;
	$("#eigner").value = nodes[5].innerHTML;
	$("#versicherung").value = nodes[6].innerHTML;
	$("#rufzeichen").value = nodes[7].innerHTML;
	$("#typ").value = nodes[8].innerHTML;
	$("#konstrukteur").value = nodes[9].innerHTML;
	$("#laenge").value = nodes[10].innerHTML;
	$("#breite").value = nodes[11].innerHTML;
	$("#tiefgang").value = nodes[12].innerHTML;
	$("#masthoehe").value = nodes[13].innerHTML;
	$("#verdraengung").value = nodes[14].innerHTML;
	$("#rigArt").value = nodes[15].innerHTML;
	$("#baujahr").value = nodes[16].innerHTML;
	$("#motor").value = nodes[17].innerHTML;
	$("#tankgroesse").value = nodes[18].innerHTML;
	$("#wassertankgroesse").value = nodes[19].innerHTML;
	$("#abwassertankgroesse").value = nodes[20].innerHTML;
	$("#grosssegelgroesse").value = nodes[21].innerHTML;
	$("#genuagroesse").value = nodes[22].innerHTML;
	$("#spie").value = nodes[23].innerHTML;	
}

function reset_form(){
	$("#registernr').value="";
	$("#bootsname').value="";
	$("#segelzeichen').value="";
	$("#heimathafen').value="";
	$("#yachtclub').value="";
	$("#eigner').value="";
	$("#versicherung').value="";
	$("#rufzeichen').value="";
	$("#typ').value="";
	$("#konstrukteur').value="";
	$("#laenge').value="";
	$("#breite').value="";
	$("#tiefgang').value="";
	$("#masthoehe').value="";
	$("#verdraengung').value="";
	$("#rigArt').value="";
	$("#baujahr').value="";
	$("#motor').value="";
	$("#tankgroesse').value="";
	$("#wassertankgroesse').value="";
	$("#abwassertankgroesse').value="";
	$("#grosssegelgroesse').value="";
	$("#genuagroesse').value="";
	$("#spie').value="";
}

function edit_Node(regex, input, helpId, helpMessage){
	if (!regex.test(input)) {
		if (helpId != null)

			while (helpId.firstChild) 
				helpId.removeChild(helpId.firstChild);
			
			helpId.appendChild(document.createTextNode(helpMessage)); 
			return false;
		}

		else {          
			if (helpId != null){
				while (helpId.firstChild) 
	
					helpId.removeChild(helpId.firstChild);
			}
		return true;
	}      
}

function regEx1(inputField, helpId) {			
	return edit_Node(/[A-Za-z'\-\s]{2,30}/, inputField.value, helpId, "Ungültige Eingabe!");
}

function regEx2(inputField, helpId) {			
	return edit_Node(/[\w]{2,30}/, inputField.value, helpId, "Ungültige Eingabe!");
}
function regEx3(inputField, helpId) {			
	return edit_Node(/[\w]{1}/, inputField.value, helpId, "Ungültige Eingabe!");
}
function regEx4(inputField, helpId) {			
	return edit_Node(/[A-Za-z\-\s]{2,30}/, inputField.value, helpId, "Ungültige Eingabe!");
}
function regEx5(inputField, helpId) {			
	return edit_Node(/[\w'\-\s]{2,30}/, inputField.value, helpId, "Ungültige Eingabe!");
}
function regEx6(inputField, helpId) {			
	return edit_Node(/[A-Za-z\-\s]{2,30}/, inputField.value, helpId, "Ungültige Eingabe!");
}
function regEx7(inputField, helpId) {			
	return edit_Node(/[\d]{1,4}\.[\d]{2}/, inputField.value, helpId, "Ungültige Eingabe!");
}
function regEx8(inputField, helpId) {			
	return edit_Node(/[\d]{1,4}/, inputField.value, helpId, "Ungültige Eingabe!");
}

function regEx9(inputField, helpId) {			
	return edit_Node(/[\d]{2,4}/, inputField.value, helpId, "Ungültige Eingabe!");
}



				
	