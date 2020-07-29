<?php
/*
Template Name: page-contact
*/
?>
<?php get_header();?>
	<div id="page-headernav">
		<?php
				wp_nav_menu( array(
					'theme_location' => 'global-submenu',
					'container' => false,
					'menu_class' => 'flexbox',
					'menu_id' => 'flexbox'
				));
		?>
	</div>
	<div id="page-image">
	<img class="animate5" src="<?php echo( get_stylesheet_directory_uri() ); ?>/images/contact_header_pc.jpg" alt="<?php echo get_the_title(); ?>"/>
	</div>
	<div id="breadcrumb">
		<ul>
			<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">TOP</a></li>
			<li><?php echo get_the_title(); ?></li>
		</ul>
	</div>
	<main>
		<section class="contents">
			<?php if (have_posts()): ?>
			<?php while (have_posts()) : the_post(); ?>
			<h2><?php echo get_the_title(); ?></h2>
			<?php the_content(); ?>
			<?php endwhile; ?>
			<?php else: ?>
			<!-- 投稿が無い場合の処理 -->
			<?php endif; ?>
		</section>
	</main>
<?php if ( wp_is_mobile() ) : ?>
  <?php get_sidebar(); ?>
<?php else: ?>

<?php endif; ?>
<?php get_footer(); ?>