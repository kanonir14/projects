$(document).ready(function(e) {
	
	// mobile navigation
	var hamburger = $(".hamburger")
		nav = $(".nav"),
		body = $("body");

	hamburger.click(function(event) {
		nav.toggleClass('shown-nav');
		body.toggleClass('menu-shown');

		// nav.toggleClass('shown-nav');
	});

	$(document).click(function(event) {
		var target = event.target;

		console.log(target);

		if ( body.hasClass('menu-shown') && !$(target).closest('.navigation').hasClass('navigation') ) {
			console.log('true')
			nav.removeClass('shown-nav');
			body.removeClass('menu-shown');
		} else{
			console.log('false');
		}
	});

});	