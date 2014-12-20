$(document).ready(function(){

	$('.textslider').slick({

		infinite: true,
		autoplay: true,
		autoplaySpeed: 6000,
		speed: 1000,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
	});
});

$(document).ready(function(){
	$('#menu').slicknav();
});

$(document).ready(function() {

    $('a[href*=#]').each(function() {
        if($(this).attr('href').indexOf("#") == 0) {
            $(this).click(function(e) {
              e.preventDefault();
              var targetOffset = $($(this).attr('href')).offset().top;
              $('body').animate({scrollTop: targetOffset-40}, 1000);
            });
        }
    });

});