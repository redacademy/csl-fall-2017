<?php
/**
 * Template part for displaying single posts.
 *
 * @package Culture_Saves_Lives_Theme
 */
?>

  <?php
    $heritage_secondary_image = wp_get_attachment_image( get_post_meta( get_the_ID(), '_story_heritage_image_id', 1 ), 'large' );
  ?>

<article id="post-<?php the_ID(); ?>" class="heritage-container">  

  <header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  </header><!-- .entry-header -->
  
  <section class="heritage-wrapper">
    
    <div class="heritage-featured-image heritage-images">
      <?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail( 'large' ); ?>
      <?php endif; ?>
    </div><!-- feature-image -->

    <div class="entry-content">
      <?php the_content(); ?>
    </div><!-- .entry-content -->


    <div class="heritage-image-two heritage-images">
      <?php echo $heritage_secondary_image; ?>
    </div>

  </section>
</article>