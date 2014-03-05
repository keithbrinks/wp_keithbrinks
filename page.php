<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article id="page" id="post-<?php the_ID(); ?>">
		
			<header id="page_header">

				<h2><?php the_title(); ?></h2>
				
			</header> <!-- /page_header -->

			<div id="page_content" class="entry">

				<?php the_content(); ?>

			</div> <!-- /post_content -->

		</article> <!-- /page -->

	<?php endwhile; endif; ?>

<?php get_footer(); ?>