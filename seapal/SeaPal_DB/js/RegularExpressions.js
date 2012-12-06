$(document).ready(function() {
	$("#textfields input").blur(function() {
		var inputText = $(this).attr("value");
		var equal;
		if(inputText == ""){
			$(this).after("<span>Fehlende Eingabe</span>");
		}
		if( $(this).attr("id") == "Bootsname"){
			equal = checkInput (inputText, "/[A-Za-z'\-\s]{2,30}/");
		}
		if(equal){
			$(this).after("<span>Ungültige Eingabe</span>");
		}
	});
	function checkInput(inputText, regExpression) {
		if (regExpression.test(inputText)){
			return true;
		}
		return false;
	}
});
