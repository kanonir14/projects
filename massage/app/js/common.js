$(document).ready(function() {
	var li = $(".maps__list li");

	$(li).click(function(event) {
		$(this).find(".sub-menu").toggle('fast');
	});

	// scroll top

	$(".arrow").click(function(event) {

		var k = $("body").offset().top;
		
		$("html, body").animate({scrollTop: k}, 500);

		event.preventDefault();
	});
});