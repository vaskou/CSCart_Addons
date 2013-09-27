$(function(){
		
	initBindings();
	
	$( document ).ajaxComplete(function() 
	{
		initBindings();
	});
	
	function initBindings(){
    	$('.mcs_hover .products > li').each( function() { $(this).hoverdir(); } );
	}
});