<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@page import="fassade.*"%>
<%
	TripDTO tripDTO = new TripDTO();
	tripDTO.title = request.getParameter("triptitle");
	tripDTO.von = request.getParameter("von");
	tripDTO.nach = request.getParameter("nach");
	tripDTO.skipper = request.getParameter("skipper");
	tripDTO.crew = request.getParameter("crew");
	tripDTO.start = request.getParameter("start");
	tripDTO.ende = request.getParameter("ende");
	if (!(request.getParameter("dauer").isEmpty())) {
		tripDTO.dauer = Double.parseDouble(request
				.getParameter("dauer"));
	}
	if (!(request.getParameter("motor").isEmpty())) {
		tripDTO.motor = Integer.parseInt(request.getParameter("motor"));
	}
	if (request.getParameterMap().containsKey("tankgefuellt")) {
		tripDTO.setTankgefuellt(1);
	}else{
		tripDTO.setTankgefuellt(0);
	}
	tripDTO.notes = request.getParameter("notes");
	tripDTO.registernr = request.getParameter("registernr");

	Fassade fassade = new Fassade();
	fassade.saveTrip(tripDTO);
%>