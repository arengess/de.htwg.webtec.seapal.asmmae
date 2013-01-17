<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head profile="http://www.w3.org/2005/10/profile">
		<meta name="keywords" content="sailing, app, navigation, sea map, boat, skipper">
		<meta name="description" content="SeaPal is a mobile app for sailors to do navigation, tracking and more.">
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title>SeaPal</title>
		<link rel="icon" type="image/png" href="http://seapal.de/images/Icon-32.png">
		<noscript>
			<link rel="stylesheet" href="css/5grid/core.css" />
			<link rel="stylesheet" href="css/5grid/core-desktop.css" />
			<link rel="stylesheet" href="css/5grid/core-1200px.css" />
			<link rel="stylesheet" href="css/5grid/core-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<link rel="stylesheet" href="css/style.css" />
		<script src="css/5grid/jquery.js"></script>
		<script src="css/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=none&amp;mobileUI.openerWidth=52"></script>

		<!-- Google Analytics code -->
		<script async="" src="about.php-Dateien/cbgapi.loaded_0"></script><script src="about.php-Dateien/widgets.js" id="twitter-wjs"></script><script gapi_processed="true" src="about.php-Dateien/plusone.js" async="" type="text/javascript"></script><script src="about.php-Dateien/all.js" id="facebook-jssdk"></script><script src="about.php-Dateien/ga.js" async="" type="text/javascript"></script>
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

		</script>
	</head>
	<body data-twttr-rendered="true">
		<div id="wrapper">
			<div id="header-wrapper">
				<?php
				include ("header.php");
				?>
			</div>
			<?php include("banner.php")?>

			<div id="page-wrapper">
				<div class="12u">
					<div class="5grid-layout" id="twocolumn">
						<div class="row">
							<div class="7u">
								<section>
									<div class="post">
										<h2 class="title"><a name="about">About SeaPal </a></h2>
										<div class="entry">

											<p>
												The <b>SeaPal</b> application was developed in a cooperation between the IBN publishing house and the HTWG Constance University.
											</p>
											<p>
												IBN is a publishing house specialized in sailing and boating in
												the southern part of Germany. IBN has a long tradition of providing high
												quality maps, harbor guides and news for sailors for the lake Constance
												and the south of Germany. IBN initiated this project to bring their
												content to new mobile platforms like the iPad and the iPhone.

											</p>
											<p>
												The University HTWG Constance is a University of Applied
												Sciences located in Constance right on the shores of the lake. Prof. Dr.
												Marko Boger leads the project and did the original concept. He works in
												the computer science department as professor for Software Architecture
												and Software Engineering. Software development for mobile platforms as
												well as for the web are included in this research and teaching. He is
												also an active sailor with more than 5,000 nm of experience in all
												waters of Europe.
											</p>
											<p>
												These two partners initiated this project as an open cooperation
												to provide a modern, simple, yet powerful application for mobile
												devices. It is our goal to provide a base version of SeaPal free of
												charge with free online maps to sailors around the world. We also
												provide extensions to finance this project. Please view purchases as
												sponsoring to help advance our ambitious project. It will be used to
												further advance and develop this app.
											</p>
											<p>
												The development is partly done by a team of experienced software
												developers and partly in research and study groups at the University.
											</p>
											<p>
												Our cooperation is also open for other partners. If you are
												interested to join our partnership, to provide further content or
												develop extension, please contact us. You can also sponsor the
												development of specific functionalities or extensions.
											</p>
										</div>
									</div>
								</section>
								<div style="clear: both;">
									&nbsp;
								</div>
							</div>
							<div class="1u">
								&nbsp;
							</div>
							<!-- end #content -->
							<div class="4u" id="sidebar1">
								<section>
									<div id="sidebar">
										<div id="box1">
											<h2>More Information</h2>
											<ul class="list-style1">
												<li class="first">
													<a href="http://seapal.de/userguide.php">User Guide</a>
												</li>
												<li>
													<a href="http://seapal.de/contact.php">Contact us</a>
												</li>
											</ul>
										</div>
									</div>
								</section>
							</div>
							<!-- end #sidebar -->
							<div style="clear: both;">
								&nbsp;
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		<!-- end #page -->
		<div id="footer">
			<?php
			include ("footer.php");
			?>
		</div>
	</body>
</html>