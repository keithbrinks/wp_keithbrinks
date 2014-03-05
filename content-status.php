<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="post_header">
		
		<?php include('inc/meta.php'); ?>
		
	</header><!-- /post_header -->
	
	<div class="post_body">
		
		<?php if ( is_search() ) : ?>
		<div class="post_excerpt">
			<?php the_excerpt(); ?>
		</div>
		<?php else : ?>
		<div class="post_content entry">
			<?php the_content(); ?>
		</div>
		<?php endif; ?>
	
	</div><!-- /post_body -->

</article><!-- /post -->