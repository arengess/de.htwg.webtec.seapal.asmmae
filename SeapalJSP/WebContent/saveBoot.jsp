<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@page import="fassade.BootDTO" %>
<%@page import="fassade.Fassade"%>
<%
	BootDTO bootDTO = new BootDTO();

	bootDTO.bootsname = request.getParameter("Bootsname");
	bootDTO.registernr = request.getParameter("Registernr");
	bootDTO.segelzeichen = request.getParameter("Segelzeichen");
	bootDTO.heimathafen = request.getParameter("Heimathafen");
	bootDTO.yachtclub = request.getParameter("Yachtclub");
	bootDTO.eigner = request.getParameter("Eigner");
	bootDTO.versicherung = request.getParameter("Versicherung");
	bootDTO.rufzeichen = request.getParameter("Rufzeichen");
	bootDTO.typ = request.getParameter("Typ");
	bootDTO.konstrukteur = request.getParameter("Konstrukteur");
	if (!request.getParameter("Laenge").isEmpty()) {
		bootDTO.laenge = Double.parseDouble(request
		.getParameter("Laenge"));
	}
	if (!request.getParameter("Breite").isEmpty()) {
		bootDTO.breite = Double.parseDouble(request
		.getParameter("Breite"));
	}
	if (!request.getParameter("Tiefgang").isEmpty()) {
		bootDTO.tiefgang = Double.parseDouble(request
		.getParameter("Tiefgang"));
	}
	if (!request.getParameter("Masthoehe").isEmpty()) {
		bootDTO.masthoehe = Double.parseDouble(request
		.getParameter("Masthoehe"));
	}
	if (!request.getParameter("Verdraengung").isEmpty()) {
		bootDTO.verdraengung = Double.parseDouble(request
		.getParameter("Verdraengung"));
	}
	bootDTO.rigArt = request.getParameter("rigArt");
	if (!request.getParameter("Baujahr").isEmpty()) {
		bootDTO.baujahr = Integer.parseInt(request
		.getParameter("Baujahr"));
	}
	bootDTO.motor = request.getParameter("Motor");
	if (!request.getParameter("Tankgroesse").isEmpty()) {
		bootDTO.tankgroesse = Double.parseDouble(request
		.getParameter("Tankgroesse"));
	}
	if (!request.getParameter("Wassertankgroesse").isEmpty()) {
		bootDTO.wassertankgroesse = Double.parseDouble(request
		.getParameter("Wassertankgroesse"));
	}
	if (!request.getParameter("Abwassertankgroesse").isEmpty()) {
		bootDTO.abwassertankgroesse = Double.parseDouble(request
		.getParameter("Abwassertankgroesse"));
	}
	if (!request.getParameter("Grosssegelgroesse").isEmpty()) {
		bootDTO.grosssegelgroesse = Double.parseDouble(request
		.getParameter("Grosssegelgroesse"));
	}
	if (!request.getParameter("Genuagroesse").isEmpty()) {
		bootDTO.genuagroesse = Double.parseDouble(request
		.getParameter("Genuagroesse"));
	}
	if (!request.getParameter("Spigroesse").isEmpty()) {
		bootDTO.spigroesse = Double.parseDouble(request
		.getParameter("Spigroesse"));
	}
	Fassade fassade = new Fassade();
	fassade.saveBoot(bootDTO);
%>