<?php get_header(); ?>
		
	<div id="right_column">

		<main id="kb_main_area">
		
			<?php if ( have_posts() ) : ?>
	
				<?php /* The loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
				<?php endwhile; ?>
	
			<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>
	
		</main> <!-- /kb_main_area -->
		
	</div><!-- /right_column -->
	
<?php get_footer(); ?>