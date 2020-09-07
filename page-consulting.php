<?php
/*
Template Name: consulting
*/
?>
<?php get_header();?>
<main>
<div id="page-title">
<div id="page-title-inner">
	<span id="page-title-inner-icon"><img class="animation d1" src="<?php echo get_template_directory_uri(); ?>/images/consulting/title-icon.svg" alt=""></span>
	<span id="page-title-aminal01"><img class="animation d2" src="<?php echo get_template_directory_uri(); ?>/images/consulting/title-aminal-washi.svg" alt=""></span>
	<span id="page-title-aminal02"><img class="animation d3" src="<?php echo get_template_directory_uri(); ?>/images/consulting/title-aminal-fox.svg" alt=""></span>
	<span id="page-title-aminal03"><img class="animation d4" src="<?php echo get_template_directory_uri(); ?>/images/consulting/title-aminal-bear.svg" alt=""></span>
	<div id="page-title-inner-bg">
		<div id="page-title-inner-bg-text">
		<h1 class=""><?php echo get_the_title(); ?></h1>
		<span>CONSULTING</span>
		<img id="page-title-inner-bg-sentences" src="<?php echo get_template_directory_uri(); ?>/images/consulting/title-sentences.svg" alt="生物多様性を中心とした環境保全や
多世代・多団体連携、地域活性化、若者活用など、当協会の強みを活かした環境活動コンサルをご提供します。">
		</div>
		<img id="page-title-inner-bg-image" src="<?php echo get_template_directory_uri(); ?>/images/consulting/title-bg.png" alt="">
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