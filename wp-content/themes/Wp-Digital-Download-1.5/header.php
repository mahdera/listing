<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes('xhtml'); ?>>
	<head>
		<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />	
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- Bootstrap -->
		<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
		<!--Main css file-->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
		<!-- Responsive css file -->
		<link href="<?php echo get_template_directory_uri(); ?>/responsive.css" rel="stylesheet" media="screen">		
		<!-- google translate language-->
		<meta name="google-translate-customization" content="b033f87d012dfc31-b40d7d75bc6f9413-gd4879c517916cb4f-17"></meta>
		
		<style type="text/css">
		
			<?php global $data; ?>
			<?php if($data['bg_color']): ?>
			   body{background:<?php echo $data['bg_color']; ?> !important;}
			<?php else: ?>
			   body{background:url(<?php echo get_template_directory_uri(); ?>/images/body_bg.png) repeat;}
			<?php endif; ?>
			
			<?php global $data; ?>
			<?php if($data['custom_css']): ?>
			   <?php echo $data['custom_css']; ?>
			<?php endif; ?>
			
		</style>
		
		<?php wp_head();?>
	</head>

	<body>
	
	<!-- facebook javascript code -->
	
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=549094108454486";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>
	
	<!-- facebook javascript code -->
	
		<div class="fix header_area">
			<div class="fix wrapper header">
			
			<!-- logo start -->
				<div class="fix logo floatleft">
				
					<?php global $data; ?>
					<?php if($data['logo_uploader']): ?>
						<a href="<?php bloginfo('home');?>"><img src="<?php echo $data['logo_uploader']; ?>"/></a>
					<?php else: ?>
						<a href="<?php bloginfo('home');?>"><h1><img class="logo-img" src="<?php echo get_template_directory_uri(); ?>/images/logo.png"/> Wp<span>Digital</span>Download</h1></a>
					<?php endif; ?>
					
				</div>
				
			<!-- logo end -->

				<div class="google_lan floatright">
				
				<!-- google language translate -->
									
					<div id="google_translate_element"></div>
					<script type="text/javascript">
					function googleTranslateElementInit() {
					  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
					}
					</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>				
					
				<!-- google language translate -->
				
				</div>
			</div>
		</div>
		
		<!-- start search -->
		<div class="fix search_area">
			<div class="fix wrapper search_box">
			
				<form method="get" id="searchform" action="<?php echo home_url(); ?>/">						
						<p><input type="text" class="search" name="s" id="s" placeholder="<?php global $data; ?><?php if($data['search_text']): ?><?php echo $data['search_text']; ?><?php else: ?>Search site...<?php endif; ?>" /><input type="submit" id="searchsubmit" class="search_submit"  value="Search"/></p>
						<input type="hidden" name="post_type" value="post">
					
				</form>
			
			</div>
		</div>
		
		<!-- end search -->