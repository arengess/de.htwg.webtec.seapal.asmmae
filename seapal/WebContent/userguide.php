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
		<script async="" src="userguide.php-Dateien/cbgapi.loaded_0"></script><script src="userguide.php-Dateien/widgets.js" id="twitter-wjs"></script><script gapi_processed="true" src="userguide.php-Dateien/plusone.js" async="" type="text/javascript"></script><script src="userguide.php-Dateien/all.js" id="facebook-jssdk"></script><script src="userguide.php-Dateien/ga.js" async="" type="text/javascript"></script>
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

			<!--end 5grid-layout-->
			<!-- 			<div class="divider"></div> -->
			<div id="page-wrapper">
				<div class="12u">
					<div class="5grid-layout" id="twocolumn">
						<div class="row">
							<div class="7u">
								<section>
									<div class="post">
										<h1 class="title">User Guide</h1>
										<h2 class="title"><a name="Installing_SeaPal">Installing SeaPal</a></h2>
										<div class="entry">
											<p>
												Installing SeaPal on the iPad or iPhone is simple and straight
												forward. Just search for SeaPal in the App Store, select it and install
												it. SeaPal comes free of charge, so it is very easy to give it a test
												drive. During the installation you will see the icon of the SeaPal
												application show up on your screen. Now you are ready to role.
											</p>
										</div>
									</div>
									<div class="post">
										<h2 class="title"><a name="Starting_SeaPal">Starting SeaPal</a></h2>
										<div class="entry">
											<p>
												Tap on the SeaPal application icon to start SeaPal. If you have
												GPS on your mobile device, the app will ask you if it is ok to access
												your current position. This of course makes a lot of sense in a
												navigational app, so please do approve that.
											</p>
											<p>
												The application will then open with the map view. If no maps are
												loaded, you most likely have no internet connection. For initial setup
												an internet connection is important. You can set it up for offline
												operation later. If the displayed location is somewhere in the Pacific
												close to Ghana, you have not turned your GPS on. You can do so in your
												settings
											</p>
											<p>
												The map is centered at your current location. You can now pan and
												zoom by swiping with your finger or pinching with two fingers.
											</p>
											<figure><img src="userguide.php-Dateien/SeaPal-InitialPosition.jpg" alt="SeaPal-InitialPosition" height="435" width="580">
												<figcaption>
													Map view with current position, initial view.
												</figcaption>
											</figure>
										</div>
									</div>
									<div class="post">
										<h2 class="title"><a name="Map_Selection">Map Selection</a></h2>
										<div class="entry">
											<p>
												The map view initially shows maps from Google Maps. This is
												convenient because it downloads fast and is familiar to most. It is
												excellent for overview and orientation, but it is not very good for
												navigational purposes. These maps were created primarily for navigation
												with cars and not with sailors in mind. The shore line and especially
												harbors can be very imprecise. So you should know how to switch to
												different map views. For this, tap on the menu button at the top left.
											</p>
											<figure><img src="userguide.php-Dateien/SeaPal-Gothenborg-Menu.jpg" alt="SeaPal-Gothenborg-Menu" height="435" width="580">
												<figcaption>
													Menu selected.
												</figcaption>
											</figure>
											<p>
												From this menu, you can select several map views
											</p>
											<ul>
												<li>
													Google Maps
												</li>
												<li>
													Google Satellite view
												</li>
												<li>
													Open Sea Maps
												</li>
												<li>
													Offline Maps
												</li>
											</ul>
											<p>
												The Google Satellite view is excellent for near shore or in-harbor
												manovering. Mind you though, this view shows excellent physical detail
												of the shore and can also give you some indication on the underwater
												surface from shades of blue. But you do not have sea signals or depth
												information.
											</p>
											<figure><img src="userguide.php-Dateien/SeaPal-SatelliteView.jpg" alt="SeaPal-SatelliteView" height="435" width="580">
												<figcaption>
													Satellite view
												</figcaption>
											</figure>
											<p>
												The OpenSeaMap view is very good for navigation. It is also
												provided free of charge from the Open Street Map project, but was
												created for sailing and navigation. It contains sea signals and has more
												details on shore line. However, it does not have depth information,
												which can be very vital if you are not familiar with the area. Also,
												this map view loads slower and uses more calculation power on the mobile
												device. So you might find you iPad a little slower with this view on.
												The accuracy is not guaranteed, information is collected by an open
												community and can be incorrect. Also keep in mind that this is a vector
												map, the level of detail increases when zooming in. This means some
												details will not be visible when zoomed out.
											</p>
											<figure><img src="userguide.php-Dateien/SeaPal-Southampton-OSM.jpg" alt="SeaPal-Southampton-OSM" height="435" width="580">
												<figcaption>
													OpenSeaMap Map view
												</figcaption>
											</figure>
											<p>
												The biggest problem with all of the above is that they are only
												available online. That is you need to have an internet connection to
												view them. If you have a cellular built into your device with 3G or 4G
												connection, this might be good enough for you if you only sail close to
												shore or in-shore. However, we recommend to download offline maps prior
												to departure.
											</p>
											<p>
												Offline maps are excellent for navigation. They are always
												available (as long as your battery does not run out), have excellent sea
												signal information and show water depth. You can purchase offline maps
												for selected areas from the AddOn view. The first supported area is the
												Lake Constance for which maps are provided by IBN. Other areas should
												follow soon.
											</p>
											<figure><img src="userguide.php-Dateien/SeaPal-Konstanz-IBN.jpg" alt="SeaPal-Konstanz-IBN" height="435" width="580">
												<figcaption>
													Offline map from IBN
												</figcaption>
											</figure>
										</div>
									</div>
								</section>
							</div>
							<div class="1u">
								&nbsp;
							</div>
							<!-- end #content -->
							<div class="4u" id="sidebar1">
								<section>
									<h2>Quick Access</h2>
									<ul class="list-style1">
										<li class="first">
											<a href="#Installing_SeaPal">Installing SeaPal</a>
										</li>
										<li>
											<a href="#Starting_SeaPal">Starting SeaPal</a>
										</li>
										<li>
											<a href="#Map_Selection">Map Selection</a>
										</li>
										<li>
											<a href="http://seapal.de/images/Legend-IBN-Map.pdf">Legend of IBN Maps</a>
										</li>
									</ul>
								</section>
							</div>
						</div>

					</div>
					<!-- end #sidebar -->
				</div>
				<!-- end #page -->
			</div>
		</div>
		<div id="footer">
			<?php
			include ("footer.php");
			?>
		</div>
	</body>
</html>