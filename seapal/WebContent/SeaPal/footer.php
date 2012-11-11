</div>
<div id="fb-root" class=" fb_reset">
	<div style="position: absolute; top: -10000px; height: 0px; width: 0px; ">
		<div>
			<iframe id="fb_xdm_frame_http" name="fb_xdm_frame_http" src="./SeaPal_files/xd_arbiter.htm"></iframe><iframe id="fb_xdm_frame_https" name="fb_xdm_frame_https" src="./SeaPal_files/xd_arbiter(1).htm"></iframe>
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
					<a href="http://itunes.apple.com/us/app/seapal/id561903907?mt=8&uo=4" target="itunes_store"><img src="./SeaPal_files/Icon-Small-50.png" alt="Icon-Small-50" width="50" height="50"> iPad App Store</a>
				</li>
				<li><img src="./SeaPal_files/Icon-Small-50.png" alt="Icon-Small-50" width="50" height="50"> iPhone App Store
				</li>
			</ul>

			<p></p>
		</div>
		<div id="column2">
			<h2>Help us promote SeaPal</h2>

			<!-- Google Page Badge and +1 -->
			<div style="height: 131px; width: 300px; display: inline-block; text-indent: 0px; margin: 0px; padding: 0px; background-color: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; background-position: initial initial; background-repeat: initial initial; " id="___plus_0">
				<iframe allowtransparency="true" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 300px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 131px; " tabindex="0" vspace="0" width="100%" id="I0_1350553621348" name="I0_1350553621348" src="./SeaPal_files/badge.htm" title="Google+ Badge"></iframe>
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

			<div class="fb-like fb_edge_widget_with_comment fb_iframe_widget" data-href="http://www.SeaPal.info" data-send="true" data-width="300" data-show-faces="true" fb-xfbml-state="rendered">
				<span style="height: 26px; width: 300px; "><iframe id="f23b1bc76c" name="f6595d44c" scrolling="no" style="border: none; overflow: hidden; height: 26px; width: 300px; " title="Like this content on Facebook." class="fb_ltr" src="./SeaPal_files/like.htm"></iframe></span>
			</div>

		</div>

		<!-- Twitter button-->
		<div>
			<iframe allowtransparency="true" frameborder="0" scrolling="no" src="./SeaPal_files/tweet_button.1347008535.htm" class="twitter-share-button twitter-count-horizontal" style="width: 99px; height: 20px; " title="Twitter Tweet Button" data-twttr-rendered="true"></iframe>
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
				SeaPal is a cooperation that is open for participation. If you have ideas for extensions or want to provide content, please send us a message.
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
<?php $hit_count = @file_get_contents('count.txt');
	echo $hit_count;
	$hit_count++;
	@file_put_contents('count.txt', $hit_count);
?>
<p>
	© 2012 IBN Verlag
</p>
