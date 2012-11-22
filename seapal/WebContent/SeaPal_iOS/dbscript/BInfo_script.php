<?php
if (isset($_POST['Registernr'])) {
	$con = mysql_connect('localhost', 'root', '');
	if (!$con) {
		die('Verbindung schlug fehl: ' . mysql_error());
	}
	echo 'Erfolgreich verbunden';
	mysql_select_db("seapaldb", $con);

	$a = $_POST['Bootsname'];
	$b = $_POST['Registernr'];
	$c = $_POST['Segelzeichen'];
	$d = $_POST['Heimathafen'];
	$e = $_POST['Yachtclub'];
	$f = $_POST['Eigner'];
	$g = $_POST['Versicherung'];
	$h = $_POST['Rufzeichen'];
	$i = $_POST['Typ'];
	$j = $_POST['Konstrukteur'];
	$k = $_POST['Laenge'];
	$l = $_POST['Breite'];
	$m = $_POST['Tiefgang'];
	$n = $_POST['Masthoehe'];
	$o = $_POST['Verdraengung'];
	$p = $_POST['Rig-Art'];
	$q = $_POST['Baujahr'];
	$r = $_POST['Motor'];
	$s = $_POST['Tankgroesse'];
	$t = $_POST['Wassertankgroesse'];
	$u = $_POST['Abwassertankgroesse'];
	$v = $_POST['Grosssegelgroesse'];
	$w = $_POST['Genuagroesse'];
	$x = $_POST['Spigroesse'];

	$insert = mysql_query("Insert into binfo (Bootsname, Registernr, Segelzeichen, Heimathafen, Yachtclub, Eigner,	Versicherung, Rufzeichen, Typ, Konstrukteur, Laenge, Breite, Tiefgang, Masthoehe, Verdraengung, Rigart,	Baujahr, Motor, Tankgroesse, Wassertankgroesse, Abwassertankgroesse, Grosssegelgroesse, Genuagroesse, Spigroesse) values ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', '$l', '$m', '$n', '$o', '$p', '$q', '$r', '$s', '$t', '$u', '$v', '$w', '$x') on duplicate key update");

	mysql_close($con);
}
?>