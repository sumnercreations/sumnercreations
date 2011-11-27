var Ads = {
   totalAds : '',

   AdWidth : '',

   translateAmount : 0,

   currentAd : 0,

   container : $('#Ads'),
   
   init : function(totalAds) {
      if ( !totalAds ) throw new Error('Please pass the total number of Ads');
      Ads.totalAds = ~~totalAds;

      Ads.loadContent();
      Ads.setAdWidth(); 
      Ads.keyPress();

      if ( /#Ad-\d{1,3}/i.test( location.hash ) ) { 
         Ads.currentAd = ~~location.hash.split('-')[1];
         Ads.goto();
      }

   },

   loadContent : function() {
      Ads.container.hide();
      for ( var i = 0; i < Ads.totalAds; i++ ) {
         $('<div id="#Ad-"' + i + '"></div>')
            .load('Ads/' + i + '.html')
            .appendTo( Ads.container );
      }              
      Ads.container.show();
   },

   setAdWidth : function() {
      var each = Ads.container.children('div');
      Ads.AdWidth = each.width() + ( parseInt( each.css('margin-right'), 10 ) );
   },
   
   	// Change the Ad every 5 seconds
	timeout : function () {
		setTimeout( function() {
		Ads.next();
	}, 1000 )
	},
   
	// Change the Ad on keypress (right arrow and left arrow)
   keyPress : function() {
      $( document.body ).keydown(function(e) {
         if ( e.keyCode === 37 || e.keyCode === 39 ) {
            e.preventDefault();
            ( e.keyCode === 39 ) ? Ads.next() : Ads.prev();
         }
      });
   },

   next : function() {
      if ( Ads.currentAd >= Ads.totalAds - 1 ) return;
      Ads.translateAmount -= Ads.AdWidth;
      ++Ads.currentAd;
      Ads.updateHash();
      Ads.animate();
   },

   prev : function() {
      if ( Ads.currentAd <= 0 ) return;

      Ads.translateAmount += Ads.AdWidth;
      --Ads.currentAd;
      Ads.updateHash();
      Ads.animate();
   }, 

   goto : function(  ) {
      Ads.translateAmount = -Ads.AdWidth * Ads.currentAd;  
      Ads.animate();
   },

   animate : function() {
      Ads 
         .container
         .children()
            .css('-webkit-transform', 'translateX(' + Ads.translateAmount + 'px)');
   },

   updateHash : function() {
      location.hash = '#Ad-' + Ads.currentAd;
   },

};

// Pass the total number of Ads as an argument.
Ads.init( 6 );