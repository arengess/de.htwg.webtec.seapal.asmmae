$(document).ready(function() {
	$("#textfields input").blur(function() {
		var inputText = $(this).val();
		var equal;
		if (inputText == "") {
			$(this).css({
				"background-color": "red"
			  });
		} else {
			switch ($(this).attr("id")) {
				case "Bootsname":
				case "Konstrukteur":
					equal = checkInput(inputText, /[A-Za-z'\-\s]{2,30}/);
					break;
				case "Registernr":
				case "Rufzeichen":
				case "Rig-Art":
					equal = checkInput(inputText, /[\w]{2,30}/);
					break;
				case "Segelzeichen":
					equal = checkInput(inputText, /[\w]{1}/);
					break;
				case "Heimathafen":
				case "Versicherung":
					equal = checkInput(inputText, /[A-Za-z\-\s]{2,30}/);
					break;
				case "Yachtclub":
				case "Motor":
					equal = checkInput(inputText, /[\w'\-\s]{2,30}/);
					break;
				case "Eigner":
				case "Typ":
					equal = checkInput(inputText, /[A-Za-z\-\s]{2,30}/);
					break;
				case "Laenge":
				case "Breite":
				case "Tiefgang":
				case "Masthoehe":
				case "Verdraengung":
				case "Wassertankgroesse":
				case "Abwassertankgroesse":
				case "Grosssegelgroesse":
				case "Genuagroesse":
				case "Spigroesse":
					equal = checkInput(inputText, /[\d]{1,4}\,[\d]{2}/);
					break;
				case "Tankgroesse":
					equal = checkInput(inputText, /[\d]{1,4}/);	
					break;
				case "Baujahr":
					equal = checkInput(inputText, /[\d]{2,4}/);
					break;

			}
			if (!equal) {
				$(this).css({
					"background-color": "red"
				  });
			}else{
				$(this).css({
					"background-color": "white"
				  });
			}
		}
	});
	function checkInput(inputText, regExpression) {
		if (regExpression.test(inputText)) {
			return true;
		}
		return false;
	}

});
