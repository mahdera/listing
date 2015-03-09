<?php

// Horizontal addbar 728x90 SHORTCODE ***************************************

function leaderboard_addbar($atts, $content=null){
					
	return '<div class="fix leaderboard_addbar">'.$content.'</div>';
}
add_shortcode('leaderboard_addbar', 'leaderboard_addbar');

// Vertical addbar 300x280 SHORTCODE ***************************************

function rectangles_addbar($atts, $content=null){
					
	return '<div class="fix rectangles_addbar">'.$content.'</div>';
}
add_shortcode('rectangles_addbar', 'rectangles_addbar');


// shortcode for single category query on home page************************************

function category_query_shortcode($atts){
	extract( shortcode_atts( array(
		'title' => '',
		'category' => ''
	), $atts, 'single_cat' ) );
	
    $q = new WP_Query(
        array( 'category_name' => $category, 'posts_per_page' => '10', 'post_type' => 'post')
        );
		
    // Get the ID of a given category
    $category_id = get_cat_ID( ''.$category.'' );

    // Get the URL of this category
    $category_link = get_category_link( $category_id );
		
$list = '<div class="fix single_content floatleft">
		<h2><i class="fa fa-angle-double-right"></i> '.$title.' <span class="week popular_clock floatright"> <i class="fa fa-clock-o"></i></span></h2>
		<div class="fix">
		<ul>';

while($q->have_posts()) : $q->the_post();
    //get the ID of your post in the loop
    $id = get_the_ID();

	$post_thumbnail= get_the_post_thumbnail( $post->ID, 'post-image-home' );      
    $list .= '
				
				
	<li><div class="entry_name floatleft"><a href="'.get_permalink().'">'.$post_thumbnail.' '.get_the_title().'</a></div><div class="download-count floatright">'.get_the_date('d M, y').'</div></li>	
				

	';        
endwhile;
$list.= '</ul>
		</div>
		<p class="viewall"><a href="'.esc_url( $category_link ).'">view more </a> &nbsp;<i class="fa fa-hand-o-right"></i></p>
		</div>';
wp_reset_query();
return $list;
}
add_shortcode('single_cat', 'category_query_shortcode');



// shortcode for Letest updates query on home page************************************

function latest_query_shortcode($atts){
	extract( shortcode_atts( array(
		'title' => 'Latest Updates'
	), $atts, 'latest' ) );
	
    $q = new WP_Query(
        array('posts_per_page' => '10', 'post_type' => 'post')
        );
		

		
$list = '<div class="fix single_content floatleft">
		<h2><i class="fa fa-angle-double-right"></i> '.$title.' <span class="week popular_clock floatright"> <i class="fa fa-clock-o"></i></span></h2>
		<div class="fix">
		<ul>';

while($q->have_posts()) : $q->the_post();
    //get the ID of your post in the loop
    $id = get_the_ID();

	$post_thumbnail= get_the_post_thumbnail( $post->ID, 'post-image-home' );      
    $list .= '
				
				
	<li><div class="entry_name floatleft"><a href="'.get_permalink().'">'.$post_thumbnail.' '.get_the_title().'</a></div><div class="download-count floatright">'.get_the_date('d M, y').'</div></li>	
				

	';        
endwhile;
$list.= '</ul>
		</div>

		</div>';
wp_reset_query();
return $list;
}
add_shortcode('latest', 'latest_query_shortcode');

?>