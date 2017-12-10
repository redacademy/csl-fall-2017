<?php
/**
 * The template for displaying product archive page.
 *
 *
 * @package inhabitent_Theme
 */
get_header('desktop');
get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : while ( have_posts() ) : the_post();

				$alt_title = get_post_meta( get_the_ID(), '_event_alt_title', true );
				$location = get_post_meta( get_the_ID(), '_event_location', true );
				$days = get_post_meta( get_the_ID(), '_event_day', true );
				$s_time = get_post_meta( get_the_ID(), '_event_start_time', true );
				$e_time = get_post_meta( get_the_ID(), '_event_end_time', true );
				$icon = wp_get_attachment_image( get_post_meta( get_the_ID(), '_event_icon_id', 1 ), 'thumbnail' );
				?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>style="background-image: url(<?php the_post_thumbnail_url( )?>);">
					
					<!-- .entry-header -->

					<div class="entry-title">
						<h2 class="title"><?php the_title(); ?>
							<?php if ( $alt_title ) : ?>
							<span class="alt-title"><?php echo $alt_title ?></span>
							<?php endif; ?>
						</h2>
					</div><!-- .entry-title -->
					<div class="entry-content">
						<?php if ( $s_time ) : ?>
						<span class="time"><?php 
						echo strtolower( str_replace( ' ', '', ltrim($s_time, '0' ) ) ); 
						if ( $e_time ) {
							echo ' - ' . strtolower( str_replace( ' ', '', ltrim($e_time, '0' ) ) );
						}
						?></span>
						<?php endif; ?>
						<?php if ( $days ) : ?>
						<span class="days">
						<?php
							echo short_days( $days );
						?>
						</span>

						<?php endif; ?>
						<?php if ( $icon ) : ?>
						<div class="icon">
							<?php echo $icon ?>
						</div>
						<?php endif; ?>
						<?php if ( $location ) : ?>
						<span class="location"><?php echo $location ?></span>
						<?php endif; ?>
						<div class="content"><?php the_content(); ?></div>
					</div><!-- .entry-content -->
				</article><!-- #post-## -->
				<?php endwhile; ?>
				
			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>