<?php
/*
Template Name: lecture
*/
?>
<?php get_header();?>
<main>
<div id="page-title">
<div id="page-title-inner">
	<span id="page-title-inner-icon">
		<img class="animation d1" src="<?php echo get_template_directory_uri(); ?>/images/management/title-icon.svg" alt=""></span>
	<span id="page-title-aminal03"><img class="animation d4" src="<?php echo get_template_directory_uri(); ?>/images/management/title-aminal-squirre.svg" alt=""></span>
	<div id="page-title-inner-bg">
		<div id="page-title-inner-bg-text">
		<h1 class=""><?php echo get_the_title(); ?></h1>
		<span>MANAGEMENT</span>
		<img id="page-title-inner-bg-sentences" src="<?php echo get_template_directory_uri(); ?>/images/management/title-sentences.svg" alt="これまでの活動で培った知識や成功例、ノウハウなどをターゲットやイベント種に合わせてお話しします。">
		</div>
		<img id="page-title-inner-bg-image" src="<?php echo get_template_directory_uri(); ?>/images/management/title-bg.png" alt="">
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