<?php
/**
 * Template part for displaying Story - Origin posts.
 *
 * @package CSL_Theme
 */
 ?>

<article id="post-<?php the_ID(); ?>" class="origin-container">
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
	</section>
</article>
  