<html>
	<head>
		<title>Bootsinformationen</title>
		<link rel="stylesheet" type="text/css" href="./css/Logbuch.css"/>
		<?php
		include ("./dbscript/BInfo_script.php");
		?>
	</head>
	<body>
		<form action="Binfo.php" method="post">
			<h1>Bootsinformationen</h1>
			<fieldset>
				<div id="wrapper">
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
				</div>
			</fieldset>
			<div id="tablewrapper">
				<fieldset>
					<table>
						<tr>
							<th>Registernr.</th>
							<th>Bootsname</th>
							<th>Eigner</th>
							<th>Typ</th>
							<th>Baujahr</th>

						</tr>
						<tr>
							<td id="TRegisternr"></td>
							<td id="TBootsname"></td>
							<td id="TEigner"></td>
							<td id="TTyp"></td>
							<td id="TBaujahr"></td>
							<td id="TSegelzeichen"></td>
							<td id="THeimathafen"></td>
							<td id="TYachtclub"></td>
							<td id="TVersicherung"></td>
							<td id="TRufzeichen"></td>
							<td id="TKonstrukteur"></td>
							<td id="TLaenge"></td>
							<td id="TBreite"></td>
							<td id="TTiefgang"></td>
							<td id="TMasthoehe"></td>
							<td id="TVerdraenung"></td>
							<td id="TRig-Art"></td>
							<td id="TMotor"></td>
							<td id="TTankgroesse"></td>
							<td id="TWassertankgroesse"></td>
							<td id="Abwassertankgroesse"></td>
							<td id="Grosssegelgroesse"></td>
							<td id="TGenuagroesse"></td>
							<td id="TSpigroesse"></td>
						</tr>
					</table>
				</fieldset>
			</div>

		</form>
	</body>
</html>