<?php

define( 'ACF_LITE', true );
include_once('custom-fields/acf.php');
include_once('custom-fields/fields.php');
include_once('inc/shortcodes.php');


////////////////////////
// SMOF support
////////////////////////
require_once('admin/index.php');

////////////////////////////////////////////
// Require plugin activation
///////////////////////////////////////////

require_once('require-plugin/class-tgm-plugin-activation.php');
require_once('require-plugin/example.php');

/*for thumbnail images in every post*************/

add_theme_support( 'post-thumbnails', array( 'post') );
add_image_size( 'post-image-home', 16, 16, true );		
add_image_size( 'post-image-inner', 32, 32, true );		



	/* Adding Latest jQuery from Wordpress */
	function softwaregellary_latest_jquery() {
		wp_enqueue_script('jquery');
	}
	add_action('init', 'softwaregellary_latest_jquery');






////////////////////////////////
// shortcode support in widgets
////////////////////////////////

add_filter('widget_text', 'do_shortcode');

 
	
////////////////////////////////////////////
// Register sidebars and widgetized areas
////////////////////////////////////////////	
	
	
	function software_download_widgets() {

		
   	    register_sidebar( array(
			'name' => __( 'Home Right Sidebar', 'alin' ),
			'id' => 'home_sidebar',
			'description' => 'This widgets will show only home page template.',
			'before_widget' => '<div class="fix single_home_sidebar">',
	        'after_widget' => '</div>',
	        'before_title' => '<h2><i class="fa fa-list"></i> ',
	        'after_title' => '</h2>',
	    ) );
		
   	    register_sidebar( array(
			'name' => __( 'Right Sidebar', 'alin' ),
			'id' => 'blog_right_sidebar',
			'before_widget' => '<div class="fix single_right_sidebar">',
	        'after_widget' => '</div>',
	        'before_title' => '<h2><i class="fa fa-list"></i> ',
	        'after_title' => '</h2>',
	    ) );
		
		
   	    register_sidebar( array(
			'name' => __( 'Left sidebar', 'wpfreeware' ),
			'id' => 'blog_left_sidebar',
			'description' => 'This widgets will show in the archive pages.',
			'before_widget' => '<div class="fix single_left_sidebar">',
	        'after_widget' => '</div>',
	        'before_title' => '<h2><i class="fa fa-list"></i> ',
	        'after_title' => '</h2>',
	    ) );
		
		
   	    register_sidebar( array(
			'name' => __( 'Top-Bottom Addbar 630*100', 'wpfreeware' ),
			'id' => 'blog_top_bottom_addbar',
			'description' => 'Show your adds here.This widget will show top & bottom in the archive pages',
			'before_widget' => '<div class="fix blog_top_add">',
	        'after_widget' => '</div>',
	        'before_title' => '<h2 style="display:none;">',
	        'after_title' => '</h2>',
	    ) );
		
		
   	    register_sidebar( array(
			'name' => __( 'single page addbar 728*90', 'wpfreeware' ),
			'id' => 'single_page_addbar728',
			'description' => 'Show your adds here.This widget will show in every single page',
			'before_widget' => '<div class="fix single_page_content_top_addbar">',
	        'after_widget' => '</div>',
	        'before_title' => '<h2 style="display:none;">',
	        'after_title' => '</h2>',
	    ) );
		
		

	}
	add_action('widgets_init', 'software_download_widgets');
	

	
	
////////////////////////////////
// Menu support
////////////////////////////////


	// add menu support and fallback menu if menu doesn't exist
	
	add_action('init', 'wpj_register_menu');
	function wpj_register_menu() {
		if (function_exists('register_nav_menu')) {
			register_nav_menu( 'wpj-main-menu', __( 'Footer Menu', 'alin' ) );
		}
	}
		
	function wpj_default_menu() {																	
		echo '<ul>';
		if ('page' != get_option('show_on_front')) {
			echo '<li><a href="'. home_url() . '/">Home</a></li>';
		}
		wp_list_pages('title_li=');
		echo '</ul>';
	}
		


/////////////////////////	
// Ajax comment reply
/////////////////////////


function comment_scripts(){

   if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

}

add_action( 'wp_enqueue_scripts', 'comment_scripts' );


// Disqus comment system embed

function disqus_embed($disqus_shortname) {
    global $post;
    wp_enqueue_script('disqus_embed','http://'.$disqus_shortname.'.disqus.com/embed.js');
    echo '<div id="disqus_thread"></div>
    <script type="text/javascript">
        var disqus_shortname = "'.$disqus_shortname.'";
        var disqus_title = "'.$post->post_title.'";
        var disqus_url = "'.get_permalink($post->ID).'";
        var disqus_identifier = "'.$disqus_shortname.'-'.$post->ID.'";
    </script>';
}

////////////////////////////////
// BreadCrumbs support
////////////////////////////////

include_once('inc/breadcrumbs.php'); 



////////////////////////////
// Pagination support
////////////////////////////


function blog_pagination($pages = '', $range = 2)
{  
     $showitems = ($range * 2)+1;  

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
     {
         echo "<div id='pagination'>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
         echo "</div>\n";
     }
}
?>