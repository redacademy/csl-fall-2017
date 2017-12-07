<?php
/**
 * 
 *Template Name: Contact
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
    
			<?php while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header class="entry-header">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
          </header><!-- .entry-header -->
        
          <div class="entry-content">
          <div class="contact-page-contact-info">
						<p><?php echo get_theme_mod( 'title_value' ); ?></p>		
						<p><?php echo get_theme_mod( 'address_value' ); ?></p>
						<p><?php echo get_theme_mod( 'province_value' ); ?></p>
						<div class="weekday-hours">
							<p><?php echo get_theme_mod( 'weekdays_value' ); ?></p>
							<p><?php echo get_theme_mod( 'weekday_hours_value' ); ?></p>
						</div>	
						<div class="weekend-hours">
						<p><?php echo get_theme_mod( 'weekend_value' ); ?></p>
							<p><?php echo get_theme_mod( 'weekend_hours_value' ); ?></p>
						</div>
            <?php echo get_theme_mod( 'content_value' );?>
					</div>
            <?php the_content(); ?>

          </div><!-- .entry-content -->
        </article><!-- #post-## -->
			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

