$(document).ready(function() {

	// list location

	var mainLink = $(".location-list li"),
		dropdown = $(".location-dropdown");

	mainLink.click(function(event) {

		$(this).find(dropdown).toggle('fast');
		
		
				
	});

});