<?php
/**
 * Template part for displaying single posts.
 *
 * @package Culture_Saves_Lives_Theme
 */

 ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
  <div class="featured-image">
    <?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'medium' ); ?>
    <?php endif; ?>
  </div>

  <div class="meta-data">

<?php 

  $vision_secondary_image = wp_get_attachment_image( get_post_meta( get_the_ID(), '_story_vision_image_id', 1 ), 'medium' );

  echo $vision_secondary_image;
?>

</div>
</article>