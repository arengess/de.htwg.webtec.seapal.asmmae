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
					for (String key : fassade.getUebersicht().keySet()){
						BootDTO bootDTO = bootDTOMap.get(key);
						out.write("<tr class='boot' id='"+bootDTO.registernr+"'>" +
								"<td>"+ bootDTO.registernr +"</td>"+
								"<td>"+ bootDTO.bootsname +"</td>"+
								"<td>"+ bootDTO.eigner+"</td>"+
								"<td>"+ bootDTO.typ+"</td>"+
								"<td>"+ bootDTO.baujahr+"</td>"+
								"<td class='hidden'>"+ bootDTO.segelzeichen+"</td>"+
								"<td class='hidden'>"+ bootDTO.heimathafen+"</td>"+
								"<td class='hidden'>"+ bootDTO.yachtclub+"</td>"+
								"<td class='hidden'>"+ bootDTO.versicherung+"</td>"+
								"<td class='hidden'>"+ bootDTO.rufzeichen+"</td>"+
								"<td class='hidden'>"+ bootDTO.konstrukteur+"</td>"+
								"<td class='hidden'>"+ bootDTO.laenge+"</td>"+
								"<td class='hidden'>"+ bootDTO.breite+"</td>"+
								"<td class='hidden'>"+ bootDTO.tiefgang+"</td>"+
								"<td class='hidden'>"+ bootDTO.masthoehe+"</td>"+
								"<td class='hidden'>"+ bootDTO.verdraengung+"</td>"+
								"<td class='hidden'>"+ bootDTO.rigArt+"</td>"+
								"<td class='hidden'>"+ bootDTO.motor+"</td>"+
								"<td class='hidden'>"+ bootDTO.tankgroesse+"</td>"+
								"<td class='hidden'>"+ bootDTO.wassertankgroesse+"</td>"+
								"<td class='hidden'>"+ bootDTO.abwassertankgroesse+"</td>"+
								"<td class='hidden'>"+ bootDTO.grosssegelgroesse+"</td>"+
								"<td class='hidden'>"+ bootDTO.genuagroesse+"</td>"+
								"<td class='hidden'>"+ bootDTO.spigroesse +"</td></tr>");
					}
				%>
			</tbody>
		</table>
	</fieldset>
</div>