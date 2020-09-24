// JavaScript Document
$(function() {
	$('.hamburger').on('click', function(){
		$('header').toggleClass('OpenNav');
		$('header #header-navi').fadeToggle(375);
		$('header #header-navi .header-navi').fadeToggle(375).css('display','block');
	});
});

var startPos = 0,winScrollTop = 0;
$(window).on('scroll',function(){
    winScrollTop = $(this).scrollTop();
    if (winScrollTop >= 20) {
		if(winScrollTop >= 20){
        $('header').addClass('header-bg');
		} 
    } else {
        $('header').removeClass('header-bg');
    }
    startPos = winScrollTop;
});
