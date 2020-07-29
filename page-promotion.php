<?php
/*
Template Name: lecture
*/
?>
<?php get_header();?>
<main>
<div id="page-title">
<div id="page-title-inner">
	<span id="page-title-aminal01"><img class="animation d4" src="<?php echo get_template_directory_uri(); ?>" alt=""></span>
	<span id="page-title-aminal02"><img class="animation d4" src="<?php echo get_template_directory_uri(); ?>" alt=""></span>
	<div id="page-title-inner-bg">
		<!--<div id="page-title-inner-bg-text">
		<h1 class=""><?php echo get_the_title(); ?></h1>
		<span>promotion</span>-->
		<img id="page-title-inner-bg-sentences" src="<?php echo get_template_directory_uri(); ?>/images/promotion/comingsoon.png" alt="">
		</div>
		<img id="page-title-inner-bg-image" src="<?php echo get_template_directory_uri(); ?>" alt="">
	</div>
</div>
</div>
<<?php if (have_posts()): ?>
		<?php while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
		<?php else: ?>
		<!-- 投稿が無い場合の処理 -->
	<?php endif; ?>
</main>
<?php get_footer(); ?>
		</main>