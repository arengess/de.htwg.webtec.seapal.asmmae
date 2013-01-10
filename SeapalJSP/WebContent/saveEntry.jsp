<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@page import="fassade.*"%>
<%
	if (!(request.getParameter("name").isEmpty())) {
		EntryDTO entryDTO = new EntryDTO();
		entryDTO.name = request.getParameter("name");
		if (!(request.getParameter("ngrad").isEmpty())) {
			entryDTO.ngrad = Integer.parseInt(request
					.getParameter("ngrad"));
		}
		if (!(request.getParameter("nmin").isEmpty())) {
			entryDTO.nmin = Integer.parseInt(request
					.getParameter("nmin"));
		}
		if (!(request.getParameter("nsec").isEmpty())) {
			entryDTO.nsec = Integer.parseInt(request
					.getParameter("nsec"));
		}
		if (!(request.getParameter("egrad").isEmpty())) {
			entryDTO.egrad = Integer.parseInt(request
					.getParameter("egrad"));
		}
		if (!(request.getParameter("emin").isEmpty())) {
			entryDTO.emin = Integer.parseInt(request
					.getParameter("emin"));
		}
		if (!(request.getParameter("esec").isEmpty())) {
			entryDTO.esec = Integer.parseInt(request
					.getParameter("esec"));
		}
		if (!(request.getParameter("cog").isEmpty())) {
			entryDTO.cog = Double.parseDouble(request
					.getParameter("cog"));
		}
		if (!(request.getParameter("sog").isEmpty())) {
			entryDTO.sog = Double.parseDouble(request
					.getParameter("sog"));
		}
		if (!(request.getParameter("btm").isEmpty())) {
			entryDTO.btm = Integer
					.parseInt(request.getParameter("btm"));
		}
		if (!(request.getParameter("dtm").isEmpty())) {
			entryDTO.dtm = Double.parseDouble(request
					.getParameter("dtm"));
		}
		entryDTO.fahrtNach = request.getParameter("fahrtnach");
		entryDTO.manoever = request.getParameter("manoever");
		entryDTO.vorsegel = request.getParameter("vorsegel");
		entryDTO.grosssegel = request.getParameter("grosssegel");
		entryDTO.notes = request.getParameter("notes");
		entryDTO.triptitle = request.getParameter("triptitle");
		Fassade fassade = new Fassade();
		fassade.saveEntry(entryDTO);
	}
%>