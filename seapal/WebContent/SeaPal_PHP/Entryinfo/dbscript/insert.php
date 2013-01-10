<?php

if (isset($_POST['Name'])) {
	$con =
	include ("../connect.php");

	$Trip = $_POST['Trip'];
	$Name = $_POST['Name'];
	$NStd = $_POST['NStd'];
	$NMin = $_POST['NMin'];
	$NSek = $_POST['NSek'];
	$EStd = $_POST['EStd'];
	$EMin = $_POST['EMin'];
	$ESek = $_POST['ESek'];
	$btm = $_POST['BTM'];
	$dtm = $_POST['DTM'];
	$cog = $_POST['COG'];
	$sog = $_POST['SOG'];
	$fahrtnach = $_POST['FahrtNach'];
	$manoever = $_POST['Manoever'];
	$vorsegel = $_POST['Vorsegel'];
	$grosssegel = $_POST['Grosssegel'];

	$insert = "INSERT INTO entryinformation (Trip, Name, NStd, NMin, NSek, EStd, EMin, ESek, btm, dtm, cog, sog, fahrtnach, manoever, vorsegel, grosssegel) values ('$Trip', '$Name', '$NStd', '$NMin', '$NSek', '$EStd', '$EMin', '$ESek', '$btm', '$dtm', '$cog', '$sog', '$fahrtnach', '$manoever', '$vorsegel', '$grosssegel')";
	if (!mysql_query($insert)) {
		echo "Fehler beim Einf&uuml;gen " . mysql_error();
	}

}
?>