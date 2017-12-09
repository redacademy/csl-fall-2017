<?php


get_header(); ?>

		<div id="primary">
			<div id="content" role="main">
      <?php
      $args = array( 'numberposts' => '8', 'order' => 'DESC');
			$news_posts = get_posts( $args );
			$thumbnail = array( 'large' ); ?>
      
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php
					$news  = get_post_meta( get_the_ID(), '_event_taxonomy_radio', true );
          echo ( $news );

					?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>