<?php

include ("./dbscript/E_dynView.js");
$connection =
include ("../connect.php");
$select = "SELECT Trip, Name, NStd, NMin, NSek, EStd, EMin, ESek, COG, SOG, BTM, DTM, FahrtNach, Manoever, Vorsegel, Grosssegel FROM EntryInformation";
$result = mysql_query($select) or die("MySQL ERROR: " . mysql_error());

echo " <table border='1' rules='groups' cellspacing='10' cellpadding='10' >
<thead><tr><th>Trip</th><th>Name</th></tr></thead>
<tfoot>
<tr><td colspan = 5><input type='button' onclick='delete_entry();' value='Ausgew&auml;hlten Eintrag L&ouml;schen'/></td></tr>
</tfoot>
<tbody> ";
while ($row = mysql_fetch_array($result)) {
	echo "<tr class='row' onclick='Change_Background(this);'>";
	echo "<td>" . $row['Trip'] . "</td>";
	echo "<td>" . $row['Name'] . "</td>";
	echo "<td style='display:none'>" . $row['NStd'] . "</td>";
	echo "<td style='display:none'>" . $row['NMin'] . "</td>";
	echo "<td style='display:none'>" . $row['NSek'] . "</td>";
	echo "<td style='display:none'>" . $row['EStd'] . "</td>";
	echo "<td style='display:none'>" . $row['EMin'] . "</td>";
	echo "<td style='display:none'>" . $row['ESek'] . "</td>";
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