<?php

include ("./B_dynView.js");
$connection =
include ("../connection.php");
$select = "SELECT Trip, Name, PosNStd, PosNMin, PosNSek, PosEStd, PosEMin, PosESek, COG, SOG, BTM, DTM, FahrtNach, Manoever, Vorsegel, Grosssegel FROM EntryInformation";
$result = mysql_query($select) or die("MySQL ERROR: " . mysql_error());

echo " <table border='1' rules='groups' cellspacing='10' cellpadding='10' >
<thead><tr><th>Trip</th><th>Name</th></tr></thead>
<tfoot>
<tr><td colspan = 5><input type='button' onclick='delete_entry();' value='Ausgewaehlten Eintrag Loeschen'/></td></tr>
</tfoot>
<tbody> ";
while ($row = mysql_fetch_array($result)) {
	echo "<tr class='row' onclick='Change_Background(this);'>";
	echo "<td>" . $row['Trip'] . "</td>";
	echo "<td>" . $row['Name'] . "</td>";
	echo "<td style='display:none'>" . $row['PosNStd'] . "</td>";
	echo "<td style='display:none'>" . $row['PosNMin'] . "</td>";
	echo "<td style='display:none'>" . $row['PosNSek'] . "</td>";
	echo "<td style='display:none'>" . $row['PosEStd'] . "</td>";
	echo "<td style='display:none'>" . $row['PosEMin'] . "</td>";
	echo "<td style='display:none'>" . $row['PosESek'] . "</td>";
	echo "<td style='display:none'>" . $row['COG'] . "</td>";
	echo "<td style='display:none'>" . $row['SOG'] . "</td>";
	echo "<td style='display:none'>" . $row['BTM'] . "</td>";
	echo "<td style='display:none'>" . $row['DTM'] . "</td>";
	echo "<td style='display:none'>" . $row['FahrtNach'] . "</td>";
	echo "<td style='display:none'>" . $row['Manoever'] . "</td>";
	echo "<td style='display:none'>" . $row['Vorsegel'] . "</td>";
	echo "<td style='display:none'>" . $row['Grosssegel'] . "</td>";
	echo "</tr>";
}
echo "</tbody></table>";

mysql_close($connection);
?>