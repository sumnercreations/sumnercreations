	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/browserDetect.js"></script>
	<script type="text/javascript">
		var DEBUG = false;
		if(BrowserDetect.browser == "Explorer") 
		{
			alert(
				"Welcome to the Magna Stake Sports site!\n\nThanks for visiting!\n\nI notice you are using Internet Explorer, unfortunately, Internet Explorer doesn't render this page very well. \n\nWhy not try Google Chrome, Mozilla Firefox or Apple Safari?"
			);
		}
		else
		{
			if(DEBUG)
			{
				alert(BrowserDetect.browser);
			}
		}
	</script>
</body>
</html>