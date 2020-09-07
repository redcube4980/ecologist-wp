<?php
/*
Template Name: performance
*/
?>
<?php get_header();?>
<main>
<div id="page-title">
	<div id="page-title-inner">
		<h1 class=""><?php echo get_the_title(); ?></h1>
		<span>PRIVACY POLICY</span>
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