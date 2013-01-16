<!DOCTYPE HTML>
<html>
<head>
	<title>Trip Information</title>
	<script type="text/javascript" src="./JS/tripinformation.js"></script>
	<script type="text/javascript" src="../jquery-1.8.2.js"></script>
</head>
<body>
	<h1>Tripinformation</h1>
<?php 
	include("./tripForm.html");

	if (isset($_GET['val'])) {
		include("./select_trip.php");
		echo "<div id='dynamic_view'>";
		include ("./entry_table.php");
		echo "</div>";
	}
	elseif (isset($_GET['newval'])) {
		echo "<script type='text/javascript'>set_foreign_key('$_GET[newval]');</script>";
	}
?>
</body>
</html>