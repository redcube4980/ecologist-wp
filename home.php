<?php
/*
Template Name: home
*/
?>
<?php get_header();?>
<main>
	<?php if (have_posts()): ?>
			<?php while (have_posts()) : the_post(); ?>
			<h2><?php echo get_the_title(); ?></h2>
			<?php the_content(); ?>
			<?php endwhile; ?>
			<?php else: ?>
			<!-- 投稿が無い場合の処理 -->
	<?php endif; ?>
</main>
<?php get_footer(); ?>