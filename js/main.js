// Text Slider Plugin

$(document).ready(function(){

	$('.textslider').slick({

		infinite: true,
		autoplay: true,
		autoplaySpeed: 7000,
		speed: 1000,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
	});
});

// Slick Nav

$(document).ready(function(){
	$('#menu').slicknav();
});

// Smooth Scroll

$(document).ready(function() {

    $('a[href*=#]').each(function() {
        if($(this).attr('href').indexOf("#") == 0) {
            $(this).click(function(e) {
              e.preventDefault();
              var targetOffset = $($(this).attr('href')).offset().top;
              $('body').animate({scrollTop: targetOffset-45}, 1000);
              $('#menu').slicknav('close');
            });
        }
    });

});

// var iScrollPos = 0;
// $(window).scroll(function () {
// var iCurScrollPos = $(this).scrollTop();
// if (iCurScrollPos > iScrollPos) {
// 	$('.slicknav_menu').slideUp('slow');
// 	// $('.mobilenav').fadeOut();
// } else {
// $('.slicknav_menu').slideDown('slow');
// // $('.mobilenav').fadeIn();
// }
// iScrollPos = iCurScrollPos;
// });


// $('#learnabout').click(function(){
// 	$('.hideabout').css('background-color', 'transparent');
// });

$('#learnabout').click(function(){
	$(this).hide();
	$('.aboutfull').slideDown('slow');
	$('.hideabout').show();
});

$('.hideabout').click(function(){
	$(this).hide();
	$('.aboutfull').slideUp('slow');
	$('#learnabout').show();
});

$('#learnfocus').click(function(){
	$(this).hide();
	$('.focusfull').slideDown('slow');
	$('.hidefocus').show();
});

$('.hidefocus').click(function(){
	$(this).hide();
	$('.focusfull').slideUp('slow');
	$('#learnfocus').show();
});

// Code for 'Scroll to Top'

// $(".learnmore").click(function() {
//   $("html, body").animate({ scrollTop: 0 }, "slow");
//   return false;
// });

