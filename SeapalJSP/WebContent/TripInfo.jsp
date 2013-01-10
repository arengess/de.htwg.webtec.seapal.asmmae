<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@page import="fassade.*"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="./css/Logbuch.css" />
<script type="text/javascript" src="js/jquery-1.8.2.js"></script>
<script type="text/javascript" src="js/TripInfo.js"></script>
<title>Trip Informationen</title>
</head>
<body>
	<h1>Trip Informationen</h1>
	<form>
		<div class="infoZeile">
			<fieldset>
				<%
					Fassade fassade = new Fassade();
					String tripTitle = request.getParameter("title");
					TripDTO tripDTO = fassade.getTrip(tripTitle);
					out.write("<div id='BInfoLinks' class='BInfo'>"
							+ "<p><label for='triptitle'>Trip Titel:</label>"
							+ "<input type='text'name='triptitle' id='triptitle' tabindex='1' value='"
							+ tripDTO.getTitle()
							+ "' /></p>"
							+ "<p><label for='von'>Von:</label> <input type='text' name='von'id='von' tabindex='2' value='"
							+ tripDTO.getVon()
							+ "' /></p>"
							+ "<p><lab el for='nach'>Nach:</label> <input type='text' name='nach'id='nach' tabindex='3' value='"
							+ tripDTO.getNach()
							+ "' /></p><p><label for='skipper'>Skipper:</label> <input type='text'name='skipper' id='skipper' value='"
							+ tripDTO.getSkipper()
							+ "' tabindex='4' /></p></div><div id='BInfoMitte' class='BInfo'><p><label for='crew'>Crew:</label><textarea name='crew' cols='30' rows='8' tabindex='5' value='"
							+ tripDTO.getCrew()
							+ "' id='crew'></textarea></p><p><label for='tankgefuellt'>Tank gef&uuml;llt?</label> <inputtype='checkbox' name='tankgefuellt' id='tankgefuellt'tabindex='10' value='1' "
							+ tripDTO.isTankgefuelltchecked()
							+ "' /></p></div><div id='BInfoRechts' class='BInfo'><p><label for='start'>Start:</label> <input type='text' name='start'id='start' tabindex='6' value='"
							+ tripDTO.getStart()
							+ "' /></p><p><label for='ende'>Ende:</label> <input type='text' name='ende'id='ende' value='"
							+ tripDTO.getEnde()
							+ "' tabindex='7' /></p><p><label for='dauer'>Dauer:</label> <input type='text' name='dauer'id='dauer' value='"
							+ tripDTO.getDauer()
							+ "' tabindex='8' /></p><p><label for='motor'>Motor(min):</label> <input type='text'name='motor' value='"
							+ tripDTO.getMotor()
							+ "' id='motor' tabindex='9' /></p></div>");
				%>

			</fieldset>
		</div>
		<div class="infoZeile">
			<div id='divnotes' class="BInfo">
				<textarea name="notes" id="notes" cols="40" rows="21"
					placeholder="Notizen"></textarea>
			</div>

			<div id='divscreen' class="BInfo">
				<img src="img/TestScreenshot.PNG" alt="Screenshots">
			</div>
			<div id='divimage' class="BInfo">
				<img src="img/NoImage.PNG" alt="Bild">
			</div>
		</div>
	</form>
	<div class="infoZeile">
		<div id="Entrytabelle"></div>
	</div>
	<div class="infoZeile">
		<input class="buttonLinks" type="button" value="Neuer Wegpunkt" id="newEntry"/> <input
			class="buttonLinks" type="button" value="Wegpunkt Loeschen" id="delete"/> <input
			class="buttonLinks" type="button" value="Filter" /> <input
			class="buttonRechts" type="button" value="Erster" /> <input
			class="buttonRechts" type="button" value="Letzter" /> <input
			class="buttonRechts" type="button" value="Vorheriger" /> <input
			class="buttonRechts" type="button" value="N&auml;chster" />
	</div>

</body>
</html>