<?php

include ("./B_dynView.js");
$connection =
include ("../connection.php");
$select = "SELECT Bootsname, Registernr, Segelzeichen, Heimathafen, Yachtclub, Eigner, Versicherung, Rufzeichen, Typ, Konstrukteur, Laenge, 
Breite, Ttiefgang, Masthoehe, Verdraengung, RigArt, Baujahr, Motor, Tankgroesse, Wassertankgroesse, Abwassertankgroesse, Grosssegelgroesse, Genuagroesse, Spigroesse 
FROM BoatInformation";
$result = mysql_query($select) or die("MySQL ERROR: " . mysql_error());

echo " <table border='1' rules='groups' cellspacing='10' cellpadding='10' >
<thead><tr><th>Bootsname</th><th>Inhaber</th><th>Typ</th><th>Konstrukteur</th><th>Laenge</th></tr></thead>
<tfoot>
<tr><td colspan = 5><input type='button' onclick='delete_entry();' value='Ausgewaehlten Eintrag Loeschen'/></td></tr>
</tfoot>
<tbody> ";
while ($row = mysql_fetch_array($result)) {
	echo "<tr class='row' onclick='Change_Background(this);'>";
	echo "<td>" . $row['Bootsname'] . "</td>";
	echo "<td style='display:none'>" . $row['Registernr'] . "</td>";
	echo "<td style='display:none'>" . $row['Segelzeichen'] . "</td>";
	echo "<td style='display:none'>" . $row['Heimathafen'] . "</td>";
	echo "<td style='display:none'>" . $row['Yachtclub'] . "</td>";
	echo "<td>" . $row['Eigner'] . "</td>";
	echo "<td style='display:none'>" . $row['Versicherung'] . "</td>";
	echo "<td style='display:none'>" . $row['Rufzeichen'] . "</td>";
	echo "<td>" . $row['Typ'] . "</td>";
	echo "<td>" . $row['Konstrukteur'] . "</td>";
	echo "<td>" . $row['Laenge'] . "</td>";
	echo "<td style='display:none'>" . $row['Breite'] . "</td>";
	echo "<td style='display:none'>" . $row['Tiefgang'] . "</td>";
	echo "<td style='display:none'>" . $row['Masthoehe'] . "</td>";
	echo "<td style='display:none'>" . $row['Verdraengung'] . "</td>";
	echo "<td style='display:none'>" . $row['RigArt'] . "</td>";
	echo "<td style='display:none'>" . $row['Baujahr'] . "</td>";
	echo "<td style='display:none'>" . $row['Motor'] . "</td>";
	echo "<td style='display:none'>" . $row['Tankgroesse'] . "</td>";
	echo "<td style='display:none'>" . $row['Wassertankgroesse'] . "</td>";
	echo "<td style='display:none'>" . $row['Abwassertankgroesse'] . "</td>";
	echo "<td style='display:none'>" . $row['Grosssegelgroesse'] . "</td>";
	echo "<td style='display:none'>" . $row['Genuagroesse'] . "</td>";
	echo "<td style='display:none'>" . $row['Spigroesse'] . "</td>";
	echo "</tr>";
}
echo "</tbody></table>";

mysql_close($connection);
?>