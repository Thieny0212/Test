$(document).ready(function() {
	if ($('#back-to-top').length) {
	    var scrollTrigger = 300, // px
	        backToTop = function () {
	            var scrollTop = $(window).scrollTop();
	            if (scrollTop > scrollTrigger) {
	                $('#back-to-top').addClass('show');
	            } else {
	                $('#back-to-top').removeClass('show');
	            }
	        };
	    backToTop();
	    $(window).on('scroll', function () {
	        backToTop();
	    });
	    $('#back-to-top').on('click', function (e) {
	        e.preventDefault();
	        $('html,body').animate({
	            scrollTop: 0
	        }, 1000);
	    });
	}


	$('.drawer').drawer();




	$(".sub-menu").hide();
    $(".nav_menu > .drawer-nav > li:nth-child(2)").click(function(){
    	$(".overlay").css("display", "block");
        $(".sub-menu").stop().slideToggle("fast");
    });

    $(".overlay").click(function(){
    	$(".sub-menu").slideUp("fast");
    	$(".overlay").css("display", "none");
    });
});