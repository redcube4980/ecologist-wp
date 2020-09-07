<?php
/*
Template Name: contact
*/
?>
<?php get_header();?>
<main>
<div id="page-title">
	<div id="page-title-inner">
		<h1 class=""><?php echo get_the_title(); ?></h1>
		<span>contact</span>
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