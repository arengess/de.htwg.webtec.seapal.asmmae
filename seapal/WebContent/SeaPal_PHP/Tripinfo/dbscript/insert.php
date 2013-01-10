<?php

if (isset($_POST['TripTitle'])) {
	$con =
	include ("../connect.php");
	
	$boot = $_POST['Boot'];
	$triptitle = $_POST['TripTitle'];
	$von = $_POST['Von'];
	$nach= $_POST['Nach'];
	$skipper = $_POST['Skipper'];
	$crew = $_POST['Crew'];
	$start = $_POST['Start'];
	$ende = $_POST['Ende'];
	$dauer = $_POST['Dauer'];
	$motor = $_POST['Motor'];
	
	$insert = "INSERT INTO tripinformation (boot, triptitle, von, nach, skipper, crew, start, ende, dauer, motor) values ('$boot', '$triptitle', '$von', '$nach', '$skipper', '$crew', '$start', '$ende', '$dauer', '$motor')";
	if (!mysql_query($insert)) {
		echo "Fehler beim Einf&uuml;gen " . mysql_error();
	}

}
?>