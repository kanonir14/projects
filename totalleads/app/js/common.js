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

});