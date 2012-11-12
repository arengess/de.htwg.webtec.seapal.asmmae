<html>
	<head>
		<title>E Info</title>
		<link rel="stylesheet" type="text/css" href="./css/Logbuch.css">

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

			$insert = mysql_query("Insert into einfos (Trip, Name, PosNStd, PosNMin, PosNSek, PosEStd, PosEMin, PosESek, COG, SOG, BTM, DTM, FahrtNach, Manoever, Vorsegel, Grosssegel) values ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', '$l', '$m', '$n', '$p')");

			mysql_close($con);
		}
		?>
	</head>
	<body>
		<form>
			<fieldset>
				<div id="TInfoLinks">
					<p>
						Name
						<input type="text" name="name"/>
					</p>
					<p>
						Position
						<input type="text" name="N1"/>
						�
						<input type="text" name="N2"/>
						'
						<input type="text" name="N3"/>
						"N
						<input type="text" name="E1"/>
						�
						<input type="text" name="E2"/>
						'
						<input type="text" name="E3"/>
						"E
					</p>
					<p>
						BTM
						<input type="text" name="BTM"/>
						DTM
						<input type="text" name="DTM"/>
					</p>
<!-- 					<p>
						Manoever
						<input type="text" name="Manoever"/>
					</p> 
-->
				</div>

				<p>
					COG
					<input type="text" name="COG"/>
					SOG
					<input type="text" name="SOG"/>
				</p>

				<p>
					at
				</p>
				<p>
					Fahrt nach
					<select name="fahrtNach">
						<option value="null">-</option>
						<option value="Mark1">Mark 1</option>
						<option value="Mark2">Mark 2</option>
						<option value="Mark3">Mark 3</option>
					</select>
				</p>

				<p>
					Manoever
					<select name="Manoever">
						<option value="null">-</option>
						<option value="Tack">Tack</option>
						<option value="Jibe">Jibe</option>
						<option value="LayTo">Lay To</option>
						<option value="SetSails">Set Sails</option>
						<option value="ChangeSails">Change Sails</option>
						<option value="SailsDown">Sails Down</option>
						<option value="Reff">Reff</option>
						<option value="AnkerUp">Anker Up</option>
						<option value="AnkerDown">Anker Down</option>
					</select>

					Vorsegel
					<select name="Vorsegel">
						<option value="null">-</option>
						<option value="Genua1">Genua 1</option>
						<option value="Genua2">Genua 2</option>
						<option value="Genua3">Genua 3</option>
						<option value="Fock">Fock</option>
						<option value="StormFock">Storm Fock</option>
						<option value="Blister">Blister</option>
						<option value="Spinaker">Spinaker</option>
					</select>

					Gro&szlig;segel
					<select name="fahrtNach">
						<option value="null">-</option>
						<option value="full">full</option>
						<option value="reef2">reef 1</option>
						<option value="reef3">reef 2</option>
					</select>
				</p>

				<input class="buttonLinks" type="button" value="Neuer Eintrag"/>
				<input class="buttonLinks" type="button" value="Loeschen"/>
				<input class="buttonLinks" type="button" value="Filter"/>
				<input class="buttonRechts" type="button" value="Erster"/>
				<input class="buttonRechts" type="button" value="Letzter"/>
				<input class="buttonRechts" type="button" value="Vorheriger"/>
				<input class="buttonRechts" type="button" value="N�chster"/>
			</fieldset>
		</form>

	</body>

</html>