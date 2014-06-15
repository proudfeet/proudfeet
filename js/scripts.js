(function ($, root, undefined) {
	
	$(function(){
		'use strict';
		// DOM ready, take it away
		$("nav a[title='contact']").smoothScroll();

		$("h2.menubutton").click(function(event){
			event.preventDefault();
			$(".nav").toggle(50, "linear");
			
			
		});

	});
	
})(jQuery, this);