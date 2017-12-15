<?php
/**
 * Template part for displaying single posts.
 *
 * @package CSL_Theme
 */
?>

  <?php
    $heritage_secondary_image = wp_get_attachment_image( get_post_meta( get_the_ID(), '_story_heritage_image_id', 1 ), 'medium-large' );
  ?>

<?php if ( is_single( 'heritage' ) ) : ?>

  <ul class="sub-nav">
    <li><a href="/csl/story/#one-house">One-House</One-House></a></li>
    <li><a href="/csl/story/#origin">Origin</a></li>
    <li><a href="/csl/story/#vision">Vision</a></li>
    <li><a href="/csl/story/#heritage">Heritage</a></li>
  </ul>
  
<?php endif; ?>

<article id="heritage" class="heritage-container">  

  <header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  </header><!-- .entry-header -->
  
  <section class="heritage-wrapper">
    
    <div class="heritage-featured-image heritage-images">
      <?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail( 'medium-large' ); ?>
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