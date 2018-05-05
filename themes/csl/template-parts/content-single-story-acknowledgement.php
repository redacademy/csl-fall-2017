<?php
/**
 * Template part for displaying single posts.
 *
 * @package CSL_Theme
 */
?>

  <?php
    $acknowledgement_secondary_image = wp_get_attachment_image( get_post_meta( get_the_ID(), '_story_acknowledgement_image_id', 1 ), 'medium-large' );
  ?>

<article class="acknowledgement-container"> 
  <div class="hash-holder" id="acknowledgement"></div>

  <header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  </header><!-- .entry-header -->
  
  <section class="acknowledgement-wrapper">
    
    <div class="acknowledgement-featured-image acknowledgement-images">
      <?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail( 'medium' ); ?>
      <?php endif; ?>
    </div><!-- feature-image -->

    <div class="entry-content">
      <?php the_content(); ?>
    </div><!-- .entry-content -->


    <div class="acknowledgement-image-two acknowledgement-images">
      <?php echo $acknowledgement_secondary_image; ?>
    </div>

  </section>
</article>