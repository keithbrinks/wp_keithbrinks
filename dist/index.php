<?php get_header(); ?>

	<main id="kb_main_area">
	
		<?php if ( have_posts() ) : ?>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
		
		<?php include_once('inc/nav.php'); ?>

	</main> <!-- /kb_main_area -->
	
<?php get_footer(); ?>