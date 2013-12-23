<?php get_header(); ?>

	<div id="contaner">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
			<div class="page" id="post-<?php the_ID(); ?>">

				<h1><?php the_title(); ?></h1>

				<div class="entry">

					<?php the_content(); ?>

					<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

				</div> <!-- /entry -->

			</div> <!-- /page -->

		<?php endwhile; endif; ?>
		
	</div> <!-- /container -->

	<?php get_sidebar(); ?>

<?php get_footer(); ?>