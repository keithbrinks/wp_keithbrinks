<div id="sidebar">

	<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('blog_sidebar')) : else : ?>
	
		<!-- If no dynamic sidebar exists, use the content below -->
		Error loading sidebar
		
	<?php endif; ?>

</div> <!-- /sidebar -->