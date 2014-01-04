<div class="post_date">
	Posted <a href="<?php the_permalink(); ?>" title="Permalink to <?php the_title(); ?>"><?php the_time('F jS, Y') ?></a>
	in <?php the_category(', '); ?>
</div>

<div class="post_format">
	<?php 
		$format = get_post_format();
		if (false === $format)
			$format = 'standard';
			
		echo $format;
	?>
</div>