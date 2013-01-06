<?php
if (isset($_POST['TripTitle'])) {
	$con = mysql_connect('localhost', 'root', '');
	if (!$con) {
		die('Verbindung schlug fehl: ' . mysql_error());
	}
	echo 'Erfolgreich verbunden';
	mysql_select_db("seapaldb", $con);

	$a = $_POST['Boot'];
	$b = $_POST['TripTitle'];
	$c = $_POST['Von'];
	$d = $_POST['Nach'];
	$e = $_POST['Skipper'];
	$f = $_POST['Crew'];
	$g = $_POST['Start'];
	$h = $_POST['Ende'];
	$i = $_POST['Motor'];
	$j = $_POST['TankGefuellt'];

	$insert = mysql_query("Insert into tinfo (Boot, TripTitle, von, nach, Skipper, Crew, Start, Ende, Motor, Tank) values ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j')");

	mysql_close($con);
}
?>