<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@page import="fassade.*"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="./css/Logbuch.css" />
<script type="text/javascript" src="js/jquery-1.8.2.js"></script>
<script type="text/javascript" src="js/TripInfoSite.js"></script>
<title>Trip Informationen</title>
</head>
<body>
	<h1>Trip Informationen</h1>
	<div class="infoZeile">
		<fieldset>
			<%String title =request.getParameter("title");
		if(title = ""){%>
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
				<p>
					<label for="tankgefuellt">Tank gef&uuml;llt?</label> <input
						type="checkbox" name="tankgefuellt" id="tankgefuellt"
						tabindex="10" />
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
			</div>
			<% }else{
		Fassade fassade = new Fassade();
		TripDTO tripDTO = fassade.getTrip(); 
		out.write("<div id='BInfoLinks' class='BInfo'>"+
			"<p><label for='triptitle'>Trip Titel:</label>"+
			"<input type='text'name='triptitle' id='triptitle' tabindex='1' value="+ tripDTO.getTitle()+"/></p>"+
			"<p><label for='von'>Von:</label> <input type='text' name='von'id='von' tabindex='2' value="+ tripDTO.getVon()+"/></p>"+
			"<p><label for='nach'>Nach:</label> <input type='text' name='nach'id='nach' tabindex='3' /></p><p><label for='skipper'>Skipper:</label> <input type='text'name='skipper' id='skipper' tabindex='4' /></p></div><div id='BInfoMitte' class='BInfo'><p><label for='crew'>Crew:</label><textarea name='crew' cols='30' rows='8' tabindex='5' id='crew'></textarea></p><p><label for='tankgefuellt'>Tank gef&uuml;llt?</label> <inputtype='checkbox' name='tankgefuellt' id='tankgefuellt'tabindex='10' /></p></div><div id='BInfoRechts' class='BInfo'><p><label for='start'>Start:</label> <input type='text' name='start'id='start' tabindex='6' /></p><p><label for='ende'>Ende:</label> <input type='text' name='ende'id='ende' tabindex='7' /></p><p><label for='dauer'>Dauer:</label> <input type='text' name='dauer'id='dauer' tabindex='8' /></p><p><label for='motor'>Motor(min):</label> <input type='text'name='motor' id='motor' tabindex='9' /></p></div>");
		}%>

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
	<div class="infoZeile">
		<div id="Triptabelle"></div>
	</div>
	<div class="infoZeile">
		<input class="buttonLinks" type="button" value="Neuer Wegpunkt" /> <input
			class="buttonLinks" type="button" value="Loeschen" /> <input
			class="buttonLinks" type="button" value="Filter" /> <input
			class="buttonRechts" type="button" value="Erster" /> <input
			class="buttonRechts" type="button" value="Letzter" /> <input
			class="buttonRechts" type="button" value="Vorheriger" /> <input
			class="buttonRechts" type="button" value="N&auml;chster" />
	</div>

</body>
</html>