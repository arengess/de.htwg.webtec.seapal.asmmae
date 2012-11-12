<html>
	<head>
		<title>T Info</title>
		<link rel="stylesheet" type="text/css" href="./css/Logbuch.css">

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

			$insert = mysql_query("Insert into tinfos (Boot, TripTitle, von, nach, Skipper, Crew, Start, Ende, Motor, Tank) values ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j')");

			mysql_close($con);
			unset($_POST['Registernr']);
		}
		?>
	</head>
	<body>
		<form action="Tinfo.php" method="post">
			<h1>Trip Informationen</h1>
			<fieldset>
				<div id="TInfoLinks">
					<p>
						Boot
						<input type="text" name="Boot"/>
					</p>
					<p>
						Trip Title
						<input type="text" name="TripTitle"/>
					</p>
					<p>
						Von
						<input type="text" name="Von"/>
					</p>
					<p>
						Nach
						<input type="text" name="Nach"/>
					</p>
					<p>
						Skipper
						<input type="text" name="Skipper"/>
					</p>
				</div>

				<p>
					Crew 					<textarea name="Crew"></textarea>
				</p>
				<p>
					Start
					<input type="text" name="Start"/>
				</p>
				<p>
					Ende
					<input type="text" name="Ende"/>
				</p>
				<p>
					Dauer
					<input type="text" name="Dauer"/>
				</p>
				<p>
					Motor(min)
					<input type="text" name="Motor"/>
				</p>
				<p>
					Tank gef&uuml;llt
					<input type="checkbox" name="TankGefuellt"/>
				</p>

				<input class="buttonLinks" type="submit" value="Neuer Eintrag"/>
				<input class="buttonLinks" type="button" value="Loeschen"/>
				<input class="buttonLinks" type="button" value="Filter"/>
				<input class="buttonRechts" type="button" value="Erster"/>
				<input class="buttonRechts" type="button" value="Letzter"/>
				<input class="buttonRechts" type="button" value="Vorheriger"/>
				<input class="buttonRechts" type="button" value="N&auml;chster"/>
			</fieldset>
		</form>

	</body>

</html>