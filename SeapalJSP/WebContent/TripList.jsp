<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@page import="fassade.*"%>
<%@page import="java.util.HashMap"%>
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
		<table>
			<thead>
				<tr>
					<th>Titel</th>
					<th>von</th>
					<th>nach</th>
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
								+ "<td><a href='http://localhost:8080/SeapalJSP/TripInfo.jsp?title="
								+ tripDTO.title
								+ "'><input type='button' value='-->'/></a></td></tr>");

					}
				%>
			</tbody>
		</table>
		<div>
			<a href="http://localhost:8080/SeapalJSP/TripInfo.jsp?title=''">
				<input class='buttonLinks' type='button' value='Neuer Trip' />
			</a> <input class="buttonLinks" type="button" value="Loeschen" /> <input
				class="buttonRechts" type="button" value="Erster" /> <input
				class="buttonRechts" type="button" value="Letzter" /> <input
				class="buttonRechts" type="button" value="Vorheriger" /> <input
				class="buttonRechts" type="button" value="N&auml;chster" />
		</div>
	</fieldset>
</body>
</html>