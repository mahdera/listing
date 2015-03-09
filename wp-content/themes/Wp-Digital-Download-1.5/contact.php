	<?php 
	
	/*
		Template Name: contact page
	*/
	
	get_header();?>
		<div class="fix main_content_area">
			<div class="fix wrapper main_content">
				
				<div class="inner_page">
					
					<?php if(have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>		
						<h1><i class="fa fa-envelope"></i> <?php the_title();?></h1>
						<?php the_content();?>
							
					<?php endwhile; ?>	
					<?php endif; ?>
					
					<div class="contact_form">
					
						<?php echo do_shortcode('[contact-form-7 id="88" title="Contact form 1"]'); ?>
						
					</div>
				</div>

			</div>
		</div>
	<?php get_footer();?>
