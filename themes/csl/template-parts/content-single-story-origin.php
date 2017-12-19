<?php
/**
 * Template part for displaying Story - Origin posts.
 *
 * @package CSL_Theme
 */
 ?>

<?php 

  $origin_secondary_image = wp_get_attachment_image( get_post_meta( get_the_ID(), '_story_origin_image_id', 1 ), 'medium-large' );

?>

<article class="origin-container">
	<div class="hash-holder" id="origin"></div>
	<header class="entry-header">
		
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->

	<section class="origin-wrapper">
		<div class="origin-featured-image">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'medium-large' ); ?>
			<?php endif; ?>
		</div>


		<div class="entry-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->

		<div class="origin-image-two">
      <?php echo $origin_secondary_image; ?>
    </div>
	</section>
</article>
  