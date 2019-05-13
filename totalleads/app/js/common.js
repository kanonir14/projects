$(document).ready(function() {
	
	// modal window
	$('a[data-remodal-target="modal"]').click(function(event) {
		
		var text = $(this).find('.content').html(),
			city = $(this).find('.vacancy-city').text(),
			title = $(this).find('h5').text();

		// console.log(text);
		$(".remodal-content").html(text);
		$(".remodal-city").text(city);
		$(".remodal-title").text(title);

	});

	// scroll-top
	$("a.scroll").click(function(event) {
		var item = $(this).attr('href'),
			top = $(item).offset().top;

		$("html, body").animate({scrollTop: top}, 500);
	});

	// wow animation
	var wow = new WOW({
	    boxClass:     'wow',      // animated element css class (default is wow)
	    animateClass: 'animated', // animation css class (default is animated)
	    offset:       0,          // distance to the element when triggering the animation (default is 0)
	    mobile:       true,       // trigger animations on mobile devices (default is true)
	    live:         true,       // act on asynchronously loaded content (default is true)
	    callback:     function(box) {
	      // the callback is fired every time an animation is started
	      // the argument that is passed in is the DOM node being animated
	    },
	    scrollContainer: null,    // optional scroll container selector, otherwise use window,
	    resetAnimation: true,     // reset animation on end (default is true)
	  }
	);
	wow.init();

});