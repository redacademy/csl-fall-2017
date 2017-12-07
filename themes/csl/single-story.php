<?php

get_header(); ?>



		<?php while ( have_posts() ) : the_post(); ?>
		<?php if ( is_single( $story = 'one-house' ) ) : ?>
			
			<?php get_template_part( 'template-parts/content', 'single-story-one-house' ); ?>

		<?php elseif ( is_single( $story = 'origin' ) ) : ?>
			<?php get_template_part( 'template-parts/content', 'single-story-origin' ); ?>

		<?php elseif ( is_single( $story = 'vision' ) ) : ?>
			<?php get_template_part( 'template-parts/content', 'single-story-vision' ); ?>

		<?php elseif ( is_single( $story = 'heritage' ) ) : ?>
			<?php get_template_part( 'template-parts/content', 'single-story-heritage' ); ?>

			

<?php endif; ?>

			<?php the_post_navigation(); ?>



		<?php endwhile; // End of the loop. ?>

<footer class="entry-footer">
	<?php get_footer(); ?>
</footer><!-- .entry-footer -->