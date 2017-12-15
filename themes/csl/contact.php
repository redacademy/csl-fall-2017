<?php
/**
 * Template Name: Contact Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="alert-container">
        <div class="info-alert alert-box-success">
            <p class="info-alert-text">
						Thank you for reaching out to us. We will get back to you as soon as possible!
						In the meantime check out some of our past events.
            </p>
						<a href="<?php echo get_term_link( 'gallery','event_type' ); ?>" class="gallery-button">
							<img src='<?php echo get_template_directory_uri() . '/images/yellow-button.png'; ?>'>
								<p>Gallery</p>
				    </a>
        </div>
    </div>  
    <div class="entry-content">
          <div class="contact-page-contact-info">
						<p><?php echo get_theme_mod( 'title_value' ); ?></p>
						<div class="contact-additional-info">
              <?php echo get_theme_mod( 'content_value' );?>
            </div>  
						<div class="address-province">		
							<p><?php echo get_theme_mod( 'address_value' ); ?></p>
							<p><?php echo get_theme_mod( 'province_value' ); ?></p>
						</div>	
						<div class="contact-weekday-hours">
							<p><?php echo get_theme_mod( 'weekdays_value' ); ?></p>
							<p><?php echo get_theme_mod( 'weekday_hours_value' ); ?></p>
						</div>	
						<div class="contact-weekend-hours">
						<p><?php echo get_theme_mod( 'weekend_value' ); ?></p>
							<p><?php echo get_theme_mod( 'weekend_hours_value' ); ?></p>
            </div>
					</div>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_sidebar(); ?>
				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
