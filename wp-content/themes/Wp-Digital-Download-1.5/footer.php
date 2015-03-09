		<div class="fix footer_area">
			<div class="fix wrapper footer">
				<div class="fix footer_left floatleft">
					<div class="fix google_search">
					
						<!-- google custom search -->
						
						<?php global $data; ?>
						<?php if($data['google_custom_search']): ?>
							<script>
							  (function() {
								var cx = '<?php echo $data['google_custom_search']; ?>';
								var gcse = document.createElement('script');
								gcse.type = 'text/javascript';
								gcse.async = true;
								gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
									'//www.google.com/cse/cse.js?cx=' + cx;
								var s = document.getElementsByTagName('script')[0];
								s.parentNode.insertBefore(gcse, s);
							  })();
							</script>
							<gcse:search></gcse:search>
						<?php endif; ?>

						
						<!-- google custom search -->

					</div>
					<div class="fix copyright">
					
					<?php global $data; ?>
					<?php if($data['footer_text']): ?>
						<p>&copy;Copyright <?php the_time('Y') ?> - <span><?php echo $data['footer_text']; ?></span><br/> <a href="<?php _e('http://www.wpfreeware.com', 'wpdigitaldownload'); ?>"><?php _e('Developed by WpFreeware', 'wpdigitaldownload'); ?></a></p>
					<?php else: ?>
						
					   <p>&copy;Copyright <?php the_time('Y') ?> - Your footer text will goes here.<br/> <a href="<?php _e('http://www.wpfreeware.com', 'wpdigitaldownload'); ?>"><?php _e('Developed by WpFreeware', 'wpdigitaldownload'); ?></a></p>
					<?php endif; ?>
					
					</div>
				</div>
				<div class="fix footer_right floatright">

					<div class="fix footer_menu">
					
					<?php
						// Call menu with id 'nav' , more dynamic
						if (function_exists('wp_nav_menu')) {
							wp_nav_menu(array('theme_location' => 'wpj-main-menu','fallback_cb' => 'wpj_default_menu'));
						}
						else {
							wpj_default_menu();
						}
					
					?>
				
					</div>
					<div class="fix social floatright">
						<ul>
						
							<!-- Facebook -->
							<?php global $data; ?>
							<?php if($data['facebook']): ?>
								<li><a target="_blank" href="<?php echo $data['facebook']; ?>" class="facebook"><i class="fa fa-facebook"></i></a></li>
							<?php endif; ?>
							
							<!-- Twitter -->
							<?php global $data; ?>
							<?php if($data['twitter']): ?>
								<li><a target="_blank" href="<?php echo $data['twitter']; ?>" class="twitter"><i class="fa fa-twitter"></i></a></li>
							<?php endif; ?>
							
							<!-- Google Plus -->
							<?php global $data; ?>
							<?php if($data['google']): ?>
								<li><a target="_blank" href="<?php echo $data['google']; ?>" class="google"><i class="fa fa-google-plus"></i></a></li>
							<?php endif; ?>
							
							<!-- Feed -->
							<?php global $data; ?>
							<?php if($data['feed']): ?>
								<li><a target="_blank" href="<?php echo $data['feed']; ?>" class="feed"><i class="fa fa-rss"></i></a></li>
							<?php endif; ?>		
						</ul>
					</div>					
				</div>
			</div>
		</div>
		<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.8.0.min.js"></script>	
		<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>		

		<!--Google analytics -->		
				<?php global $data; ?>
				<?php if($data['google_analytic']): ?>
				   <?php echo $data['google_analytic']; ?>
				<?php endif; ?>
		<!--Google analytics -->				
		
		<script type="text/javascript">
		// placeholder text support
		
			$(function() {
				var input = document.createElement("input");
				if(('placeholder' in input)==false) { 
					$('[placeholder]').focus(function() {
						var i = $(this);
						if(i.val() == i.attr('placeholder')) {
							i.val('').removeClass('placeholder');
							if(i.hasClass('password')) {
								i.removeClass('password');
								this.type='password';
							}			
						}
					}).blur(function() {
						var i = $(this);	
						if(i.val() == '' || i.val() == i.attr('placeholder')) {
							if(this.type=='password') {
								i.addClass('password');
								this.type='text';
							}
							i.addClass('placeholder').val(i.attr('placeholder'));
						}
					}).blur().parents('form').submit(function() {
						$(this).find('[placeholder]').each(function() {
							var i = $(this);
							if(i.val() == i.attr('placeholder'))
								i.val('');
						})
					});
				}
			}); 
		</script>
		<?php wp_footer();?>
	</body>
</html>