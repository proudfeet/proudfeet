(function ($, root, undefined) {
	
	$(function(){
		'use strict';
		// DOM ready, take it away
		$("nav a[title='contact']").smoothScroll();
		$("nav a[title='contact']").on("click", function(){
			$("#contact").addClass("animated").on("animationend webkitAnimationEnd  oAnimationEnd", function(){
				$(this).removeClass("animated");
			});
		});
	});
	
})(jQuery, this);