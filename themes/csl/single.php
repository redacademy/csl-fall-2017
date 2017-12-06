<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
	<div class="contact-info">
		<?php /*  add other contact info here		 */?>
		<h1><?php echo get_theme_mod( 'title_value' ); ?></h1>
		<p><?php echo get_theme_mod( 'content_value' ); ?></p>		
		<p><?php echo get_theme_mod( 'address_value' ); ?></p>
		<p><?php echo get_theme_mod( 'date_value' ); ?></p>
	</div>




	
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
