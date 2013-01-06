
alert("geladen");
function load() {
	var letter = document.getElementById("save").value;
	var url = "http://localhost:8080/Sote2-7_AJAX/AjaxServlet?letter="
			+ escape(letter);
	var req;
	if (window.XMLHttpRequest) {
		req = new XMLHttpRequest();
	} else {
		req = new ActiveXObject("Microsoft.XMLHTTP");
	}
	req.onreadystatechange = function() {
		
				document.getElementById("ausgabe").innerHTML = req.responseText;

	};

	req.open("Get", url);
	req.send(null);
}