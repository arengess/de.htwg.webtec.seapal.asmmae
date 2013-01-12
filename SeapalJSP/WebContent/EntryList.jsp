<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@page import="fassade.*"%>
<%@page import="java.util.HashMap"%>
<div id="tablewrapper">
	<fieldset>
		<table>
			<thead>
			</thead>
			<tbody>
				<%
					Fassade fassade = new Fassade();
					HashMap<String, EntryDTO> entryDTOMap = fassade.getEntrysTrip(request.getParameter("triptitle"));
					for (String key : entryDTOMap.keySet()) {
						EntryDTO entryDTO = entryDTOMap.get(key);
						out.write("<tr class='row'>" + "<td class='name'>"
								+ entryDTO.getName()
								+ "</td>"
								+ "<td>"
								+ entryDTO.getTime()
								+ "</td>"
								+ "<td>"
								+ entryDTO.getNgrad()
								+ "</td>"
										+ "<td>"
										+ entryDTO.getNmin()
										+ "</td>"
												+ "<td>"
												+ entryDTO.getNsec()
												+ "N</td>"
								+ "<td>"
								+ entryDTO.getEgrad()
								+ "</td>"
										+ "<td>"
										+ entryDTO.getEmin()
										+ "</td>"
												+ "<td>"
												+ entryDTO.getEsec()
												+ "E</td>"
								+ "<td> COG"
								+ entryDTO.getCog()
								+ "</td>"
								+ "<td> SOG"
								+ entryDTO.getSog()
								+ "</td>"
								+ "<td><a href='http://localhost:8080/SeapalJSP/EntryInfo.jsp?name="
								+ entryDTO.getName()
								+ "'><input type='button' value='-->'/></a></td>"
								+ "<td class='triptitel' visibility: hidden>"
								+ request.getParameter("triptitel") + "</td></tr>");
					}
				%>
			</tbody>
		</table>
	</fieldset>
</div>