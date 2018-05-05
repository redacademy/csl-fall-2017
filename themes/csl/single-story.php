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
        <li><a href="<?php echo home_url() ?>/story/#movement">Movement</a></li>
        <li><a href="<?php echo home_url() ?>/story/#vision">Vision</a></li>
        <li><a href="<?php echo home_url() ?>/story/#acknowledgement">Acknowledgement</a></li>
			</ul>
		

		<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<?php if ( is_single( $story = 'one-house' ) ) : ?>
			
				<?php get_template_part( 'template-parts/content', 'single-story-one-house' ); ?>

			<?php elseif ( is_single( $story = 'movement' ) ) : ?>
				<?php get_template_part( 'template-parts/content', 'single-story-movement' ); ?>

			<?php elseif ( is_single( $story = 'vision' ) ) : ?>
				<?php get_template_part( 'template-parts/content', 'single-story-vision' ); ?>

			<?php elseif ( is_single( $story = 'acknowledgement' ) ) : ?>
				<?php get_template_part( 'template-parts/content', 'single-story-acknowledgement' ); ?>

			<?php endif; ?>

		<?php endwhile; // End of the loop. ?>
	<?php else : ?>
		
		<?php get_template_part( 'template-parts/content', 'none' ); ?>

	<?php endif; ?>
</div>

<?php get_footer(); ?>
