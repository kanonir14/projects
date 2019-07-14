$(document).ready(function() {

	var w = $(window).width();

	$(".sub-menu").closest('li').addClass('drop-menu');

	if ( w <= 768 ) {
		$(".drop-menu").click(function(event) {
			$(".sub-menu").toggleClass('js-menu-show');
			$(this).toggleClass('js-rotation');
		});

		$(".toggle-nav").click(function(event) {
			$(".navigation").toggle();
		});
	}

	// contact form

	var mark = $(".contact-mark"),
		input = $(".contact input");

	mark.click(function(event) {
		$(this).toggleClass('js-enable-mark');
	});


});