<?php
/**
 * Template part for displaying single posts.
 *
 * @package CSL_Theme
 */

$alt_title = get_post_meta( get_the_ID(), '_event_alt_title', true ); ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>style="background-image: url(<?php the_post_thumbnail_url( 'medium-large' )?>);">
    
    <!-- .entry-header -->
    <a href="<?php echo get_permalink()?>">
      <div class="entry-title">
        <h2 class="title"><?php the_title(); ?>
          <?php if ( $alt_title ) : ?>
          <span class="alt-title"><?php echo $alt_title ?></span>
          <?php endif; ?>
        </h2>
      </div><!-- .entry-title -->
    </a>
  </article><!-- #post-## -->