<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@page import="fassade.*"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="./css/Logbuch.css" />
<script type="text/javascript" src="js/jquery-1.8.2.js"></script>
<script type="text/javascript" src="js/EntryInfo.js"></script>
<title>Entry Info</title>
</head>
<body>
	<form action="EntryInfo.jsp" method="GET">
		<h1>Entry Information</h1>
		<fieldset>
			<div class="infoZeile">
				<%
					Fassade fassade = new Fassade();
					EntryDTO entryDTO = fassade.getEntry(request.getParameter("name"));
					out.write("<p><p id='triptitle'>Trip: <span visibility: hidden ><input type='text' name='triptitle' value='"
							+ entryDTO.getTriptitle()
							+ "'/></span>"
							+ entryDTO.getTriptitle()
							+ "</p><div id='InfoLinks' class='Info'><label for='name'>Name</label><input type='text' name='name' value='"
							+ entryDTO.getName()
							+ "'/></p><p>at <span visibility: hidden><input type='text' name='time' value='"
							+ entryDTO.getTime()
							+ "'/></span>"
							+ entryDTO.getTime()
							+ "</p><p class='smallInput InputLine'><label for='ngrad'>Position</label><input type='text' name='ngrad' value='"
							+ entryDTO.getNgrad()
							+ "'/>°<input type='text' name='nmin' value='"
							+ entryDTO.getNmin()
							+ "'/>\"<input type='text' name='nsec' value='"
							+ entryDTO.getNsec()
							+ "'/>'N<input type='text' name='egrad' value='"
							+ entryDTO.getEgrad()
							+ "'/>°<input type='text' name='emin' value='"
							+ entryDTO.getEmin()
							+ "'/>\"<input type='text'name='esec' value='"
							+ entryDTO.getEsec()
							+ "'/>'E</p></div><div id='InfoRechts' class='Info'><p class='InputLine'><label for='btm'>BTM</label><input type='text' name='btm' value='"
							+ entryDTO.getBtm()
							+ "'/><label for='dtm'>DTM</label><input type='text' name='dtm' value='"
							+ entryDTO.getDtm()
							+ "'/></p><p class='InputLine'><label for='cog'>COG</label><input type='text' name='cog' value='"
							+ entryDTO.getCog()
							+ "'/><label for='sog'>SOG</label><input type='text' name='sog' value='"
							+ entryDTO.getSog() + "'/></p></div>");
					out.write("<p><label for='fahrtnach'>Fahrt nach</label><select name='fahrtNach' value='"
							+ entryDTO.getFahrtNach()
							+ "'><option value='null'>-</option><option value='Mark1'>Mark 1</option><option value='Mark2'>Mark 2</option><option value='Mark3'>Mark 3</option></select><label for='manoever'>Manoever</label> <select name='manoever'><option value='null'>-</option><option value='Tack'>Tack</option><option value='Jibe'>Jibe</option><option value='LayTo'>Lay To</option><option value='SetSails'>Set Sails</option><option value='ChangeSails'>Change Sails</option><option value='SailsDown'>Sails Down</option><option value='Reff'>Reff</option><option value='AnkerUp'>Anker Up</option><option value='AnkerDown'>Anker Down</option></select> <label for='vorsegel'>Vorsegel</label> <select name='vorsegel'><option value='null'>-</option><option value='Genua1'>Genua 1</option><option value='Genua2'>Genua 2</option><option value='Genua3'>Genua 3</option><option value='Fock'>Fock</option><option value='StormFock'>Storm Fock</option><option value='Blister'>Blister</option><option value='Spinaker'>Spinaker</option></select> <label for='grosssegel'>Gro&szlig;segel</label> <select name='grosssegel'><option value='null'>-</option><option value='full'>full</option><option value='reef2'>reef 1</option><option value='reef3'>reef 2</option></select></p>");
					out.write("<div class='infoZeile'><div id='divnotes' class='Info'><textarea name='notes' id='notes' cols='40' rows='21'placeholder='Notizen'></textarea></div><div id='divscreen' class='Info'><img src='img/TestScreenshot.PNG' alt='Screenshots'></div><div id='divimage' class='Info'><img src='img/NoImage.PNG' alt='Bild'></div>");
				%>
			</div>
			<input class="buttonLinks" type="button" value="Speichern" id="save" />
		</fieldset>
	</form>

</body>
</html>