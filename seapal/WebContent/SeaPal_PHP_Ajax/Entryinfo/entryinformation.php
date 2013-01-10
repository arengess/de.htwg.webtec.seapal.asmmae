<!DOCTYPE HTML>
<html>
<head>
	<title>Entry Information</title>
	<script type="text/javascript" src="./JS/entryinformation.js"></script>
	<script type="text/javascript" src="./JS/jquery-1.8.2.js"></script>
	<script type='text/javascript'>
	$(function(){
		$('#form').keyup(function (e){
			if (e.keyCode==13){
				entry = new Array(
					$('#triptitle').value,
					$('#name').value,
					$('#ngrad').value,
					$('#nmin').value,
					$('#nsec').value,
					$('#egrad').value,
					$('#emin').value,
					$('#esec').value,
					$('#cog').value,
					$('#sog').value,
					$('#btm').value,
					$('#dtm').value,
					$('#fahrtnach').options[fahrtnach.selectedIndex].value,
					$('#manoever').options[manoever.selectedIndex].value,
					$('#vorsegel').options[vorsegel.selectedIndex].value,
					$('#grosssegel').options[grosssegel.selectedIndex].value,
					$('#notes').value
				);
				entry_send(entry);
			}
		});
	});
	function entry_send(entry){
		$.ajax({
			type: 'POST',
			url: 'process.php',
			data: {
				'triptitle' : entry[0],
				'name' : entry[1],
				'ngrad' : entry[2],
				'nmin' : entry[3],
				'nsec' : entry[4],
				'egrad' : entry[5],
				'emin' : entry[6],
				'esec' : entry[7],
				'cog' : entry[8],
				'sog' : entry[9],
				'btm' : entry[10],
				'dtm' : entry[11],
				'fahrtnach' : entry[12],
				'manoever' : entry[13],
				'vorsegel' : entry[14],
				'grosssegel' : entry[15],
				'notes' : entry[16]					
			},
			dataType : 'json',
			success : function(data){
			 	alert(data['msg']);
				window.location.href = "../tripinformation_php_ajax/tripinformation.php?val="+entry[0];
			 }
		});
	}
	</script>
</head>
<body>
	<h1>Entryinformation</h1>
	<?php 
	include("./entryForm.html"); 
	if (isset($_GET['newval'])) {
		echo "<script type='text/javascript'>set_foreign_key('$_GET[newval]');</script>";
	}else{
		include("./select_entry.php");
	}	
	?>
</body>
</html>