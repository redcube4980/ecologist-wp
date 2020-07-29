<?php
/*
Template Name: front-page
*/
?>
<?php get_header();?>
<main>
<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
		<a href="#"><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/top-slider01.png" alt="若者力の伸ばし方活かし方 無限の可能性を秘めた若者たちの力を見つけ、
引き出し、伸ばす。そして環境保全に活かす方法"></a>
		</div>
        <div class="swiper-slide">
		<a href="#"><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/top-slider02.png" alt="Session GAIA 学生が中心となって愛知県全域の活動をつなぎ、広め、促進する
全く新しい仕組みと仕掛け"></a>
		</div>
        <div class="swiper-slide">
		<a href="#"><img src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/top-slider03.png" alt="命をつなぐPROJECT 学生ならではの“つなぐ力”を引き出して多様な主体による
生態系ネットワークを構築"></a>
		</div>
    </div>
    <div class="swiper-pagination"></div>
</div>
<div class="container">
	<section id="overview">
	<div id="overview-logo"><img class="site-logoimage" src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/ecologist-logo.svg" alt="NPO法人 日本エコロジスト支援協会"/></div>
	<div id="overview-text">
	<h2>法人概要</h2>
	<p>日本エコロジスト支援協会は、<br class="tab">環境活動を志す企業・団体・個人を支援する<br class="sp">NPO法人です。<br class="tab">特に若者による環境イベントの支援・プロデュースや、<br class="sp">若者と企業・NPOとのマッチング、<br class="tab">地域住民（ファミリー）向けの環境イベントなどを<br class="sp">得意としています。<br>
普段は別々に活動する様々な団体や個人が<br class="sp">協力し合って奏でるハーモニーが、<br class="tab">生物多様性の向上や地域課題の解決へと<br class="sp">つながっていく……<br class="tab">私たちはそのお手伝いをしています。</p></div>
	<div id="overview-link"><a href="/information/" class="overview-link"><img class="overview-image" src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/icon-overview.svg" alt="法人概要 OVERVIEW"/></a></div>
	</section>
	<section id="sns-block">
		<div id="sns-block-top">
			<div id="facebook">
			<h3>facebook</h3>
			<div class="sns-block-inner"></div>
			</div>
			<div id="twitter">
			<h3>twitter</h3>
			<div class="sns-block-inner"></div>
			</div>
		</div>
		<div id="sns-block-bottom">
			<div id="instagram">
			<h3>instagram</h3>
			<div class="sns-block-inner"></div>
				<ul>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</div>
		</div>
	</section>
	
</div>
</main>
<?php get_footer(); ?>