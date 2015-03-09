						<div class="fix post-meta">
							<div class="fix download_area">
								<?php get_template_part('inc/social');?>
								<div class="fix download_button">
									<a rel="nofollow" target="<?php the_field("download_target");?>" href="<?php the_field("downloadlink");?>" > <i class="fa fa-download"></i> Download<span>( <?php the_field("filesize"); ?> )</span></a>
								</div>
							</div>
						</div>