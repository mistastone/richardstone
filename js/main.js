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

// $(function() {
//   $('a[href*=#]:not([href=#])').click(function() {
//     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
//       var target = $(this.hash);
//       target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
//       if (target.length) {
//         $('html,body').animate({
//           scrollTop: target.offset().top
//         }, 1000);
//         return false;
//       }
//     }
//   });
// });

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

var mapOptions = {
    center: new google.maps.LatLng(37.7831,-122.4039),
    zoom: 12,
    mapTypeId: google.maps.MapTypeId.ROADMAP
};

new google.maps.Map(document.getElementById('map'), mapOptions);