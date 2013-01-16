<?php
$connection =
include ("../connect.php");
$action = $_POST['action'];

switch($action) {
	case('insert') :
		if ($_POST[registernr]) {
			$insert = "INSERT INTO boatinformation (Registernr, Bootsname, Segelzeichen, Heimathafen,
					 Yachtclub, Eigner, Versicherung, Rufzeichen, Typ, Konstrukteur, Laenge, Breite, 
					 Tiefgang, Masthoehe, Verdraengung, RigArt, Baujahr, Motor, Tankgroesse, Wassertankgroesse, 
					 Abwassertankgroesse, Grosssegelgroesse, Genuagroesse, Spiegroesse) VALUES 
					 ('$_POST[registernr]','$_POST[bootsname]','$_POST[segelzeichen]','$_POST[heimathafen]','$_POST[yachtclub]',
					 '$_POST[eigner]','$_POST[versicherung]','$_POST[rufzeichen]','$_POST[typ]','$_POST[konstrukteur]',
					 '$_POST[laenge]','$_POST[breite]','$_POST[tiefgang]','$_POST[masthoehe]','$_POST[verdraengung]','$_POST[rigArt]',
					 '$_POST[baujahr]','$_POST[motor]','$_POST[tankgroesse]','$_POST[wassertankgroesse]','$_POST[abwassertankgroesse]',
					 '$_POST[grosssegelgroesse]','$_POST[genuagroesse]','$_POST[spie]')";
			$res = array();
			if (!mysql_query($insert)) {
				$res['msg'] = "MySQL ERROR: " . mysql_error();
			} else {
				$res['msg'] = "Neuer Eintrag eingefügt.";
			}
			echo json_encode($res);
			mysql_close($connection);
		}
		break;

	case('delete') :
		$delete = "DELETE FROM boatinformation WHERE registernr = '$_POST[key]'";
		$res = array();
		if (!mysql_query($delete)) {
			$res['msg'] = "MySQL ERROR: " . mysql_error();
		} else {
			$res['msg'] = "Eintrag gelöscht.";
		}
		echo json_encode($res);
		mysql_close($connection);
		break;
}
?>