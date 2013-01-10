<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>BoatInfo</title>
		<script type='text/javascript' src='./JS/boatinformation.js'></script>
		<script type='text/javascript' src="./JS/jquery-1.8.2.js"></script>
		<script type='text/javascript'>
			   
		$(function(){
			$('#form').keyup(function (e){
			if (e.keyCode == 13){
			boat = new Array(
			$("#registernr').value,
			$("#bootsname').value,
			$("#segelzeichen').value,
			$("#heimathafen').value,
			$("#yachtclub').value,
			$("#eigner').value,
			$("#versicherung').value,
			$("#rufzeichen').value,
			$("#typ').value,
			$("#konstrukteur').value,
			$("#laenge').value,
			$("#breite').value,
			$("#tiefgang').value,
			$("#masthoehe').value,
			$("#verdraengung').value,
			$("#rigArt').value,
			$("#baujahr').value,
			$("#motor').value,
			$("#tankgroesse').value,
			$("#wassertankgroesse').value,
			$("#abwassertankgroesse').value,
			$("#grosssegelgroesse').value,
			$("#genuagroesse').value,
			$("#spie').value
			);
			sendBoat(boat);
			}
			});
			});

			function sendBoat(boat){
			$.ajax({
			type: 'POST',
			url: 'process.php',
			data: {
			'action' : 'insert',
			'registernr' : boat[0],
			'bootsname' : boat[1],
			'segelzeichen' :  boat[2],
			'heimathafen' :  boat[3],
			'yachtclub' :  boat[4],
			'eigner' :  boat[5],
			'versicherung' :  boat[6],
			'rufzeichen' :  boat[7],
			'typ' :  boat[8],
			'konstrukteur' :  boat[9],
			'laenge' :  boat[10],
			'breite' :  boat[11],
			'tiefgang' :  boat[12],
			'masthoehe' :  boat[13],
			'verdraengung' :  boat[14],
			'rigArt' :  boat[15],
			'baujahr' :  boat[16],
			'motor' :  boat[17],
			'tankgroesse' :  boat[18],
			'wassertankgroesse' :  boat[19],
			'abwassertankgroesse' :  boat[20],
			'grosssegelgroesse' :  boat[21],
			'genuagroesse' :  boat[22],
			'spi' :  boat[23]
			},
			dataType : 'json',
			success : function(data){
			alert(data['msg']);
			complete : update_div();
			}
			});
			}

			function delete_entry(){
			$.ajax({
			type: 'POST',
			url: 'process.php',
			data: {
			'action' : 'delete',
			'key' : selected_row_key
			},
			dataType : 'json',
			success : function(data){
			alert(data['msg']);
			update_div();
			}
			});
			}

			$(document).ready(function () {
			$('#dynamic_view').load('dynamic_view.php');
			});
		</script>
	</head>
	<body>
		<h1>Boat Information</h1>
		<?php
		include ("boatForm.html");
		?>
		<div id='dynamic_view'></div>
	</body>
</html>
