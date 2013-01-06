<?php

include ("./B_dynView.js");
$connection =
include ("../connection.php");
$select = "SELECT Boot, TripTitle, von, nach, Skipper, Crew, Start, Ende, Motor, Tank FROM TripInformation";
$result = mysql_query($select) or die("MySQL ERROR: " . mysql_error());

echo " <table border='1' rules='groups' cellspacing='10' cellpadding='10' >
<thead><tr><th>Boot</th><th>TripTitle</th><th>von</th><th>nach</th><th>Skipper</th></tr></thead>
<tfoot>
<tr><td colspan = 5><input type='button' onclick='delete_entry();' value='Ausgewaehlten Eintrag Loeschen'/></td></tr>
</tfoot>
<tbody> ";
while ($row = mysql_fetch_array($result)) {
	echo "<tr class='row' onclick='Change_Background(this);'>";
	echo "<td>" . $row['Boot'] . "</td>";
	echo "<td>" . $row['TripTitle'] . "</td>";
	echo "<td>" . $row['von'] . "</td>";
	echo "<td>" . $row['nach'] . "</td>";
	echo "<td>" . $row['Skipper'] . "</td>";
	echo "<td style='display:none'>" . $row['Crew'] . "</td>";
	echo "<td style='display:none'>" . $row['Start'] . "</td>";
	echo "<td style='display:none'>" . $row['Ende'] . "</td>";
	echo "<td style='display:none'>" . $row['Motor'] . "</td>";
	echo "<td style='display:none'>" . $row['Tank'] . "</td>";
	echo "</tr>";
}
echo "</tbody></table>";

mysql_close($connection);
?>