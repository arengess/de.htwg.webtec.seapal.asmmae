<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="./css/Logbuch.css" />
<script type="text/javascript" src="js/jquery-1.8.2.js"></script>
<script type="text/javascript" src="js/TripList.js"></script>
<title>Tripsliste</title>
</head>
<body>
	<fieldset>
		<div id="Triptabelle"></div>
		<div>
			<input class='buttonLinks' type='button' value='Neuer Trip' id="newTrip"/> <input
				class="buttonLinks" type="button" value="Loeschen" id="delete"/> <input
				class="buttonRechts" type="button" value="Erster" /> <input
				class="buttonRechts" type="button" value="Letzter" /> <input
				class="buttonRechts" type="button" value="Vorheriger" /> <input
				class="buttonRechts" type="button" value="N&auml;chster" />
		</div>
		<% String registernr = request.getParameter("registernr");
		out.write("<p id='registernr' visibility: hidden>"+registernr+ "</p>");%>
			
	</fieldset>
</body>
</html>