<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head profile="http://www.w3.org/2005/10/profile">
		<meta name="keywords" content="sailing, app, navigation, sea map, boat, skipper">
		<meta name="description" content="SeaPal is a mobile app for sailors to do navigation, tracking and more.">
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title>SeaPal</title>
		<link rel="icon" type="image/png" href="http://seapal.de/images/Icon-32.png">
		<link href="contact.php-Dateien/css.css" rel="stylesheet" type="text/css">
		<link href="contact.php-Dateien/style.css" rel="stylesheet" type="text/css" media="screen">

		<!-- Google Analytics code -->
		<script async="" src="contact.php-Dateien/cbgapi.loaded_0"></script><script src="contact.php-Dateien/widgets.js" id="twitter-wjs"></script><script gapi_processed="true" src="contact.php-Dateien/plusone.js" async="" type="text/javascript"></script><script src="contact.php-Dateien/all.js" id="facebook-jssdk"></script><script src="contact.php-Dateien/ga.js" async="" type="text/javascript"></script>
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
		<style type="text/css">
			.fb_hidden {
				position: absolute;
				top: -10000px;
				z-index: 10001
			}
			.fb_invisible {
				display: none
			}
			.fb_reset {
				background: none;
				border-spacing: 0;
				border: 0;
				color: #000;
				cursor: auto;
				direction: ltr;
				font-family: "lucida grande", tahoma, verdana, arial, sans-serif;
				font-size: 11px;
				font-style: normal;
				font-variant: normal;
				font-weight: normal;
				letter-spacing: normal;
				line-height: 1;
				margin: 0;
				overflow: visible;
				padding: 0;
				text-align: left;
				text-decoration: none;
				text-indent: 0;
				text-shadow: none;
				text-transform: none;
				visibility: visible;
				white-space: normal;
				word-spacing: normal
			}
			.fb_link img {
				border: none
			}
			.fb_dialog {
				background: rgba(82, 82, 82, .7);
				position: absolute;
				top: -10000px;
				z-index: 10001
			}
			.fb_dialog_advanced {
				padding: 10px;
				-moz-border-radius: 8px;
				-webkit-border-radius: 8px;
				border-radius: 8px
			}
			.fb_dialog_content {
				background: #fff;
				color: #333
			}
			.fb_dialog_close_icon {
				background: url(http://static.ak.fbcdn.net/rsrc.php/v2/yA/x/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;
				_background-image: url(http://static.ak.fbcdn.net/rsrc.php/v2/y6/x/s816eWC-2sl.gif);
				cursor: pointer;
				display: block;
				height: 15px;
				position: absolute;
				right: 18px;
				top: 17px;
				width: 15px;
				top: 8px\9;
				right: 7px\9
			}
			.fb_dialog_mobile .fb_dialog_close_icon {
				top: 5px;
				left: 5px;
				right: auto
			}
			.fb_dialog_padding {
				background-color: transparent;
				position: absolute;
				width: 1px;
				z-index: -1
			}
			.fb_dialog_close_icon:hover {
				background: url(http://static.ak.fbcdn.net/rsrc.php/v2/yA/x/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent;
				_background-image: url(http://static.ak.fbcdn.net/rsrc.php/v2/y6/x/s816eWC-2sl.gif)
			}
			.fb_dialog_close_icon:active {
				background: url(http://static.ak.fbcdn.net/rsrc.php/v2/yA/x/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent;
				_background-image: url(http://static.ak.fbcdn.net/rsrc.php/v2/y6/x/s816eWC-2sl.gif)
			}
			.fb_dialog_loader {
				background-color: #f2f2f2;
				border: 1px solid #606060;
				font-size: 24px;
				padding: 20px
			}
			.fb_dialog_top_left, .fb_dialog_top_right, .fb_dialog_bottom_left, .fb_dialog_bottom_right {
				height: 10px;
				width: 10px;
				overflow: hidden;
				position: absolute
			}
			/* @noflip */
			.fb_dialog_top_left {
				background: url(http://static.ak.fbcdn.net/rsrc.php/v2/yR/x/8YeTNIlTZjm.png) no-repeat 0 0;
				left: -10px;
				top: -10px
			}
			/* @noflip */
			.fb_dialog_top_right {
				background: url(http://static.ak.fbcdn.net/rsrc.php/v2/yR/x/8YeTNIlTZjm.png) no-repeat 0 -10px;
				right: -10px;
				top: -10px
			}
			/* @noflip */
			.fb_dialog_bottom_left {
				background: url(http://static.ak.fbcdn.net/rsrc.php/v2/yR/x/8YeTNIlTZjm.png) no-repeat 0 -20px;
				bottom: -10px;
				left: -10px
			}
			/* @noflip */
			.fb_dialog_bottom_right {
				background: url(http://static.ak.fbcdn.net/rsrc.php/v2/yR/x/8YeTNIlTZjm.png) no-repeat 0 -30px;
				right: -10px;
				bottom: -10px
			}
			.fb_dialog_vert_left, .fb_dialog_vert_right, .fb_dialog_horiz_top, .fb_dialog_horiz_bottom {
				position: absolute;
				background: #525252;
				filter: alpha(opacity=70);
				opacity: .7
			}
			.fb_dialog_vert_left, .fb_dialog_vert_right {
				width: 10px;
				height: 100%
			}
			.fb_dialog_vert_left {
				margin-left: -10px
			}
			.fb_dialog_vert_right {
				right: 0;
				margin-right: -10px
			}
			.fb_dialog_horiz_top, .fb_dialog_horiz_bottom {
				width: 100%;
				height: 10px
			}
			.fb_dialog_horiz_top {
				margin-top: -10px
			}
			.fb_dialog_horiz_bottom {
				bottom: 0;
				margin-bottom: -10px
			}
			.fb_dialog_iframe {
				line-height: 0
			}
			.fb_dialog_content .dialog_title {
				background: #6d84b4;
				border: 1px solid #3b5998;
				color: #fff;
				font-size: 14px;
				font-weight: bold;
				margin: 0
			}
			.fb_dialog_content .dialog_title > span {
				background: url(http://static.ak.fbcdn.net/rsrc.php/v2/yD/x/Cou7n-nqK52.gif) no-repeat 5px 50%;
				float: left;
				padding: 5px 0 7px 26px
			}
			body.fb_hidden {
				-webkit-transform: none;
				height: 100%;
				margin: 0;
				left: -10000px;
				overflow: visible;
				position: absolute;
				top: -10000px;
				width: 100%
			}
			.fb_dialog.fb_dialog_mobile.loading {
				background: url(http://static.ak.fbcdn.net/rsrc.php/v2/yc/x/3rhSv5V8j3o.gif) white no-repeat 50% 50%;
				min-height: 100%;
				min-width: 100%;
				overflow: hidden;
				position: absolute;
				top: 0;
				z-index: 10001
			}
			.fb_dialog.fb_dialog_mobile.loading.centered {
				max-height: 590px;
				min-height: 590px;
				max-width: 500px;
				min-width: 500px
			}
			#fb-root #fb_dialog_ipad_overlay {
				background: rgba(0, 0, 0, .45);
				position: absolute;
				left: 0;
				top: 0;
				width: 100%;
				min-height: 100%;
				z-index: 10000
			}
			#fb-root #fb_dialog_ipad_overlay.hidden {
				display: none
			}
			.fb_dialog.fb_dialog_mobile.loading iframe {
				visibility: hidden
			}
			.fb_dialog_content .dialog_header {
				-webkit-box-shadow: white 0 1px 1px -1px inset;
				background: -webkit-gradient(linear, 0 0, 0 100%, from(#738ABA), to(#2C4987));
				border-bottom: 1px solid;
				border-color: #1d4088;
				color: #fff;
				font: 14px Helvetica, sans-serif;
				font-weight: bold;
				text-overflow: ellipsis;
				text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0;
				vertical-align: middle;
				white-space: nowrap
			}
			.fb_dialog_content .dialog_header table {
				-webkit-font-smoothing: subpixel-antialiased;
				height: 43px;
				width: 100%
			}
			.fb_dialog_content .dialog_header td.header_left {
				font-size: 12px;
				padding-left: 5px;
				vertical-align: middle;
				width: 60px
			}
			.fb_dialog_content .dialog_header td.header_right {
				font-size: 12px;
				padding-right: 5px;
				vertical-align: middle;
				width: 60px
			}
			.fb_dialog_content .touchable_button {
				background: -webkit-gradient(linear, 0 0, 0 100%, from(#4966A6),
				color-stop(0.5, #355492), to(#2A4887));
				border: 1px solid #29447e;
				-webkit-background-clip: padding-box;
				-webkit-border-radius: 3px;
				-webkit-box-shadow: rgba(0, 0, 0, .117188) 0 1px 1px inset, rgba(255, 255, 255, .167969) 0 1px 0;
				display: inline-block;
				margin-top: 3px;
				max-width: 85px;
				line-height: 18px;
				padding: 4px 12px;
				position: relative
			}
			.fb_dialog_content .dialog_header .touchable_button input {
				border: none;
				background: none;
				color: #fff;
				font: 12px Helvetica, sans-serif;
				font-weight: bold;
				margin: 2px -12px;
				padding: 2px 6px 3px 6px;
				text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0
			}
			.fb_dialog_content .dialog_header .header_center {
				color: #fff;
				font-size: 16px;
				font-weight: bold;
				line-height: 18px;
				text-align: center;
				vertical-align: middle
			}
			.fb_dialog_content .dialog_content {
				background: url(http://static.ak.fbcdn.net/rsrc.php/v2/yJ/x/jKEcVPZFk-2.gif) no-repeat 50% 50%;
				border: 1px solid #555;
				border-bottom: 0;
				border-top: 0;
				height: 150px
			}
			.fb_dialog_content .dialog_footer {
				background: #f2f2f2;
				border: 1px solid #555;
				border-top-color: #ccc;
				height: 40px
			}
			#fb_dialog_loader_close {
				float: left
			}
			.fb_dialog.fb_dialog_mobile .fb_dialog_close_button {
				text-shadow: rgba(0, 30, 84, .296875) 0 -1px 0
			}
			.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon {
				visibility: hidden
			}
			.fb_iframe_widget {
				position: relative;
				display: -moz-inline-block;
				display: inline-block
			}
			.fb_iframe_widget iframe {
				position: absolute
			}
			.fb_iframe_widget_lift {
				z-index: 1
			}
			.fb_iframe_widget span {
				position: relative;
				display: inline-block;
				vertical-align: text-bottom;
				text-align: justify
			}
			.fb_hide_iframes iframe {
				position: relative;
				left: -10000px
			}
			.fb_iframe_widget_loader {
				position: relative;
				display: inline-block
			}
			.fb_iframe_widget_fluid {
				display: inline
			}
			.fb_iframe_widget_loader iframe {
				min-height: 32px;
				z-index: 2;
				zoom: 1
			}
			.fb_iframe_widget_loader .FB_Loader {
				background: url(http://static.ak.fbcdn.net/rsrc.php/v2/yJ/x/jKEcVPZFk-2.gif) no-repeat;
				height: 32px;
				width: 32px;
				margin-left: -16px;
				position: absolute;
				left: 50%;
				z-index: 4
			}
			.fb_button_simple, .fb_button_simple_rtl {
				background-image: url(http://static.ak.fbcdn.net/rsrc.php/v2/yH/x/eIpbnVKI9lR.png);
				background-repeat: no-repeat;
				cursor: pointer;
				outline: none;
				text-decoration: none
			}
			.fb_button_simple_rtl {
				background-position: right 0
			}
			.fb_button_simple .fb_button_text {
				margin: 0 0 0 20px;
				padding-bottom: 1px
			}
			.fb_button_simple_rtl .fb_button_text {
				margin: 0 10px 0 0
			}
			a.fb_button_simple:hover .fb_button_text, a.fb_button_simple_rtl:hover .fb_button_text, .fb_button_simple:hover .fb_button_text, .fb_button_simple_rtl:hover .fb_button_text {
				text-decoration: underline
			}
			.fb_button, .fb_button_rtl {
				background: #29447e url(http://static.ak.fbcdn.net/rsrc.php/v2/yl/x/FGFbc80dUKj.png);
				background-repeat: no-repeat;
				cursor: pointer;
				display: inline-block;
				padding: 0 0 0 1px;
				text-decoration: none;
				outline: none
			}
			.fb_button .fb_button_text, .fb_button_rtl .fb_button_text {
				background: #5f78ab url(http://static.ak.fbcdn.net/rsrc.php/v2/yl/x/FGFbc80dUKj.png);
				border-top: solid 1px #879ac0;
				border-bottom: solid 1px #1a356e;
				color: #fff;
				display: block;
				font-family: "lucida grande", tahoma, verdana, arial, sans-serif;
				font-weight: bold;
				padding: 2px 6px 3px 6px;
				margin: 1px 1px 0 21px;
				text-shadow: none
			}
			a.fb_button, a.fb_button_rtl, .fb_button, .fb_button_rtl {
				text-decoration: none
			}
			a.fb_button:active .fb_button_text, a.fb_button_rtl:active .fb_button_text, .fb_button:active .fb_button_text, .fb_button_rtl:active .fb_button_text {
				border-bottom: solid 1px #29447e;
				border-top: solid 1px #45619d;
				background: #4f6aa3;
				text-shadow: none
			}
			.fb_button_xlarge, .fb_button_xlarge_rtl {
				background-position: left -60px;
				font-size: 24px;
				line-height: 30px
			}
			.fb_button_xlarge .fb_button_text {
				padding: 3px 8px 3px 12px;
				margin-left: 38px
			}
			a.fb_button_xlarge:active {
				background-position: left -99px
			}
			.fb_button_xlarge_rtl {
				background-position: right -268px
			}
			.fb_button_xlarge_rtl .fb_button_text {
				padding: 3px 8px 3px 12px;
				margin-right: 39px
			}
			a.fb_button_xlarge_rtl:active {
				background-position: right -307px
			}
			.fb_button_large, .fb_button_large_rtl {
				background-position: left -138px;
				font-size: 13px;
				line-height: 16px
			}
			.fb_button_large .fb_button_text {
				margin-left: 24px;
				padding: 2px 6px 4px 6px
			}
			a.fb_button_large:active {
				background-position: left -163px
			}
			.fb_button_large_rtl {
				background-position: right -346px
			}
			.fb_button_large_rtl .fb_button_text {
				margin-right: 25px
			}
			a.fb_button_large_rtl:active {
				background-position: right -371px
			}
			.fb_button_medium, .fb_button_medium_rtl {
				background-position: left -188px;
				font-size: 11px;
				line-height: 14px
			}
			a.fb_button_medium:active {
				background-position: left -210px
			}
			.fb_button_medium_rtl {
				background-position: right -396px
			}
			.fb_button_text_rtl, .fb_button_medium_rtl .fb_button_text {
				padding: 2px 6px 3px 6px;
				margin-right: 22px
			}
			a.fb_button_medium_rtl:active {
				background-position: right -418px
			}
			.fb_button_small, .fb_button_small_rtl {
				background-position: left -232px;
				font-size: 10px;
				line-height: 10px
			}
			.fb_button_small .fb_button_text {
				padding: 2px 6px 3px;
				margin-left: 17px
			}
			a.fb_button_small:active, .fb_button_small:active {
				background-position: left -250px
			}
			.fb_button_small_rtl {
				background-position: right -440px
			}
			.fb_button_small_rtl .fb_button_text {
				padding: 2px 6px;
				margin-right: 18px
			}
			a.fb_button_small_rtl:active {
				background-position: right -458px
			}
			.fb_share_count_wrapper {
				position: relative;
				float: left
			}
			.fb_share_count {
				background: #b0b9ec none repeat scroll 0 0;
				color: #333;
				font-family: "lucida grande", tahoma, verdana, arial, sans-serif;
				text-align: center
			}
			.fb_share_count_inner {
				background: #e8ebf2;
				display: block
			}
			.fb_share_count_right {
				margin-left: -1px;
				display: inline-block
			}
			.fb_share_count_right .fb_share_count_inner {
				border-top: solid 1px #e8ebf2;
				border-bottom: solid 1px #b0b9ec;
				margin: 1px 1px 0 1px;
				font-size: 10px;
				line-height: 10px;
				padding: 2px 6px 3px;
				font-weight: bold
			}
			.fb_share_count_top {
				display: block;
				letter-spacing: -1px;
				line-height: 34px;
				margin-bottom: 7px;
				font-size: 22px;
				border: solid 1px #b0b9ec
			}
			.fb_share_count_nub_top {
				border: none;
				display: block;
				position: absolute;
				left: 7px;
				top: 35px;
				margin: 0;
				padding: 0;
				width: 6px;
				height: 7px;
				background-repeat: no-repeat;
				background-image: url(http://static.ak.fbcdn.net/rsrc.php/v2/yP/x/bSOHtKbCGYI.png)
			}
			.fb_share_count_nub_right {
				border: none;
				display: inline-block;
				padding: 0;
				width: 5px;
				height: 10px;
				background-repeat: no-repeat;
				background-image: url(http://static.ak.fbcdn.net/rsrc.php/v2/yL/x/i_oIVTKMYsL.png);
				vertical-align: top;
				background-position: right 5px;
				z-index: 10;
				left: 2px;
				margin: 0 2px 0 0;
				position: relative
			}
			.fb_share_no_count {
				display: none
			}
			.fb_share_size_Small .fb_share_count_right .fb_share_count_inner {
				font-size: 10px
			}
			.fb_share_size_Medium .fb_share_count_right .fb_share_count_inner {
				font-size: 11px;
				padding: 2px 6px 3px;
				letter-spacing: -1px;
				line-height: 14px
			}
			.fb_share_size_Large .fb_share_count_right .fb_share_count_inner {
				font-size: 13px;
				line-height: 16px;
				padding: 2px 6px 4px;
				font-weight: normal;
				letter-spacing: -1px
			}
			.fb_share_count_hidden .fb_share_count_nub_top, .fb_share_count_hidden .fb_share_count_top, .fb_share_count_hidden .fb_share_count_nub_right, .fb_share_count_hidden .fb_share_count_right {
				visibility: hidden
			}
			.fb_connect_bar_container div, .fb_connect_bar_container span, .fb_connect_bar_container a, .fb_connect_bar_container img, .fb_connect_bar_container strong {
				background: none;
				border-spacing: 0;
				border: 0;
				direction: ltr;
				font-style: normal;
				font-variant: normal;
				letter-spacing: normal;
				line-height: 1;
				margin: 0;
				overflow: visible;
				padding: 0;
				text-align: left;
				text-decoration: none;
				text-indent: 0;
				text-shadow: none;
				text-transform: none;
				visibility: visible;
				white-space: normal;
				word-spacing: normal;
				vertical-align: baseline
			}
			.fb_connect_bar_container {
				position: fixed;
				left: 0 !important;
				right: 0 !important;
				height: 42px !important;
				padding: 0 25px !important;
				margin: 0 !important;
				vertical-align: middle !important;
				border-bottom: 1px solid #333 !important;
				background: #3b5998 !important;
				z-index: 99999999 !important;
				overflow: hidden !important
			}
			.fb_connect_bar_container_ie6 {
				position: absolute;
				top: expression(document.compatMode=="CSS1Compat"? document.documentElement.scrollTop+"px":body.scrollTop+"px")
			}
			.fb_connect_bar {
				position: relative;
				margin: auto;
				height: 100%;
				width: 100%;
				padding: 6px 0 0 0 !important;
				background: none;
				color: #fff !important;
				font-family: "lucida grande", tahoma, verdana, arial, sans-serif !important;
				font-size: 13px !important;
				font-style: normal !important;
				font-variant: normal !important;
				font-weight: normal !important;
				letter-spacing: normal !important;
				line-height: 1 !important;
				text-decoration: none !important;
				text-indent: 0 !important;
				text-shadow: none !important;
				text-transform: none !important;
				white-space: normal !important;
				word-spacing: normal !important
			}
			.fb_connect_bar a:hover {
				color: #fff
			}
			.fb_connect_bar .fb_profile img {
				height: 30px;
				width: 30px;
				vertical-align: middle;
				margin: 0 6px 5px 0
			}
			.fb_connect_bar div a, .fb_connect_bar span, .fb_connect_bar span a {
				color: #bac6da;
				font-size: 11px;
				text-decoration: none
			}
			.fb_connect_bar .fb_buttons {
				float: right;
				margin-top: 7px
			}
			.fb_edge_widget_with_comment {
				position: relative;
				*z-index: 1000
			}
			.fb_edge_widget_with_comment span.fb_edge_comment_widget {
				position: absolute
			}
			.fb_edge_widget_with_comment span.fb_send_button_form_widget {
				z-index: 1
			}
			.fb_edge_widget_with_comment span.fb_send_button_form_widget .FB_Loader {
				left: 0;
				top: 1px;
				margin-top: 6px;
				margin-left: 0;
				background-position: 50% 50%;
				background-color: #fff;
				height: 150px;
				width: 394px;
				border: 1px #666 solid;
				border-bottom: 2px solid #283e6c;
				z-index: 1
			}
			.fb_edge_widget_with_comment span.fb_send_button_form_widget.dark .FB_Loader {
				background-color: #000;
				border-bottom: 2px solid #ccc
			}
			.fb_edge_widget_with_comment span.fb_send_button_form_widget.siderender
			.FB_Loader {
				margin-top: 0
			}
			.fbpluginrecommendationsbarleft, .fbpluginrecommendationsbarright {
				position: fixed !important;
				bottom: 0;
				z-index: 999
			}
			/* @noflip */
			.fbpluginrecommendationsbarleft {
				left: 10px
			}
			/* @noflip */
			.fbpluginrecommendationsbarright {
				right: 10px
			}
		</style>
	</head>
	<body data-twttr-rendered="true">

		<div id="header-wrapper">
			<div id="header" class="container">
				<?php
				include ("header.php");
			?>
			</div>
			<div id="banner" class="container">
				<div class="image-style">
					<img src="contact.php-Dateien/SeaPal-Screen-Horiz01.jpg" alt="" height="320" width="970">
				</div>
			</div>
		</div>

		<div id="wrapper">
			<div id="page" class="container">
				<div id="content">
					<div class="post">
						<h2 class="title"><a name="ibn">IBN </a></h2>
						<div class="entry">

							<p>
								IBN Redaktion
								<br>
								Hans-Dieter Möhlhenrich
								<br>
								Malvine-Schiesser-Weg 3
								<br>
								78315 Radolfzell
								<br>
								Germany
								<br>
								<br>
								<a href="http://www.ibn-online.de/">www.ibn-online.de</a>
								<br>
								ibn at ibn-online.de
							</p>

						</div>
					</div>
					<div class="post">
						<h2 class="title"><a name="htwg">HTWG Constance </a></h2>
						<div class="entry">

							<p>
								HTWG Konstanz
								<br>
								Informatik
								<br>
								Prof. Dr. Marko Boger
								<br>
								Brauneggerstr. 55
								<br>
								78462 Konstanz
								<br>
								Germany
								<br>
								<br>
								<a href="http://www.htwg-konstanz.de/">www.htwg-konstanz.de</a>
								<br>
								marko.boger at htwg-konstanz.de
							</p>

						</div>
					</div>
					<div style="clear: both;">
						&nbsp;
					</div>
				</div>
				<!-- end #content -->
				<div id="sidebar">
					<div id="box1">
						<h2>Quick Access</h2>
						<ul class="list-style1">
							<li class="first">
								<a href="#ibn">IBN</a>
							</li>
							<li>
								<a href="#htwg">HTWG Constanz</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- end #sidebar -->
				<div style="clear: both;">
					&nbsp;
				</div>
			</div>
			<!-- end #page -->
		</div>
		<div class=" fb_reset" id="fb-root">
			<div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
				<div>
					<iframe src="contact.php-Dateien/xd_arbiter.html" name="fb_xdm_frame_http" id="fb_xdm_frame_http"></iframe><iframe src="contact.php-Dateien/xd_arbiter_002.html" name="fb_xdm_frame_https" id="fb_xdm_frame_https"></iframe>
				</div><div></div>
			</div>
		</div>
		<script>
			( function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id))
						return;
					js = d.createElement(s);
					js.id = id;
					js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
					fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
		</script>
		<div id="footer-content" class="container">
			<div id="footer-bg">
				<div id="column1">
					<h2>Where to get SeaPal</h2>
					<p>
						SeaPal is available in the following stores
						<br>
					</p>
					<ul class="list-style2">
						<li>
							<a href="http://itunes.apple.com/us/app/seapal/id561903907?mt=8&amp;uo=4" target="itunes_store"><img src="contact.php-Dateien/Icon-Small-50.png" alt="Icon-Small-50" height="50" width="50"> iPad App Store</a>
						</li>
						<li><img src="contact.php-Dateien/Icon-Small-50.png" alt="Icon-Small-50" height="50" width="50"> iPhone App Store
						</li>
					</ul>

					<p></p>
				</div>
				<div id="column2">
					<h2>Help us promote SeaPal</h2>

					<!-- Google Page Badge and +1 -->
					<div id="___plus_0" style="height: 131px; width: 300px; display: inline-block; text-indent: 0px; margin: 0px; padding: 0px; background: none repeat scroll 0% 0% transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline;">
						<iframe title="Google+ Badge" src="contact.php-Dateien/badge.html" name="I0_1350593008486" id="I0_1350593008486" vspace="0" tabindex="0" style="position: static; top: 0px; width: 300px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 131px;" marginwidth="0" marginheight="0" hspace="0" allowtransparency="true" frameborder="0" scrolling="no" width="100%"></iframe>
					</div>

					<script type="text/javascript">
						(function() {
							var po = document.createElement('script');
							po.type = 'text/javascript';
							po.async = true;
							po.src = 'https://apis.google.com/js/plusone.js';
							var s = document.getElementsByTagName('script')[0];
							s.parentNode.insertBefore(po, s);
						})();
					</script>

					<!-- Facebook like and send button -->

					<div fb-xfbml-state="rendered" class="fb-like fb_edge_widget_with_comment fb_iframe_widget" data-href="http://www.SeaPal.info" data-send="true" data-width="300" data-show-faces="true">
						<span style="height: 28px; width: 300px;"><iframe src="contact.php-Dateien/like.html" class="fb_ltr" title="Like this content on Facebook." style="border: medium none; overflow: hidden; height: 28px; width: 300px;" name="f328961026a89d4" id="f29a9493c8674f8" scrolling="no"></iframe></span>
					</div>

				</div>

				<!-- Twitter button-->
				<div>
					<iframe data-twttr-rendered="true" title="Twitter Tweet Button" style="width: 106px; height: 20px;" class="twitter-share-button twitter-count-horizontal" src="contact.php-Dateien/tweet_button.html" allowtransparency="true" frameborder="0" scrolling="no"></iframe>
					<script>
						! function(d, s, id) {
							var js, fjs = d.getElementsByTagName(s)[0];
							if (!d.getElementById(id)) {
								js = d.createElement(s);
								js.id = id;
								js.src = "//platform.twitter.com/widgets.js";
								fjs.parentNode.insertBefore(js, fjs);
							}
						}(document, "script", "twitter-wjs");
					</script>
				</div>
				<div id="column3">
					<h2>Further Information</h2>
					<p>
						SeaPal is a cooperation that is open for participation. If you have
						ideas for extensions or want to provide content, please send us a
						message.
					</p>
					<ul class="list-style2">
						<li class="first">
							<a href="http://seapal.de/impressum.php">Impressum</a>
						</li>
						<li>
							<a href="http://seapal.de/legal.php">Legal notice</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div id="footer">
			<?php
			include ("footer.php");
		?>
	</body>
</html>