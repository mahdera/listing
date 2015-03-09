	<div class="fix related_post">
			<?php $orig_post = $post;
			global $post;
			$categories = get_the_category($post->ID);
			if ($categories) {
			$category_ids = array();
			foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

			$args=array(
			'category__in' => $category_ids,
			'post__not_in' => array($post->ID),
			'posts_per_page'=> 8, // Number of related posts that will be shown.
			'caller_get_posts'=>1
			);

			$my_query = new wp_query( $args );
			if( $my_query->have_posts() ) {
			echo '<h2><i class="fa fa-arrow-circle-down"></i> Similar products you may like</h2><div class="fix related_post_container">';
			while( $my_query->have_posts() ) {
			$my_query->the_post();?>
			
			<div class="fix single_related_post">
				<h2><?php the_post_thumbnail('post-image-inner'); ?> <a href="<?php the_permalink();?>"><?php the_title();?></a> <div class="download-count" style="padding-left:35px;"><?php the_time('d M, y');?></div></h2>
			</div>
			
			<?php
			}
			echo '</div>';
			}
			}
			$post = $orig_post;
			wp_reset_query(); ?>
	
	</div>
	
