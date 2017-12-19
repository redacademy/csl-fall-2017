<?php
/**
 * The template for displaying product archive page.
 *
 *
 * @package CSL_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<ul class="sub-nav">
			<li class="current-event-page"><a href="<?php  echo get_term_link( 'seasonal', 'event_type' ) ?>">Seasonal</a></li>
			<li><a href="<?php echo get_term_link( 'weekly', 'event_type' ) ?>">Weekly</a></li>
		</ul>
		<main id="main" class="site-main owl-seasonal owl-carousel owl-theme" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			<?php
			$alt_title = get_post_meta( get_the_ID(), '_event_alt_title', true );
			$location = get_post_meta( get_the_ID(), '_event_location', true );
			$date = get_post_meta( get_the_ID(), '_event_date', true );
			$s_time = get_post_meta( get_the_ID(), '_event_start_time', true );
			$e_time = get_post_meta( get_the_ID(), '_event_end_time', true );
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'owl-lazy' ); ?> data-src="<?php 
			if ( has_post_thumbnail( ) ) {
				the_post_thumbnail_url( );
			} else {
				echo get_template_directory_uri() . '/images/nature-background1.png';
			}
			
			?>">
				<div class="entry-wrapper">
					<div class="entry-title">
						<h2 class="title"><?php the_title(); ?>
							<?php if ( $alt_title ) : ?>
							<span class="alt-title">[<?php echo $alt_title ?>]</span>
							<?php endif; ?>
						</h2>
					</div><!-- .entry-title -->
					<div class="entry-content">
						<?php if ( $date ) : ?>
						<span class="date"><?php 
						$date = explode( '/', $date);
						echo date('F jS, Y', mktime(0, 0, 0, $date[0], $date[1], $date[2]));
						?></span>
						<?php endif; ?>
						<?php if ( $s_time ) : ?>
						<span class="time"><?php 
						echo strtolower( str_replace( ' ', '', ltrim($s_time, '0' ) ) ); 
						if ( $e_time ) {
							echo ' - ' . strtolower( str_replace( ' ', '', ltrim($e_time, '0' ) ) );
						}
						?></span>
						<?php endif; ?>
						<?php if ( $location ) : ?>
						<span class="location"><?php echo $location ?></span>
						<?php endif; ?>
						<div class="content"><?php echo seasonal_content(180); ?></div>
					</div><!-- .entry-content -->
				</div>
			</article><!-- #post-## -->
		<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar('event');?>
		

<?php get_footer(); ?>