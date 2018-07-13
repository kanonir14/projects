$(document).ready(function() {
	var li = $(".maps__list li");

	$(li).click(function(event) {

		$(this).find(".sub-menu").toggle('fast');

	});

	// owl carousel media max-width 768
	if ( $(document).width() <= 768 ) {
		$(".owl-carousel").owlCarousel({
			loop:true,
			autoplay: true,
			margin: 15,
		    responsiveClass:true,
		    dots: true,
		    responsive:{
		        0:{
		            items:1,
		            nav:false
		        },
		        767:{
		            items:1,
		            nav:false
		        }
		    }
		});
	}

	// scroll top

	$(".arrow").click(function(event) {

		var k = $("body").offset().top;
		
		$("html, body").animate({scrollTop: k}, 500);

		event.preventDefault();
	});

	// scroll to form

	$(".btn-contact").click(function(event) {

		var item = $(this).attr('href');
		var k = $(item).offset().top;
		
		$("html, body").animate({scrollTop: k - 50}, 500);

		event.preventDefault();
	});

	// delete html

	$("form .your-name").closest("p").addClass('name');
	$("form .tel-471").closest("p").addClass('tel');
	$("form .your-message").closest("p").addClass('msg');
	$("form .wpcf7-submit").closest("p").addClass('submit');

	// span 3 characters
	$(".category__num a").each(function(){
		var s = $(this).text();
		var VRegExp = new RegExp(/^(\s|\u00A0)+/g);  
		var text = s.replace(VRegExp, '');
		var result = text.substr(0,3);
		$(this).html('<span>' + result + '</span>-' + text.substr(4));
	});

	$(".main-tel a").each(function(){
		var s = $(this).text();
		console.log(s);
		var VRegExp = new RegExp(/^(\s|\u00A0)+/g);  
		var text = s.replace(VRegExp, '');
		var result = text.substr(0,3);
		$(this).html('<span>' + result + '</span>-' + text.substr(4));
	});

});