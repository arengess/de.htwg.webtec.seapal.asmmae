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
							<input type="text" id="Bootsname"/>
						</p>
						<p>
							Registernr.
							<input type="text" id="Registernr"/>
						</p>
						<p>
							Segelzeichen
							<input type="text" id="Segelzeichen"/>
						</p>
						<p>
							Heimathafen
							<input type="text" id="Heimathafen"/>
						</p>
						<p>
							Yachtclub
							<input type="text" id="Yachtclub"/>
						</p>
						<p>
							Eigner
							<input type="text" id="Eigner"/>
						</p>
						<p>
							Versicherung
							<input type="text" id="Versicherung"/>
						</p>
						<p>
							Rufzeichen
							<input type="text" id="Rufzeichen"/>
						</p>
					</div>
					<div id="BInfoMitte">
						<p>
							Typ
							<input type="text" id="Typ"/>
						</p>
						<p>
							Konstrukteur
							<input type="text" id="Konstrukteur"/>
						</p>
						<p>
							L&auml;nge
							<input type="text" id="Laenge"/>
						</p>
						<p>
							Breite
							<input type="text" id="Breite"/>
						</p>
						<p>
							Tiefgang
							<input type="text" id="Tiefgang"/>
						</p>
						<p>
							Masth&ouml;he
							<input type="text" id="Masthoehe"/>
						</p>
						<p>
							Verdr&auml;ngung
							<input type="text" id="Verdraengung"/>
						</p>
						<p>
							Rig-Art
							<input type="text" id="Rig-Art"/>
						</p>
					</div>
					<div id="BInfoRechts">
						<p>
							Baujahr
							<input type="text" id="Baujahr"/>
						</p>
						<p>
							Motor
							<input type="text" id="Motor"/>
						</p>
						<p>
							Tankgr&ouml;&szlig;e
							<input type="text" id="Tankgroesse"/>
						</p>
						<p>
							Wassertankgr&ouml;&szlig;e
							<input type="text" id="Wassertankgroesse"/>
						</p>
						<p>
							Abwassertankgr&ouml;&szlig;e
							<input type="text" id="Abwassertankgroesse"/>
						</p>
						<p>
							Gro&szlig;segelgr&ouml;&szlig;e
							<input type="text" id="Grosssegelgroesse"/>
						</p>
						<p>
							Genuagr&ouml;&szlig;e
							<input type="text" id="Genuagroesse"/>
						</p>
						<p>
							Spigr&ouml;&szlig;e
							<input type="text" id="Spigroesse"/>
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
						<thead>
							<th>Registernr.</th>
							<th>Bootsname</th>
							<th>Eigner</th>
							<th>Typ</th>
							<th>Baujahr</th>
						</thead>
						<tbody>
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
						</tbody>
					</table>
				</fieldset>
			</div>
		</form>
	</body>
</html>