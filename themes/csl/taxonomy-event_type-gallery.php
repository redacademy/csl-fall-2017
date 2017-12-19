<?php


get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<h2 class="page-title">Gallery</h2>
	<?php
	$exclude_IDs = [];
	for ($i = 1; $i <= 8; $i++) {
		$query = new WP_Query( array(  
					'post_type' 		=> 'event',
					'tax_query'			=> array(
						array(
							'taxonomy' => 'featured',
							'field'    => 'slug',
							'terms'    => (string) $i,
						),),
					'post_per_page' => 1  
		) );
		if ($query -> have_posts() ) {
		
			$query -> the_post();
			array_push($exclude_IDs, get_the_ID());
			get_template_part( 'template-parts/content-gallery');
		
		} 
		wp_reset_postdata();
	}

	$query = new WP_Query( array(  
		'post_type' 		=> 'event',
		'tax_query'			=> array(
			array(
				'taxonomy' => 'event_type',
				'field'    => 'slug',
				'terms'    => 'gallery',
			),),
		'post__not_in'	=> $exclude_IDs,
		'post_per_page' => 9
	) );

	if ( $query -> have_posts() ) : ?>
		

		<?php /* Start the Loop */ ?>
		<?php while ( $query -> have_posts() ) : $query -> the_post(); 

		get_template_part( 'template-parts/content-gallery');

		endwhile; ?>


	<?php else : ?>

		<?php get_template_part( 'template-parts/content', 'none' ); ?>

	<?php endif; ?>

	</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>