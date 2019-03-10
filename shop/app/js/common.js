$(document).ready(function() {

	// gallery owl carousel
	$('.gallery__owl').owlCarousel({
        items:1,
        loop:true,
        center:true,
        margin:10,
        URLhashListener:true,
        autoplayHoverPause:true,
        startPosition: 'URLHash'
    });	

    // adaptive navigation

    var w = $(document).width();

    if ( w <= 540 ) {
        $(".nav li").click(function() {

            $(".submenu").css({
                visibility: 'visible',
                opacity: '1',
                height: 'auto',
                paddingTop: '10px',
                paddingBottom: '10px',
                marginTop: '10px'
            });

        });

        $(".hamburger").click(function() {
            $(".nav ").css({
                visibility: 'visible',
                opacity: '1',
                height: 'auto'
            });
        });
    }

});