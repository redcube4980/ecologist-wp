<?php
/*
Template Name: overview
*/
?>
<?php get_header();?>
<main>
<div id="page-title">
<div id="page-title-inner">
	<span id="page-title-aminal01"><img class="animation d4" src="<?php echo get_template_directory_uri(); ?>/images/overview/title-aminal-butterfly.svg" alt=""></span>
	<span id="page-title-aminal02"><img class="animation d4" src="<?php echo get_template_directory_uri(); ?>/images/overview/title-aminal-rabit.svg" alt=""></span>
	<div id="page-title-inner-bg">
		<div id="page-title-inner-bg-text">
		<h1 class=""><?php echo get_the_title(); ?></h1>
		<span>OVERVIEW</span>
		<img id="page-title-inner-bg-sentences" src="<?php echo get_template_directory_uri(); ?>/images/overview/title-sentences.svg" alt="NPO法人 日本エコロジスト支援協会の活動実績をご紹介します。">
		</div>
		<img id="page-title-inner-bg-image" src="<?php echo get_template_directory_uri(); ?>/images/overview/title-bg.png" alt="">
	</div>
</div>
</div>
<?php if (have_posts()): ?>
		<?php while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
		<?php else: ?>
		<!-- 投稿が無い場合の処理 -->
	<?php endif; ?>
</main>
<?php get_footer(); ?>