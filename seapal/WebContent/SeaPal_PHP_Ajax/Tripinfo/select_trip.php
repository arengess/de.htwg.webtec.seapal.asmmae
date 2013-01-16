<?php
$connection =
include ("../connect.php");
$select = "SELECT triptitle,von,nach,skipper,crew,start,ende,dauer,motor,boot FROM tripinformation WHERE triptitle ='$_GET[val]'";
$result = mysql_query($select) or die("MySQL ERROR: " . mysql_error());
$row = mysql_fetch_array($result);

echo "<script type='text/javascript'>show_trip('$row[triptitle]','$row[von]','$row[nach]','$row[skipper]','$row[crew]','
	$row[start]','$row[ende]','$row[dauer]','$row[motor]','$row[boot]');</script>";
mysql_close($connection);
?>