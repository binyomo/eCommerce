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

$( window ).scroll(function() {
	if ($(window).scrollTop() > 50) {
	    $('.header').addClass('header-scrolled');
	    $('.header').addClass('fixed-top');
	    $('.navbar-gap').addClass('py-5 my-5');
	}else{
		$('.header').removeClass('header-scrolled');
		$('.header').removeClass('fixed-top');
		$('.navbar-gap').removeClass('py-5 my-5');
	}
});

$('.btn-minus').on('click', function(){
    $(this).parent().siblings('input').val(parseInt($(this).parent().siblings('input').val()) - 1)
})

$('.btn-plus').on('click', function(){
    $(this).parent().siblings('input').val(parseInt($(this).parent().siblings('input').val()) + 1)
})