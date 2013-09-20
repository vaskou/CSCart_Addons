$(function(){
	
	initBindings();
	
	$( document ).ajaxComplete(function() 
	{
		initBindings();
	});
	
	function initBindings(){
		//$('.product-meta-wrapper').hide();
		$('.product').hover(
		function(){
			//$(this).find('.product-meta-wrapper').slideDown(100);
			$('.product').not($(this)).stop(true, false).animate({opacity:0.6}, 300);
			var to;
            clearTimeout(to);
		},
		function(){
			//$(this).find('.product-meta-wrapper').slideUp(100);
			$('.product').delay(10).animate({opacity:1}, 300);
			var to;
            to = setTimeout(function(){ },700);
		});
	}
});