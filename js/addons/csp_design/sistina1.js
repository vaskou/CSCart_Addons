$(function(){
	$( document ).ajaxComplete(function() 
	{
		initBindings();
	});
	
	function initBindings(){
		$('.product-meta-wrapper').hide();
		$('.product').hover(
		function(){
			$(this).find('.product-meta-wrapper').slideDown(100);
			$('.product').not($(this)).animate({opacity:0.6}, 300);
		},
		function(){
			$(this).find('.product-meta-wrapper').slideUp(100);
			$('.product').animate({opacity:1}, 300);
		});
	}
});