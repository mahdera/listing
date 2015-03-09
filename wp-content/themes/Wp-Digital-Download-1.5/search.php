	<?php get_header();?>
		<div class="fix main_content_area">
			<div class="fix wrapper main_content">
				
				<div class="fix inner_left_sidebar floatleft">
				
					<?php dynamic_sidebar('blog_left_sidebar'); ?>
					
				</div>
				<div class="fix inner_content floatleft">
					<h1><?php printf( __( '<span style="color:#999;"><i class="fa fa-search"></i> Search for: %s</span>', 'softwaredownload' ),'<span style="font-style:italic;color:#fff;">' . get_search_query() . '</span>'); ?></h1>
					
					<ul>
						
						
						<li>
							<div class="fix single_inner_content">
							
								<?php dynamic_sidebar('blog_top_bottom_addbar'); ?>

							</div>
						</li>
					
					
						<?php if (have_posts()) : ?>
						
							<?php get_template_part( 'post-excerpt' ); // Post Excerpt (post-excerpt.php) ?>

						<?php else : ?>
							<p style="margin:100px 0px;color:#999;text-align:center;font-size:60px;line-height:65px;">Sorry!<br/><span>Not Found</span></p>
						<?php endif; ?>
						
						
						<li>
							<div class="fix single_inner_content">
								
								<?php dynamic_sidebar('blog_top_bottom_addbar'); ?>
								
							</div>
						</li>						
					</ul>

				</div>
				<div class="fix inner_right_sidebar floatright">
					
					<?php dynamic_sidebar('blog_right_sidebar'); ?>
					
				</div>

			</div>
		</div>
	<?php get_footer();?>
