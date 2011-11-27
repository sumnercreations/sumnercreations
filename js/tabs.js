$(function () 
	{
		var tabContainers = $('div#main > div');

		$('div.tabs ul#tabsNavigation a').click(function () {
			tabContainers.hide().filter(this.hash).show();
	
			$('div.tabs ul#tabsNavigation li').removeClass('selected');
			$(this).parent().addClass('selected');
	
			return false;
		}).filter(':first').click();
	}); 