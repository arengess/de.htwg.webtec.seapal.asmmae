<html>
	<head>
		<title>Bootsinformationen</title>
		<link rel="stylesheet" type="text/css" href="./css/Logbuch.css"/>
		<?php
		if (isset($_POST['Registernr'])){
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

		$insert = mysql_query("Insert into binfos (Bootsname, Registernr, Segelzeichen, Heimathafen, Yachtclub, Eigner,	Versicherung, Rufzeichen, Typ, Konstrukteur, Laenge, Breite, Tiefgang, Masthoehe, Verdraengung, Rigart,	Baujahr, Motor, Tankgroesse, Wassertankgroesse, Abwassertankgroesse, Grosssegelgroesse, Genuagroesse, Spigroesse) values ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', '$l', '$m', '$n', '$o', '$p', '$q', '$r', '$s', '$t', '$u', '$v', '$w', '$x')");

		mysql_close($con);
		}
		?>
	</head>
	<body>
		<form action="Binfo.php" method="post">
			<h1>Bootsinformationen</h1>
			<fieldset>
				<div id="BInfoLinks">
					<p>
						<label for="Bootsname">Bootsname</label>
						<input type="text" name="Bootsname"/>
					</p>
					<p>
						Registernr.
						<input type="text" name="Registernr"/>
					</p>
					<p>
						Segelzeichen
						<input type="text" name="Segelzeichen"/>
					</p>
					<p>
						Heimathafen
						<input type="text" name="Heimathafen"/>
					</p>
					<p>
						Yachtclub
						<input type="text" name="Yachtclub"/>
					</p>
					<p>
						Eigner
						<input type="text" name="Eigner"/>
					</p>
					<p>
						Versicherung
						<input type="text" name="Versicherung"/>
					</p>
					<p>
						Rufzeichen
						<input type="text" name="Rufzeichen"/>
					</p>
				</div>
				<div id="BInfoMitte">
					<p>
						Typ
						<input type="text" name="Typ"/>
					</p>
					<p>
						Konstrukteur
						<input type="text" name="Konstrukteur"/>
					</p>
					<p>
						L&auml;nge
						<input type="text" name="Laenge"/>
					</p>
					<p>
						Breite
						<input type="text" name="Breite"/>
					</p>
					<p>
						Tiefgang
						<input type="text" name="Tiefgang"/>
					</p>
					<p>
						Masth&ouml;he
						<input type="text" name="Masthoehe"/>
					</p>
					<p>
						Verdr&auml;ngung
						<input type="text" name="Verdraengung"/>
					</p>
					<p>
						Rig-Art
						<input type="text" name="Rig-Art"/>
					</p>
				</div>
				<div id="BInfoRechts">
					<p>
						Baujahr
						<input type="text" name="Baujahr"/>
					</p>
					<p>
						Motor
						<input type="text" name="Motor"/>
					</p>
					<p>
						Tankgr&ouml;&szlig;e
						<input type="text" name="Tankgroesse"/>
					</p>
					<p>
						Wassertankgr&ouml;&szlig;e
						<input type="text" name="Wassertankgroesse"/>
					</p>
					<p>
						Abwassertankgr&ouml;&szlig;e
						<input type="text" name="Abwassertankgroesse"/>
					</p>
					<p>
						Gro&szlig;segelgr&ouml;&szlig;e
						<input type="text" name="Grosssegelgroesse"/>
					</p>
					<p>
						Genuagr&ouml;&szlig;e
						<input type="text" name="Genuagroesse"/>
					</p>
					<p>
						Spigr&ouml;&szlig;e
						<input type="text" name="Spigroesse"/>
					</p>
				</div>
				<input class="buttonLinks" type="button" value="Loeschen"/>
				<input class="buttonLinks" type="submit" value="Speichern"/>
				<input class="buttonLinks" type="button" value="Neuster"/>
				<input class="buttonRechts" type="button" value="Vorheriger"/>
				<input class="buttonRechts" type="button" value="N&auml;chster"/>

			</fieldset>
		</form>
	</body>
</html>