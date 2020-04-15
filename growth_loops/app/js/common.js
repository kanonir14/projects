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
			$(this).toggleClass('toggle-nav-close');
		});
	}

	// contact form

	var service_mark = $(".contact-service .contact-mark"),
		contact_mark = $(".contact-budget .contact-mark"),
		input = $(".contact input");

	service_mark.click(function(event) {
		$(this).toggleClass('js-enable-mark');
	});

	contact_mark.click(function(event) {
		contact_mark.removeClass('js-enable-mark');
		$(this).toggleClass('js-enable-mark');
	});


});