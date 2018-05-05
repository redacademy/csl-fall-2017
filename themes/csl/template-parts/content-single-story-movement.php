<?php
/**
 * Template part for displaying Story - movement posts.
 *
 * @package CSL_Theme
 */
 ?>

<?php 

	$movement_secondary_image = wp_get_attachment_image( get_post_meta( get_the_ID(), '_story_movement_image_id', 1 ), 'medium-large' );

?>

<article class="movement-container">
	<div class="hash-holder" id="movement"></div>
	
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->

	<section class="movement-wrapper">
		
		<div class="movement-featured-image">
			
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'medium-large' ); ?>
			<?php endif; ?>
		</div>

		<div class="entry-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->

		<div class="movement-image-two">
      <?php echo ( $movement_secondary_image ); ?>"
		</div>
		
	</section>
</article>
  