$('.nav-mobile').on('click', function (e) {
	$('.nav-mobile').toggleClass('fa-x');
    $('.navbar').toggleClass('mobile');
});

$(document).click(function(e) {
    var container = $(".nav-mobile");
    if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ($('.navbar').hasClass('mobile')) {
          $('.navbar').removeClass('mobile');
          $('.nav-mobile').toggleClass('fa-x');
        }
    }
});