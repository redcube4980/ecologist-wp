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
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/userAgent.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/swiper.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/lightbox.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
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
<?php wp_footer(); ?>
</body>
</html>