// JavaScript Document
$(function() {
	$('.hamburger').on('click', function(){
		$('header').toggleClass('OpenNav');
		$('header #header-navi').fadeToggle(375);
		$('header #header-navi ul').fadeToggle(375);
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

var mySwiper = new Swiper ('.swiper-container', {
    loop: true,
	autoplay: {
		delay:3000,
		stopONLast:false,
		disableOnInteraction:false,
	},
	speed: 5000,
	slidesPerView: 2,
	// slidesPerView: 1.2, // 何枚のスライドを表示するか
    spaceBetween: 50, // スライド間の余白サイズ(ピクセル)
    direction: 'horizontal', // スライド方向。 'horizontal'(水平) か 'vertical'(垂直)。effectオプションが 'slide' 以外は無効。
    effect: 'slide', // "slide", "fade"(フェード), "cube"(キューブ回転), "coverflow"(カバーフロー) または "flip"(平面回転)
	//
	freeModeMomentumBounce: false,
	initialslide:1,
	calculateHeight: true,
	centeredSlides : true,
	preloadImages: true, 
	observer: true,
	observeParents: true,
	//Enable lazy loading 
	lazy: { loadPrevNext: true,
		  	loadPrevNextAmount :1,
		   	loadOnTransitionStart: true,
		   	elementClass :'swiper-lazy' ,
		   	preloaderClass:'swiper-lazy-preloader' 
		  },
	breakpoints: {
    // when window width is <= 600px
    599: {
      slidesPerView: 1,
      spaceBetween: 0
    },
	// when window width is <= 960px
    959: {
      slidesPerView: 1.4,
      spaceBetween: 20
    },
    // when window width is <= 1024px
    1023: {
      slidesPerView: 2,
      spaceBetween: 30
    },
    // when window width is <= 1400px
    1279: {
      slidesPerView: 2,
      spaceBetween: 30
    },
  	},
    pagination: {
    el: '.swiper-pagination',　 // ページネーションを表示するセレクタ
	clickable: 'true',
	clickableClass: 'swiper-pagination-clickable',
    },
})

