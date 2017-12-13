<?php
/**
 * Template part for displaying single posts.
 *
 * @package Culture_Saves_Lives_Theme
 */

 ?>

<?php 

  $vision_secondary_image = wp_get_attachment_image( get_post_meta( get_the_ID(), '_story_vision_image_id', 1 ), 'large' );

?>

<article id="post-<?php the_ID(); ?>" class="vision-container">

<section class="vision-wrapper">
<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->



    <div class="entry-content">
      <?php the_content(); ?>
    </div><!-- .entry-content -->

    <div class="vision-featured-image vision-image">
      <?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail( 'large' ); ?>
      <?php endif; ?>
    </div>
    
    <div class="vision-image-two vision-image">
      <?php echo $vision_secondary_image; ?>
    </div>

  </section>
</article>