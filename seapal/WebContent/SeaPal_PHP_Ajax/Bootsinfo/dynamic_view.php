<?php

$connection =
include ("../connect.php");

$select = "SELECT Bootsname, Registernr, Segelzeichen, Heimathafen, Yachtclub, Eigner, Versicherung, Rufzeichen, Typ, Konstrukteur, Laenge, 
Breite, Tiefgang, Masthoehe, Verdraengung, RigArt, Baujahr, Motor, Tankgroesse, Wassertankgroesse, Abwassertankgroesse, Grosssegelgroesse, Genuagroesse, Spiegroesse 
FROM Boatinformation";
$result = mysql_query($select) or die("MySQL ERROR: " . mysql_error());

echo "<table border='1' rules='groups' cellspacing='10' cellpadding='10'>
<thead><tr><th>Bootsname</th><th>Registernr</th><th>Inhaber</th><th>Typ</th><th>Laenge</th></tr></thead>
<tfoot>
<tr><td colspan = 6><input type='button' onclick='delete_entry();' value='Ausgew&auml;hlten Eintrag L&ouml;schen'/></td></tr>
</tfoot>
<tbody>";

while ($row = mysql_fetch_array($result)) {
	echo "<tr class='row' onclick='set_values(this);'>";
	echo "<td>" . $row['Bootsname'] . "</td>";
	echo "<td>" . $row['Registernr'] . "</td>";
	echo "<td style='display:none'>" . $row['Segelzeichen'] . "</td>";
	echo "<td style='display:none'>" . $row['Heimathafen'] . "</td>";
	echo "<td style='display:none'>" . $row['Yachtclub'] . "</td>";
	echo "<td>" . $row['Eigner'] . "</td>";
	echo "<td style='display:none'>" . $row['Versicherung'] . "</td>";
	echo "<td style='display:none'>" . $row['Rufzeichen'] . "</td>";
	echo "<td>" . $row['Typ'] . "</td>";
	echo "<td style='display:none'>" . $row['Konstrukteur'] . "</td>";
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
	echo "<td style='display:none'>" . $row['Spiegroesse'] . "</td>";
	echo "<td><a style='text-decoration:none' href='../triplist_php_ajax/triplist.php?val=" . $row['Bootsname'] . "'>Trips</a></td>";
	echo "</tr>";
}
echo "</tbody></table>";

mysql_close($connection);
?>
