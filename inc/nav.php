<div id="kb_page_nav">

	<?php if (function_exists('wp_pagenavi')) {
	
		wp_pagenavi();
	
	} else { ?>
		
		<div class="next-posts"><?php next_posts_link('&laquo; Older Entries') ?></div>
		<div class="prev-posts"><?php previous_posts_link('Newer Entries &raquo;') ?></div>	
		
	<?php } ?>
	
</div>