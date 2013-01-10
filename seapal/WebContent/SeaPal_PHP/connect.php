<?php
$con = mysql_connect('localhost', 'root', 'WebTech');
if (!$con) {
	die('Verbindung schlug fehl: ' . mysql_error());
}
mysql_select_db("seapaldb", $con);
return $con;
?>