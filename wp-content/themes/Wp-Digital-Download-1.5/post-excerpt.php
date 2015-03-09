


<?php if(have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>		

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
<?php endif; ?>
					
					
