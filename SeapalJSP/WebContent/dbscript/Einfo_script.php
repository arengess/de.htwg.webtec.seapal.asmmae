<?php
if (isset($_POST['TripTitle'])) {
	$con = mysql_connect('localhost', 'root', '');
	if (!$con) {
		die('Verbindung schlug fehl: ' . mysql_error());
	}
	echo 'Erfolgreich verbunden';
	mysql_select_db("seapaldb", $con);

	$a = $_POST['Trip'];
	$b = $_POST['name'];
	$c = $_POST['N1'];
	$d = $_POST['N2'];
	$e = $_POST['N3'];
	$f = $_POST['E1'];
	$g = $_POST['E2'];
	$h = $_POST['E3'];
	$i = $_POST['BTM'];
	$j = $_POST['DTM'];
	$k = $_POST['COG'];
	$l = $_POST['SOG'];
	$m = $_POST['fahrtNach'];
	$n = $_POST['Manoever'];
	$o = $_POST['Vorsegel'];
	$p = $_POST['Grosssegel'];

	$insert = mysql_query("Insert into einfo (Trip, Name, PosNStd, PosNMin, PosNSek, PosEStd, PosEMin, PosESek, COG, SOG, BTM, DTM, FahrtNach, Manoever, Vorsegel, Grosssegel) values ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', '$l', '$m', '$n', '$p')");

	mysql_close($con);
}
?>