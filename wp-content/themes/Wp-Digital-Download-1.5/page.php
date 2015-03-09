	<?php get_header();?>
		<div class="fix main_content_area">
			<div class="fix wrapper main_content">
				
				<div class="inner_page">
					<h1><span><i class="fa fa-arrow-down"></i></span> <?php wp_title('');?></h1>
					
					<?php if(have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>		

						<?php the_content();?>
							
					<?php endwhile; ?>	
					<?php endif; ?>
					
					
				</div>

			</div>
		</div>
	<?php get_footer();?>
