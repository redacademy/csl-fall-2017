<?php
/**
 * Template Name: Contact Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

    <div class="entry-content">
          <div class="contact-page-contact-info">
						<p><?php echo get_theme_mod( 'title_value' ); ?></p>		
						<p><?php echo get_theme_mod( 'address_value' ); ?></p>
						<p><?php echo get_theme_mod( 'province_value' ); ?></p>
						<div class="contact-weekday-hours">
							<p><?php echo get_theme_mod( 'weekdays_value' ); ?></p>
							<p><?php echo get_theme_mod( 'weekday_hours_value' ); ?></p>
						</div>	
						<div class="contact-weekend-hours">
						<p><?php echo get_theme_mod( 'weekend_value' ); ?></p>
							<p><?php echo get_theme_mod( 'weekend_hours_value' ); ?></p>
            </div>
            <div class="contact-additional-info">
              <?php echo get_theme_mod( 'content_value' );?>
            </div>  
					</div>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>
        <div class="social-info">
          <p>Stay Connected</p>
          <a><?php echo '<i class="fa fa-facebook-square" aria-hidden="true"></i>' ?>facebook</a>
          <a><?php echo '<i class="fa fa-twitter" aria-hidden="true"></i>' ?>twitter</a>
          <img src="<?php echo get_template_directory_uri() . '/images/eagle1.svg'; ?>" class="eagle-logo" alt="eagle logo" />
        </div>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
