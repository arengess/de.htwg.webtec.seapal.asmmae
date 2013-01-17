<?php
	$connection = include("../connect.php");
	echo "<h1>Trips von Boot: $_GET[val]</h1>";
	
	$select = "SELECT triptitle,von,nach,skipper,start,ende,boot FROM tripinformation WHERE boot='$_GET[val]'";
    $result = mysql_query($select) or die ("MySQL ERROR: " . mysql_error());
	
	echo "	<table border='1' class='table1' rules='groups' cellspacing='10' cellpadding='10' >
			<thead><tr><th>Title</th><th>Von</th><th>Nach</th><th>Skipper</th><th>Start</th><th>Ende</th><th>Zu dem Trip</th></tr></thead>
			<tfoot>
			<tr>
				<td><input type='button' onclick='delete_entry();' value='Trip L&ouml;schen'/></td>
				<td><a style='text-decoration:none' href='../Tripinfo/tripinformation.php?newval=$_GET[val]'><input type='button' value='Trip anlegen'/></a></td>
			</tr>
			</tfoot>
			<tbody>	";
	while ($row = mysql_fetch_array($result)) {
		echo "<tr class='row' onclick='set_keys(this);'>";
		echo "<td>".$row['triptitle']."</td>";
		echo "<td>".$row['von']."</td>";
		echo "<td>".$row['nach']."</td>";
		echo "<td>".$row['skipper']."</td>";
		echo "<td>".$row['start']."</td>";
		echo "<td>".$row['ende']."</td>";
		echo "<td style='display:none'>".$row['boot']."</td>";
		echo "<td><a style='text-decoration:none' href='../Tripinfo/tripinformation.php?val=".$row['triptitle']."'>Tripinformation</a></td>";
		echo "</tr>";
	}
	echo "</tbody></table>";
	mysql_close($connection);
?>