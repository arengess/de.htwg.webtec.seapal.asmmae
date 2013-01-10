<?php

if (isset($_POST['Registernr'])) {
	$con =
	include ("./dbscript/connect.php");
	
	$bootsname = $_POST['Bootsname'];
	$registernr = $_POST['Registernr'];
	$segelzeichen = $_POST['Segelzeichen'];
	$heimathafen= $_POST['Heimathafen'];
	$yachtclub = $_POST['Yachtclub'];
	$eigner = $_POST['Eigner'];
	$versicherung = $_POST['Versicherung'];
	$rufzeichen = $_POST['Rufzeichen'];
	$typ = $_POST['Typ'];
	$konstrukteur = $_POST['Konstrukteur'];
	$laenge = $_POST['Laenge'];
	$breite = $_POST['Breite'];
	$tiefgang = $_POST['Tiefgang'];
	$masthoehe = $_POST['Masthoehe'];
	$verdraengung = $_POST['Verdraengung'];
	$rigart = $_POST['Rig-Art'];
	$baujahr = $_POST['Baujahr'];
	$motor = $_POST['Motor'];
	$tank = $_POST['Tankgroesse'];
	$wasser = $_POST['Wassertankgroesse'];
	$abwasser = $_POST['Abwassertankgroesse'];
	$grosssegel = $_POST['Grosssegelgroesse'];
	$genua = $_POST['Genuagroesse'];
	$spie = $_POST['Spiegroesse'];

	$insert = "INSERT INTO boatinformation (Bootsname, Registernr, Segelzeichen, Heimathafen, Yachtclub, Eigner, Versicherung, Rufzeichen, Typ, Konstrukteur, Laenge, Breite, Tiefgang, Masthoehe, Verdraengung, Rigart, Baujahr, Motor, Tankgroesse, Wassertankgroesse, Abwassertankgroesse, Grosssegelgroesse, Genuagroesse, Spiegroesse) values ('$bootsname', '$registernr', '$segelzeichen', '$heimathafen', '$yachtclub', '$eigner', '$versicherung', '$rufzeichen', '$typ', '$konstrukteur', '$laenge', '$breite', '$tiefgang', '$masthoehe', '$verdraengung', '$rigart', '$baujahr', '$motor', '$tank', '$wasser', '$abwasser', '$grosssegel', '$genua', '$spie')";
	if (!mysql_query($insert)) {
		echo "Fehler beim Einf&uuml;gen" . mysql_error();
	}

}
?>