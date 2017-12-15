<?php
/**
 * Template part for displaying single posts.
 *
 * @package CSL_Theme
 */
 ?>

<?php 

  $vision_secondary_image = wp_get_attachment_image( get_post_meta( get_the_ID(), '_story_vision_image_id', 1 ), 'medium-large' );

?>

<?php if ( is_single( 'vision' ) ) : ?>

  <ul class="sub-nav">
    <li><a href="/csl/story/#one-house">One-House</One-House></a></li>
    <li><a href="/csl/story/#origin">Origin</a></li>
    <li><a href="/csl/story/#vision">Vision</a></li>
    <li><a href="/csl/story/#heritage">Heritage</a></li>
  </ul>
  
<?php endif; ?>

<article id="vision" class="vision-container">

  <header class="entry-header vision-mobile">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

  <section class="vision-wrapper-desktop">
    <div class="desktop-content-wrapper">
      <header class="entry-header vision-desktop">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
      </header><!-- .entry-header -->

      <div class="entry-content-desktop vision-desktop">
        <?php the_content(); ?>
      </div><!-- Desktop entry-content -->
    </div>
    <section class="vision-wrapper vision-wrapper-mobile">

    <div class="vision-featured-image vision-image">
      <?php if ( has_post_thumbnail() ) : ?>
        <?php the_post_thumbnail( 'medium-large' ); ?>
      <?php endif; ?>
    </div>

    <div class="entry-content vision-mobile">
      <?php the_content(); ?>
    </div><!-- Mobile entry-content -->
    
    <div class="vision-image-two vision-image">
      <?php echo $vision_secondary_image; ?>
    </div>
    </section>
  </section>
</article>