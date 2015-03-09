	<?php get_header();?>
		<div class="fix main_content_area">
			<div class="fix wrapper main_content">
			<div class="fix breadcrumbs">
				<?php if (function_exists('wordpress_breadcrumbs')) wordpress_breadcrumbs(); ?>
			</div>

				
				<div class="fix inner_page_content floatleft">
				
				
					<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>
					
					

					<?php get_template_part('inc/single-page-content');?>


					<?php endwhile; ?>

					<?php else : ?>
							<h3><?php _e('404 Error&#58; Not Found', 'wpdigitaldownload'); ?></h3>
					<?php endif; ?>
					
					
				</div>
				<div class="fix inner_page_right_sidebar floatright">
				
					<?php get_template_part('inc/more-versions');?>
					<?php dynamic_sidebar('blog_right_sidebar'); ?>
				</div>

			</div>
		</div>
	<?php get_footer();?>
