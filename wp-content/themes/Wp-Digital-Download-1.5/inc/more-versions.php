
					
					
     <?php $orig_post = $post;
    global $post;
    $tags = wp_get_post_tags($post->ID);
    if ($tags) {
    $tag_ids = array();
    foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
    $args=array(
    'tag__in' => $tag_ids,
    'post__not_in' => array($post->ID),
    'posts_per_page'=>5, // Number of related posts that will be shown.
    'caller_get_posts'=>1
    );
    $my_query = new wp_query( $args );
    if( $my_query->have_posts() ) {

    echo '<div class="fix older_version"><h2><i class="fa fa-list"></i>  More version</h2>';

    while( $my_query->have_posts() ) {
    $my_query->the_post(); ?>

	
	<a href="<?php the_permalink()?>"><?php the_title(); ?></a>
	
    <?php }
    echo '</div>';
    }
    }
    $post = $orig_post;
    wp_reset_query(); ?>
	
	