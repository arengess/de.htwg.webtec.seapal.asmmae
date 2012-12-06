<html>
	<head>
		<title>Bootsinformationen</title>
		<link rel="stylesheet" type="text/css" href="./css/Logbuch.css"/>
		<script type="text/javascript" src="js/jquery-1.8.2.js"></script>
		<script type="text/javascript" src="js/RegularExpressions.js"></script>
		<?php
		include ("./dbscript/BInfo_script.php");
		?>
	</head>
	<body>
		<form action="Binfo.php" method="post">
			<h1>Bootsinformationen</h1>
			<fieldset>
				<div id="wrapper">
					<div id="textfields">
					<div id= "BInfoLinks" class="BInfo">
						<p>
							<label for="Bootsname">Bootsname</label>
							<input type="text" id="Bootsname" name="Bootsname"/>
						</p>
						<p>
							<label for="Registernr">Registernr.</label>
							<input type="text" id="Registernr" name="Registernr"/>
						</p>
						<p>
							<label for="Segelzeichen">Segelzeichen</label>
							<input type="text" id="Segelzeichen" name="Segelzeichen"/>
						</p>
						<p>
							<label for="Heimathafen">Heimathafen</label>
							<input type="text" id="Heimathafen" name="Heimathafen"/>
						</p>
						<p>
							<label for="Yachtclub">Yachtclub</label>
							<input type="text" id="Yachtclub" name="Yachtclub"/>
						</p>
						<p>
							<label for="Eigner">Eigner</label>
							<input type="text" id="Eigner" name="Eigner"/>
						</p>
						<p>
							<label for="Versicherung">Versicherung</label>
							<input type="text" id="Versicherung" name="Versicherung"/>
						</p>
						<p>
							<label for="Rufzeichen">Rufzeichen</label>
							<input type="text" id="Rufzeichen" name="Rufzeichen"/>
						</p>
					</div>
					<div id= "BInfoMitte" class="BInfo">
						<p>
							<label for="Typ">Typ</label>
							<input type="text" id="Typ" name="Typ"/>
						</p>
						<p>
							<label for="Konstrukteur">Konstrukteur</label>
							<input type="text" id="Konstrukteur" name="Konstrukteur"/>
						</p>
						<p>
							<label for="Laenge">L&auml;nge</label>
							<input type="text" id="Laenge" name="Laenge"/>
						</p>
						<p>
							<label for="Breite">Breite</label>
							<input type="text" id="Breite" name="Breite"/>
						</p>
						<p>
							<label for="Tiefgang">Tiefgang</label>
							<input type="text" id="Tiefgang" name="Tiefgang"/>
						</p>
						<p>
							<label for="Masthoehe">Masth&ouml;he</label>
							<input type="text" id="Masthoehe" name="Masthoehe"/>
						</p>
						<p>
							<label for="Verdraengung">Verdr&auml;ngung</label>
							<input type="text" id="Verdraengung" name="Verdraengung"/>
						</p>
						<p>
							<label for="Rig-Art">Rig-Art</label>
							<input type="text" id="Rig-Art" name="Rig-Art"/>
						</p>
					</div>
					<div id= "BInfoRechts" class="BInfo">
						<p>
							<label for="Baujahr">Baujahr</label>
							<input type="text" id="Baujahr" name="Baujahr"/>
						</p>
						<p>
							<label for="Motor">Motor</label>
							<input type="text" id="Motor" name="Motor"/>
						</p>
						<p>
							<label for="Tankgroesse">Tankgr&ouml;&szlig;e</label>
							<input type="text" id="Tankgroesse" name="Tankgroesse"/>
						</p>
						<p>
							<label for="Wassertankgroesse">Wassertankgr&ouml;&szlig;e</label>
							<input type="text" id="Wassertankgroesse" name="Wassertankgroesse"/>
						</p>
						<p>
							<label for="Abwassertankgroesse">Abwassertankgr&ouml;&szlig;e</label>
							<input type="text" id="Abwassertankgroesse" name="Abwassertankgroesse"/>
						</p>
						<p>
							<label for="Grosssegelgroesse">Gro&szlig;segelgr&ouml;&szlig;e</label>
							<input type="text" id="Grosssegelgroesse" name="Grosssegelgroesse"/>
						</p>
						<p>
							<label for="Genuagroesse">Genuagr&ouml;&szlig;e</label>
							<input type="text" id="Genuagroesse" name="Genuagroesse"/>
						</p>
						<p>
							<label for="Spigroesse">Spigr&ouml;&szlig;e</label>
							<input type="text" id="Spigroesse" name="Spigroesse"/>
						</p>
						</div>
					</div>
					<div >
						<input class="buttonLinks" type="button" value="Loeschen"/>
						<input class="buttonLinks" type="submit" value="Speichern"/>
						<input class="buttonLinks" type="button" value="Neuster"/>
						<input class="buttonRechts" type="button" value="Vorheriger"/>
						<input class="buttonRechts" type="button" value="N&auml;chster"/>
					</div>
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