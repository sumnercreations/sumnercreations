<html>
	<head>
		<title>My Dashboard</title>
		<!-- CSS FILES -->
		<link rel="stylesheet" href="http://yui.yahooapis.com/3.4.1/build/cssreset/cssreset-min.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="http://yui.yahooapis.com/3.4.1/build/cssgrids/grids-min.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="fancybox/jquery.fancybox-2.0.3/jquery.fancybox.css" type="text/css" media="screen" />
		<!-- JAVASCRIPT FILES -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="fancybox/jquery.fancybox-2.0.3/jquery.fancybox.pack.js"></script>
		<script type="text/javascript" src="js/jquery.tickertype.js"></script>
		<script>
			$(document).ready(function() {
				$(".various").fancybox({
					maxWidth	: 1920,
					maxHeight	: 1080,
					fitToView	: false,
					width		: '100%',
					height		: '100%',
					autoSize	: false,
					closeClick	: false,
					openEffect	: 'none',
					closeEffect	: 'none'
					}); // end fancybox function
				
				$(".iframe").mouseover(function() {
					$(this).find("img").removeClass("hidden");
				}).mouseout(function() {
					$(this).find("img").addClass("hidden");
				}); // mousever iframe function
				
			}); // end document.ready function
		</script>
		<style>
			iframe 
			{
			    overflow: hidden;
			    width: 100%;
			    height: 100%;
			}
			
			iframe::-webkit-scrollbar
			{
				display: none;
			}

			.hidden
			{
				display: none;
			}
			
			.iframe img
			{
				bottom: 0;
				height: 46px;
				left: 0;
				margin: auto;
				position: absolute;
				right: 0;
				top: 0;
				width: 62px;
			}
			
			.iframe
			{
				background-color: white;
				border: 1px solid white;
				clear: both;
				height: 33.33333%;
				position: relative;
			}
			
			#ticker-area
			{
				background-color: rgba(192,192,192,0.8);
				font-size: 2em;
				margin: auto;
				position: absolute;
				top: 0;
				width: 100%;
				z-index: 2;
			}
		</style>
	</head>
<body>  
	<div class="container">
		<div class="yui3-g">
			<div class="iframe yui3-u-1-3">
				<iframe src="http://www.sumnercreations.com"></iframe>
				<a class="various fancybox.iframe" href="http://www.sumnercreations.com">
					<img class="hidden" src="images/fullscreen.gif" />
				</a>
			</div>
			<div class="iframe yui3-u-1-3">
				<iframe src="http://blog.sumnercreations.com"></iframe>
				<a class="various fancybox.iframe" href="http://blog.sumnercreations.com">
					<img class="hidden" src="images/fullscreen.gif" />
				</a>
			</div>
			<div class="iframe yui3-u-1-3">
				<iframe src="http://www.tj-dev.com"></iframe>
				<a class="various fancybox.iframe" href="http://www.tj-dev.com">
					<img class="hidden" src="images/fullscreen.gif" />
				</a>
			</div>
			<div class="iframe yui3-u-1-3">
				<iframe src="http://www.xkcd.com"></iframe>
				<a class="various fancybox.iframe" href="http://www.xkcd.com">
					<img class="hidden" src="images/fullscreen.gif" />
				</a>
			</div>
			<div class="iframe yui3-u-1-3">
				<iframe src="http://www.thepenguinparade.com"></iframe>
				<a class="various fancybox.iframe" href="http://www.thepenguinparade.com">
					<img class="hidden" src="images/fullscreen.gif" />
				</a>
			</div>
			<div class="iframe yui3-u-1-3">
				<iframe src="http://fancybox.net"></iframe>
				<a class="various fancybox.iframe" href="http://www.fancybox.net">
					<img class="hidden" src="images/fullscreen.gif" />
				</a>
			</div>
			<div class="iframe yui3-u-1-3">
				<iframe src="http://www.css-tricks.com"></iframe>
				<a class="various fancybox.iframe" href="http://www.css-tricks.com">
					<img class="hidden" src="images/fullscreen.gif" />
				</a>
			</div>
			<div class="iframe yui3-u-1-3">
				<iframe src="http://www.yiiframework.com/"></iframe>
				<a class="various fancybox.iframe" href="http://www.yiiframework.com/">
					<img class="hidden" src="images/fullscreen.gif" />
				</a>
			</div>
			<div class="iframe yui3-u-1-3">
				<iframe src="http://www.codeigniter.com"></iframe>
				<a class="various fancybox.iframe" href="http://www.codeigniter.com">
					<img class="hidden" src="images/fullscreen.gif" />
				</a>
			</div>
		</div><!-- end div.yui3-g -->
		<div id="ticker-area">
		  <ul>
			<li>This is a ticker tape example</li>
			<li>It could work well on this dashboard page</li>
		    <li>It will even support links <a href="http://www.google.com">Google</a>.</li>
		    <li>You could pull this information from a DB.</li>
			<li>Or, even an XML file.</li>
		  </ul>
		</div> <!-- end div#ticker-area -->
	</div> <!-- end div.container -->
</body>
</html>