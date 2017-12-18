<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">


				<div class="page-content">
				<h1 class="page-title"><?php echo esc_html( 'Oops! That page can&rsquo;t be found.' ); ?></h1>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="home-button">
					Home
					</a>
					<img src="<?php echo get_template_directory_uri() . '/images/eagle2.svg'; ?>" alt="eagle left" class="eagle-one">
					<img src="<?php echo get_template_directory_uri() . '/images/eagle1.svg'; ?>" alt="eagle right" class="eagle-two">

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
