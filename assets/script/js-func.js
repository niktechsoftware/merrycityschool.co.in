function mycarousel_initCallback(carousel) {
    $('.slider-nav a').bind('click', function() {
        carousel.scroll(jQuery.jcarousel.intval(jQuery(this).text()));
        return false;
    });


};

function mycarousel_itemFirstInCallback(carousel, item, idx, state) {
	$('.slider-nav ul li a').removeClass('active');
	$('.slider-nav ul li a').eq(idx-1).addClass('active');
	
};



