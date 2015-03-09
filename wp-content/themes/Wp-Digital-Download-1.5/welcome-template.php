	<?php 
	
	/* Template Name: welcome template */
	get_header();
	
	
	?>
		<div class="fix main_content_area">
			<div class="fix wrapper main_content">
				<?php get_template_part("inc/main-content");?>
				<?php get_sidebar();?>
			</div>
		</div>

	<?php
		get_footer();
	?>