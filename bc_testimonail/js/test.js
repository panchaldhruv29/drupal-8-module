(function($){$(window).on('load',function(){
	$('.flexslider').flexslider({
		animation: "slide",
		animationLoop: false,
		itemWidth: 50,
		itemMargin: 5,        
		maxItems: 1,
		directionNav: true,
		controlNav: false,
		slideshow: false,
		start: function(slider){
		 $('body').removeClass('loading');
		}
	});
})})(jQuery);