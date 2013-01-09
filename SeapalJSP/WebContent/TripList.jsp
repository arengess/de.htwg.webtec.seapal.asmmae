<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@page import="fassade.*"%>
<%@page import="java.util.HashMap"%>
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
						out.write("<tr class='row'>"
								+ "<td class='title'>"
								+ tripDTO.getTitle()
								+ "</td>"
								+ "<td>"
								+ tripDTO.getVon()
								+ "</td>"
								+ "<td>"
								+ tripDTO.getNach()
								+ "</td>"
								+ "<td><a href='http://localhost:8080/SeapalJSP/TripInfo.jsp?title="
								+ tripDTO.getTitle()
								+ "'><input type='button' value='-->'/></a></td>"+ 
								"<td class='registernr' visibility: hidden>"+ request.getParameter("registernr")+ "</td></tr>");
					}
				%>
			</tbody>
		</table>
		