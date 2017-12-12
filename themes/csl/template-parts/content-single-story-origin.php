<?php
/**
 * Template part for displaying Story - Origin posts.
 *
 * @package CSL_Theme
 */
 ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		
		<div class="entry-title">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>

		<div class="origin-image">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'medium-large' ); ?>
			<?php endif; ?>
		</div>

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article>
  