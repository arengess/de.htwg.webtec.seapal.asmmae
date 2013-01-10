<html>
	<head>
		<title>Bootsinformationen</title>
		<link rel="stylesheet" type="text/css" href="../css/Logbuch.css"/>
		<script type="text/javascript" src="../js/jquery-1.8.2.js"></script>
		<script type="text/javascript" src="../js/RegularExpressions.js"></script>
	</head>
	<body>
		<?php
		$connection = include("../connect.php");
		if (isset($_POST['submit'])) {
			include("./dbscript/insert.php");
		}elseif(isset($_GET['delete'])){
			include("./dbscript/delete.php");		
		}
		include ("./BInfo.html");
		include ("./dbscript/B_dynTable.php");
		?>
	</body>
</html>