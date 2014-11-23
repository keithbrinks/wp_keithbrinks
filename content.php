<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="post-header">
	
		<h3 class="post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		
	</header><!-- /post_header -->
	
	<div class="post-body">
		
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
	
	<?php include('inc/meta.php'); ?>

</article><!-- /post -->