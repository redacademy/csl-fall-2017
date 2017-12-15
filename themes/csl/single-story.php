<?php
/**
 * Template for displaying Story single-posts.
 *
 * @package CSL_Theme
 */

 get_header(); ?>
 <div id="primary" class="content-area">

      <ul class="sub-nav">
        <li><a href="<?php echo home_url() ?>/story/#one-house">One-House</a></li>
        <li><a href="<?php echo home_url() ?>/story/#origin">Origin</a></li>
        <li><a href="<?php echo home_url() ?>/story/#vision">Vision</a></li>
        <li><a href="<?php echo home_url() ?>/story/#heritage">Heritage</a></li>
			</ul>
		

		<?php if ( have_posts() ) : ?>

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

		<?php endwhile; // End of the loop. ?>
	<?php else : ?>
		
		<?php get_template_part( 'template-parts/content', 'none' ); ?>

	<?php endif; ?>
</div>

<?php get_footer(); ?>
