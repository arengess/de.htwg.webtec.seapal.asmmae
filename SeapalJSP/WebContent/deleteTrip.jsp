<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<%@page import="fassade.BootDTO"%>
<%@page import="fassade.Fassade"%>
<% 
Fassade fassade = new Fassade();
fassade.deleteTrip(request.getParameter("title"));
%>