<!DOCTYPE html>
<!-- saved from url=(0026)http://seapal.de/index.php -->
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		<meta name="keywords" content="sailing, app, navigation, sea map, boat, skipper">
		<meta name="description" content="SeaPal is a mobile app for sailors to do navigation, tracking and more.">

		<title>Map</title>
		<link rel="icon" type="image/png" href="http://seapal.de/images/Icon-32.png">
		<noscript>
			<link rel="stylesheet" href="css/5grid/core.css" />
			<link rel="stylesheet" href="css/5grid/core-desktop.css" />
			<link rel="stylesheet" href="css/5grid/core-1200px.css" />
			<link rel="stylesheet" href="css/5grid/core-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<script src="css/5grid/jquery.js"></script>
		<script src="css/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=none&amp;mobileUI.openerWidth=52"></script>
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCneWH2oTmRpX93qQt1LvowQyULSGqbjSc&sensor=false"></script>
		<script type="text/javascript" src="map.php-Dateien/map.js"></script>

		<!-- Google Analytics code
		<script src="./SeaPal_files/cb=gapi.loaded_0" async=""></script><script id="twitter-wjs" src="./SeaPal_files/widgets.js"></script><script type="text/javascript" async="" src="./SeaPal_files/plusone.js" gapi_processed="true"></script><script id="facebook-jssdk" src="./SeaPal_files/all.js"></script><script type="text/javascript" async="" src="./SeaPal_files/ga.js"></script>
		<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-34885997-1']);
		_gaq.push(['_gat._anonymizeIp']);
		_gaq.push(['_setDomainName', 'seapad.org']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);

		(function() {
		var ga = document.createElement('script');
		ga.type = 'text/javascript';
		ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(ga, s);
		})();
		</script> -->
		<style type="text/css">
			@import "css/style.css";
		</style>

	</head>
	<body data-twttr-rendered="true" onload="initialize()">
		<div id="wrapper">
			<div id="header-wrapper">
				<?php include("header.php")
				?>
			</div>

			<!--end 5grid-layout-->
			<!-- 			<div class="divider"></div> -->

			<div class="5grid-layout">
				<div class="row">
					<div class="12u">

						<div id="map">
							<?php
							include ("./map2.html")
							?>
						</div>

					</div>
				</div>
			</div>

		</div>
		<!-- end wrapper -->
		<div id="footer">
			<?php
			include ("footer.php");
			?>
		</div>

	</body>
</html>