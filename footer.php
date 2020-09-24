<div id="footer-block">
		<nav id="footer-menu">
			<ul id="footer-menu-inner">
				<li><a href="<?php echo esc_url( home_url( '/overview/' ) ); ?>">法人概要</a></li>
				<li><a href="<?php echo esc_url( home_url( '/news/' ) ); ?>">ニュース・トピックス</a></li>
				<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">問い合わせ</a></li>
				<li><a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>">プライバシーポリシー</a></li>
			</ul>
		</nav>
		<h2>NPO法人 日本エコロジスト支援協会</h2>
</div>
<footer>
	<div class="footer-bg"></div>
	<p>Copyright(C)2018 Japan Ecologist Association of support All Rights Reserved.</p>
</footer>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(function(){
    $('a[href^="#"]').click(function(){
        var speed = 500;
        var href= $(this).attr("href");
        var target = $(href == "#" || href == "" ? 'html' : href);
        var position = target.offset().top;
        $("html, body").animate({scrollTop:position}, speed, "swing");
        return false;
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
</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/userAgent.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/lightbox.min.js"></script>
<?php if(is_front_page()): ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/swiper.min.js"></script>
<script type="text/javascript">
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
</script>
<?php endif; ?>
<?php if(is_page('performance')): ?>
<script type="text/javascript">
  // ①タブをクリックしたら発動
  $('#performance-button div').click(function() {
    // ②クリックされたタブの順番を変数に格納
    var index = $('#performance-button div').index(this);
    // ③クリック済みタブのデザインを設定したcssのクラスを一旦削除
    $('#performance-button div').removeClass('active');
    // ④クリックされたタブにクリック済みデザインを適用する
    $(this).addClass('active');
    // ⑤コンテンツを一旦非表示にし、クリックされた順番のコンテンツのみを表示
    $('#tab-content .content-inner').removeClass('show').fadeOut(375).eq(index).addClass('show').fadeIn(375); 
  });
</script>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>