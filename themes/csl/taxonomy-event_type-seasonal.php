<?php
/**
 * The template for displaying product archive page.
 *
 *
 * @package inhabitent_Theme
 */
get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			<?php
			$alt_title = get_post_meta( get_the_ID(), '_event_alt_title', true );
			$location = get_post_meta( get_the_ID(), '_event_location', true );
			$date = get_post_meta( get_the_ID(), '_event_date', true );
			$time = get_post_meta( get_the_ID(), '_event_time', true );
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>style="background-image: url(<?php the_post_thumbnail_url( )?>);">
				
				<!-- .entry-header -->

				<div class="entry-title">
					<span class="title"><?php the_title(); ?></span>
					<?php if ( $alt_title ) : ?>
					<span class="alt-title"><?php echo $alt_title ?></span>
					<?php endif; ?>
				</div><!-- .entry-title -->
				<div class="entry-content">
					<?php if ( $time ) : ?>
					<span class="time"><?php echo ltrim($time, '0' ); ?></span>
					<?php endif; ?>
					<?php if ( $location ) : ?>
					<span class="location"><?php echo $location ?></span>
					<?php endif; ?>
					<div class="content"><?php the_content(); ?></div>
				</div><!-- .entry-content -->
        <div class="img-wrapper">
          
        </div>
			</article><!-- #post-## -->
			<?php endwhile; ?>


		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>