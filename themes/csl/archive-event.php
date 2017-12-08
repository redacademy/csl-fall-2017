<?php


get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

	<?php if ( have_posts() ) : ?>
		<?php	$alt_title = get_post_meta( get_the_ID(), '_event_alt_title', true ); ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>style="background-image: url(<?php the_post_thumbnail_url( )?>);">
			
			<!-- .entry-header -->

			<div class="entry-title">
				<h2 class="title"><?php the_title(); ?>
					<?php if ( $alt_title ) : ?>
					<span class="alt-title"><?php echo $alt_title ?></span>
					<?php endif; ?>
				</h2>
			</div><!-- .entry-title -->
		</article><!-- #post-## -->
	<?php endwhile; ?>


	<?php else : ?>

		<?php get_template_part( 'template-parts/content', 'none' ); ?>

	<?php endif; ?>

	</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>
