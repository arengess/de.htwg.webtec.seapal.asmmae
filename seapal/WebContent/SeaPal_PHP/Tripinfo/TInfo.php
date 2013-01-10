<html>
	<head>
		<title>T Info</title>
		<link rel="stylesheet" type="text/css" href="../css/Logbuch.css">

	</head>
	<body>
		<?php

		$connection = include("../connect.php");
		if (isset($_POST['submit'])) {
			include("./dbscript/insert.php");
		}elseif(isset($_GET['delete'])){
			include("./dbscript/delete.php");		
		}
		include ("./TInfo.html");
		include ("./dbscript/T_dynTable.php");
		?>
	</body>
</html>