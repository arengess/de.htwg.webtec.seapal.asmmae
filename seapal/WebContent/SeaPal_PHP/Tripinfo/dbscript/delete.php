<?php
	$delete ="DELETE FROM tripinformation WHERE TripTitle = '$_GET[delete]'";
	if(!mysql_query($delete)){
		echo "Could not delete: " . mysql_error();
	}
?>