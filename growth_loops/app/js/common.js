$(document).ready(function() {

	$(".sub-menu").closest('li').addClass('drop-menu');

	// contact form

	var mark = $(".contact-mark");

	mark.click(function(event) {
		$(this).toggleClass('js-enable-mark');
	});

	// var label = $(this).closest('.form-group').find('label'),
	// 	input = $(".contact-form input");

	// input.focusin(function(event) {
	// 	$(this).closest('.form-group').find('label').css('fontSize', '0');
	// });
	
	// input.focusout(function(event) {
	// 	$(this).closest('.form-group').find('label').css('fontSize', '21px');
	// });


});