				<div class="fix content floatleft">
				
					<?php if(have_posts()) : ?><?php while(have_posts())  : the_post(); ?>

						<?php the_content();?>
						
					<?php endwhile; ?>

					<?php else : ?>
						<h3><?php _e('404 Error&#58; Not Found', 'alin'); ?></h3>
					<?php endif; ?>	
				</div>