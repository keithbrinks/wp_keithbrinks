<?php get_header(); ?>

	<div id="right_column">
	
		<main id="kb_main_area">
	
			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
	
				<?php get_template_part( 'content', get_post_format() ); ?>
				<?php comments_template(); ?>
	
			<?php endwhile; ?>

		</main><!-- /kb_main_area -->
	</div><!-- /right_column -->	

<?php get_footer(); ?>