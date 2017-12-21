<?php get_header(); ?>

<div id="primary" class="content-area">
	<h2 class="page-title">Gallery</h2>
	<main id="main" class="site-main" role="main">
    
  
		<?php

		$sticky_IDs = [];
		for ($i = 1; $i <= 8; $i++) {
			$query1 = new WP_Query( array(  
						'post_type' 		=> 'event',
						'tax_query'			=> array(
							array(
								'taxonomy' => 'featured',
								'field'    => 'slug',
								'terms'    => (string) $i,
							),),
						'post_per_page' => 1  
			) );
			if ($query1 -> have_posts() ) {
			
				$query1 -> the_post();
				array_push($sticky_IDs, get_the_ID());
			
			} 
			wp_reset_postdata();
		}
		$ids_args = array(
			'post_type' 		=> 'event',
			'tax_query'			=> array(
				array(
					'taxonomy' => 'event_type',
					'field'    => 'slug',
					'terms'    => 'gallery',
				),),
			'numberposts' => -1,
			'fields'         => 'ids'
		);
	$all_posts_ids = get_posts( $ids_args );
	
	
	// Make sure we have posts before continuing
	if ( $all_posts_ids ) {
			// Set all our posts that should move to the front 
			$move_to_front   = $sticky_IDs;
			// Add the array of posts to the front of our $all_posts_ids array
			$post_ids_merged = array_merge( $move_to_front, $all_posts_ids );
			// Make sure that we remove the ID's from their original positions
			$reordered_ids   = array_values( array_unique( $post_ids_merged ) );
			
			// Now we can run our normal query to display 12 posts per page
			$args = [
					'post_type' 		=> 'event',
					'tax_query'			=> array(
						array(
							'taxonomy' => 'event_type',
							'field'    => 'slug',
							'terms'    => 'gallery',
						),),
					'posts_per_page' => 8,
					'post__in'       => $reordered_ids,
					'orderby'        => 'post__in',
					'order'          => 'ASC',
					'paged'          => get_query_var( 'paged', 1 ),
			];
		$query = new WP_Query( $args ); 
	
		if (!is_paged() ): ?>
			<div class="col-1">
			<div class="feat-1">
			<?php	
			if ( $query->have_posts() ) {
			
				$query->the_post();
				
				get_template_part( 'template-parts/content-gallery');
			
			} 
			?>
		</div>
		<div class="feat-2">
		<?php
			
			if ( $query->have_posts() ) {
			
				$query->the_post();
				
				get_template_part( 'template-parts/content-gallery');
			
			} 
			?>
		</div>
		<div class="feat-3">
		<?php
			
			if ( $query->have_posts() ) {
			
				$query->the_post();
				
				get_template_part( 'template-parts/content-gallery');
			
			} 
			?>
		</div>
		<div class="feat-4">
		<?php
			
			if ( $query->have_posts() ) {
			
				$query->the_post();
				
				get_template_part( 'template-parts/content-gallery');
			
			} 
			?>
		</div>
  </div><!-- end of col-1 -->
  <div class="col-2">
		<div class="feat-5">
		<?php
			
			if ( $query->have_posts() ) {
			
				$query->the_post();
				
				get_template_part( 'template-parts/content-gallery');
			
			} 
			?>
		</div>
		<div class="mini-row">
			<div class="feat-6">
			<?php
				
				if ( $query->have_posts() ) {
				
					$query->the_post();
					
					get_template_part( 'template-parts/content-gallery');
				
				} 
				?>
			</div>
			<div class="feat-7">
			<?php
			
				if ( $query->have_posts() ) {
				
					$query->the_post();
					
					get_template_part( 'template-parts/content-gallery');
				
				} 
				?>
			</div>
		</div><!-- end of mini row-->
		<div class="feat-8">
		<?php
			
			if ( $query->have_posts() ) {
			
				$query->the_post();
				
				get_template_part( 'template-parts/content-gallery');
			
			} 
			?>
		</div>
  </div><!-- end of col-2 -->
	<?php else :
		 /* Start the Loop */ ?>
		<?php while ( $query->have_posts() ) : $query->the_post(); 

		get_template_part( 'template-parts/content-gallery');

		endwhile; 
		endif;
		
		?>
	</main><!-- #main -->

	<div class="page-navigation <?php if ( !is_paged() ) { echo 'first-page'; } ?>">
	  <?php	posts_nav_link(' ', 'Prev', 'Next'); ?>
	</div>
<?php
}
	wp_reset_postdata();
	?>
</div><!-- #primary -->
<?php get_footer(); ?>