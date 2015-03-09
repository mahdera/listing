	<?php get_header();?>
		<div class="fix main_content_area">
			<div class="fix wrapper main_content">
			

				
				<div class="fix inner_left_sidebar floatleft">
				
					<?php dynamic_sidebar('blog_left_sidebar'); ?>
					
				</div>
				<div class="fix inner_content floatleft">
					<h1><i class="fa fa-arrow-circle-down"></i> <?php wp_title('');?></h1>
					<ul>
						
						
						<li>
							<div class="fix single_inner_content">
							
								<?php dynamic_sidebar('blog_top_bottom_addbar'); ?>

							</div>
						</li>
						
						
							<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>

							<li>
								<div class="fix single_inner_content">
									<h1><?php the_post_thumbnail('post-image-inner'); ?> <a href="<?php the_permalink();?>"><?php the_title();?> </a><span><?php the_field("filesize"); ?> ( <?php the_field("license"); ?> )  <br/> <?php the_time('d M Y'); ?></span></h1>
									<div class="fix star">
										<?php if(function_exists("kk_star_ratings")) : echo kk_star_ratings($pid); endif; ?>
									</div>
									<a href="<?php the_permalink();?>">Download <i class="fa fa-download"></i></a>
								</div>
							</li>
								
							<?php endwhile; ?>

							<?php else : ?>
								<h3><?php _e('404 Error&#58; Not Found', 'alin'); ?></h3>
							<?php endif; ?>	
						
						<li>
							<div class="fix single_inner_content">
								
								<?php dynamic_sidebar('blog_top_bottom_addbar'); ?>
								
							</div>
						</li>						
					</ul>
					
						<?php echo blog_pagination();?>
				</div>
				<div class="fix inner_right_sidebar floatright">
					
					<?php dynamic_sidebar('blog_right_sidebar'); ?>
					
				</div>

			</div>
		</div>
	<?php get_footer();?>
