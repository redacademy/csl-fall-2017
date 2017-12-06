<?php


get_header(); ?>

		<div id="primary">
			<div id="content" role="main">
      <?php
      $args = array( 'numberposts' => '8', 'order' => 'DESC');
			$event_posts = get_posts( $args );
			$thumbnail = array( 'large' ); ?>
      
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php
					$event  = get_post_meta( get_the_ID(), '_event_taxonomy_radio', true );
          echo ( $event );

					?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>

<!-- add_filter('pre_get_posts', 'limit_archive_posts');
function limit_archive_posts($query){
    if ($query->is_archive) {
        $query->set('posts_per_page', 8);
    }
    return $query;
} -->