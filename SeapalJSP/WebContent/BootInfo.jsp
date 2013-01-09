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
					HashMap<String, BootDTO> bootDTOMap = fassade.getUebersicht();
					for (String key : bootDTOMap.keySet()){
						BootDTO bootDTO = bootDTOMap.get(key);
						out.write("<tr class='row'>"
								+ "<td class='Registernr'>"
								+ bootDTO.registernr
								+ "</td>"
								+ "<td class='Bootsname'>"
								+ bootDTO.bootsname
								+ "</td>"
								+ "<td class='Eigner'>"
								+ bootDTO.eigner
								+ "</td>"
								+ "<td class='Typ'>"
								+ bootDTO.typ
								+ "</td>"
								+ "<td class='Baujahr'>"
								+ bootDTO.baujahr
								+ "</td>"
								+ "<td><a href='http://localhost:8080/SeapalJSP/TripList.jsp?registernr="
								+ bootDTO.registernr
								+ "'><input type='button' value='-->'/></a></td>"
								+ "<td  class='Segelzeichen' visibility: hidden>" + bootDTO.segelzeichen + "</td>"
								+ "<td  class='Heimathafen' visibility: hidden>" + bootDTO.heimathafen + "</td>"
								+ "<td  class='Yachtclub' visibility: hidden>" + bootDTO.yachtclub + "</td>"
								+ "<td  class='Versicherung' visibility: hidden>" + bootDTO.versicherung + "</td>"
								+ "<td  class='Rufzeichen' visibility: hidden>" + bootDTO.rufzeichen + "</td>"
								+ "<td  class='Konstrukteur' visibility: hidden>" + bootDTO.konstrukteur + "</td>"
								+ "<td  class='Laenge' visibility: hidden>" + bootDTO.laenge + "</td>"
								+ "<td  class='Breite' visibility: hidden>" + bootDTO.breite + "</td>"
								+ "<td  class='Tiefgang' visibility: hidden>" + bootDTO.tiefgang + "</td>"
								+ "<td  class='Masthoehe' visibility: hidden>" + bootDTO.masthoehe + "</td>"
								+ "<td  class='Verdraengung' visibility: hidden>" + bootDTO.verdraengung + "</td>"
								+ "<td  class='RigArt' visibility: hidden>" + bootDTO.rigArt + "</td>"
								+ "<td  class='Motor' visibility: hidden>" + bootDTO.motor + "</td>"
								+ "<td  class='Tankgroesse' visibility: hidden>" + bootDTO.tankgroesse + "</td>"
								+ "<td  class='Wassertankgroesse' visibility: hidden>" + bootDTO.wassertankgroesse
								+ "</td>" + "<td class='Abwassertankgroesse' visibility: hidden>"
								+ bootDTO.abwassertankgroesse + "</td>"
								+ "<td class='Grosssegelgroesse' visibility: hidden>" + bootDTO.grosssegelgroesse
								+ "</td>" + "<td class='Genuagroesse' visibility: hidden>" + bootDTO.genuagroesse
								+ "</td>" + "<td class='Spigroesse' visibility: hidden>" + bootDTO.spigroesse
								+ "</td></tr>");
					}
				%>
			</tbody>
		</table>
	</fieldset>
</div>