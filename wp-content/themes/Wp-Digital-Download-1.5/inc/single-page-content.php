					<div class="fix single_page_content">
						<div class="fix">
						<div class="soft_title">
							<h1><?php the_post_thumbnail('post-image-inner'); ?> <?php the_title();?></h1>
							<div class="rating_star">
							<?php if(function_exists("kk_star_ratings")) : echo kk_star_ratings($pid); endif; ?>
								
							</div>
						</div>

						</div>

						<?php dynamic_sidebar('single_page_addbar728'); ?>
						
						<div class="fix description_tabs">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs">
							  <li class="active"><a href="#home" data-toggle="tab"><i class="fa fa-file-text"></i> Descriptions</a></li>
							  <li><a href="#technical" data-toggle="tab"><i class="fa fa-cog"></i>  Technical </a></li>
							  <li><a href="#changelog" data-toggle="tab"><i class="fa fa-exchange"></i>  Changelog </a></li>

							<?php global $data; ?>
							<?php if($data['disqus_shortname']): ?>
							   
							  <li><a href="#comments" data-toggle="tab"><i class="fa fa-comments-o"></i>  Comments </a></li>
							  
							<?php endif; ?>
							
							</ul>

							<!-- Tab panes -->
							<div class="tab-content">
							  <div class="tab-pane active descriptions" id="home">
								
								<?php the_content(); ?>								
								
							  </div>

							  <div class="tab-pane technical" id="technical">

								<h2>Technical:</h2>
								<ul>
									<li>
										<div class="fix description_info">
											<div class="des_title">Title :</div>
											<div class="des"><?php the_field("title"); ?></div>
										</div>
									</li>
									<li>
										<div class="fix description_info">
											<div class="des_title">File Name :</div>
											<div class="des"><?php the_field("filename"); ?></div>
										</div>
									</li>
									<li>
										<div class="fix description_info">
											<div class="des_title">Date added :</div>
											<div class="des"><?php the_time('M d, Y') ?></div>
										</div>
									</li>	
									<li>
										<div class="fix description_info">
											<div class="des_title">License :</div>
											<div class="des"><?php the_field("license"); ?></div>
										</div>
									</li>
									<li>
										<div class="fix description_info">
											<div class="des_title">File size :</div>
											<div class="des"><?php the_field("filesize"); ?></div>
										</div>
									</li>	
									<li>
										<div class="fix description_info">
											<div class="des_title">Version :</div>
											<div class="des"><?php the_field("version"); ?></div>
										</div>
									</li>
									<li>
										<div class="fix description_info">
											<div class="des_title">Language :</div>
											<div class="des"><?php the_field("language"); ?></div>
										</div>
									</li>										
									<li>
										<div class="fix description_info">
											<div class="des_title">Requirements :</div>
											<div class="des"><?php the_field("requirements"); ?></div>
										</div>
									</li>			
									<li>
										<div class="fix description_info">
											<div class="des_title">Author :</div>
											<div class="des"><?php the_field("author"); ?></div>
										</div>
									</li>		
									<li>
										<div class="fix description_info">
											<div class="des_title">Author URL :</div>
											<div class="des"><a href="<?php the_field("authorurl"); ?>" target="_blank"><?php the_field("authorurl"); ?></a></div>
										</div>
									</li>											
								</ul>
							  
							  </div>

							  <div class="tab-pane changelog" id="changelog">
									<p><?php the_field("changelog"); ?></p>
							  </div>
							  
							  
							<?php global $data; ?>
							<?php if($data['disqus_shortname']): ?>
							  <div class="tab-pane comments" id="comments">
									<?php disqus_embed(''.$data['disqus_shortname'].''); ?>
							  </div>
							<?php endif; ?>
							  
							</div>

						</div>
						<?php get_template_part('inc/post-meta');?>
						<?php get_template_part('inc/related-post');?>
					</div>