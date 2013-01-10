<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@page import="fassade.*"%>
<%@page import="java.util.HashMap"%>
<div id="tablewrapper">
	<fieldset>
		<table>
			<thead>
				<tr>
					<th>Registernr.</th>
					<th>Bootsname</th>
					<th>Eigner</th>
					<th>Typ</th>
					<th>Baujahr</th>
				</tr>
			</thead>
			<tbody>
				<%
					Fassade fassade = new Fassade();
					HashMap<String, TripDTO> tripDTOMap = fassade.getTripList(request
							.getParameter("registernr"));
					for (String key : tripDTOMap.keySet()) {
						TripDTO tripDTO = tripDTOMap.get(key);
						out.write("<tr class='row' id='"
								+ tripDTO.title
								+ "'>"
								+ "<td>"
								+ tripDTO.getTitle()
								+ "</td>"
								+ "<td>"
								+ tripDTO.getVon()
								+ "</td>"
								+ "<td>"
								+ tripDTO.getNach()
								+ "</td>"
								+ "<td><a href='http://localhost:8080/SeapalJSP/EntryInfo.jsp?title="
								+ tripDTO.getTitle()
								+ "'><input type='button' value='-->'/></a></td>"
								+ "<td class='hidden'>" + tripDTO.getSkipper()
								+ "</td>" + "<td class='hidden'>" + tripDTO.getCrew()
								+ "</td>" + "<td class='hidden'>" + tripDTO.getStart()
								+ "</td>" + "<td class='hidden'>" + tripDTO.getEnde()
								+ "</td>" + "<td class='hidden'>" + tripDTO.getDauer()
								+ "</td>" + "<td class='hidden'>" + tripDTO.getMotor()
								+ "</td>" + "<td class='hidden'>"
								+ tripDTO.getTankgefuellt() + "</td></tr>");
					}
				%>
			</tbody>
		</table>
	</fieldset>
</div>





<!--  
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="./css/Logbuch.css" />
<script type="text/javascript" src="js/jquery-1.8.2.js"></script>
<title>Trip Informationen</title>
</head>
<body>
	<form>
		<h1>Trip Informationen</h1>
		<fieldset>
			<div id="BInfoLinks" class="BInfo">
				<p>
					<label for="triptitle">Trip Titel:</label> <input type="text"
						name="triptitle" id="triptitle" tabindex="1" />
				</p>
				<p>
					<label for="von">Von:</label> <input type="text" name="von"
						id="von" tabindex="2" />
				</p>
				<p>
					<label for="nach">Nach:</label> <input type="text" name="nach"
						id="nach" tabindex="3" />
				</p>
				<p>
					<label for="skipper">Skipper:</label> <input type="text"
						name="skipper" id="skipper" tabindex="4" />
				</p>
			</div>
			<div id="BInfoMitte" class="BInfo">
				<p>
					<label for="crew">Crew:</label>
					<textarea name="crew" cols="30" rows="8" tabindex="5" id="crew"></textarea>
				</p>
			</div>
			<div id="BInfoRechts" class="BInfo">
				<p>
					<label for="start">Start:</label> <input type="text" name="start"
						id="start" tabindex="6" />
				</p>
				<p>
					<label for="ende">Ende:</label> <input type="text" name="ende"
						id="ende" tabindex="7" />
				</p>
				<p>
					<label for="dauer">Dauer:</label> <input type="text" name="dauer"
						id="dauer" tabindex="8" />
				</p>
				<p>
					<label for="motor">Motor(min):</label> <input type="text"
						name="motor" id="motor" tabindex="9" />
				</p>
				<p>
					<label for="tankgefuellt">Tank gef&uuml;llt?</label> <input
						type="checkbox" name="tankgefuellt" id="tankgefuellt"
						tabindex="10" />
				</p>
			</div>
			<div>
				<input class="buttonLinks" type="submit" value="Neuer Eintrag" /> <input
					class="buttonLinks" type="button" value="Loeschen" /> <input
					class="buttonLinks" type="button" value="Filter" /> <input
					class="buttonRechts" type="button" value="Erster" /> <input
					class="buttonRechts" type="button" value="Letzter" /> <input
					class="buttonRechts" type="button" value="Vorheriger" /> <input
					class="buttonRechts" type="button" value="N&auml;chster" />
			</div>
		</fieldset>
		<div id='divnotes'>
			<label for="notes">Notes:</label>
			<textarea name="notes" id="notes" cols="40" rows="15"></textarea>
		</div>

		<div id='divscreen'>
			<img src="../TestScreenshot.png" alt="Screenshots">
		</div>
		<div id='divimage'>
			<img src="../NoImage.png" alt="Bild">
		</div>
	</form>

</body>
</html>
-->