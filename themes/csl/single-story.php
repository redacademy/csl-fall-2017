<?php

get_header(); ?>



		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single-story' ); ?>

			<?php the_post_navigation(); ?>



		<?php endwhile; // End of the loop. ?>

<footer class="entry-footer">
	<?php get_footer(); ?>
</footer><!-- .entry-footer -->