<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					// the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

      <?php /* Start the Loop */
			

			$args = array( 'posts_per_page' => 10, 'orderby' => 'rand');
			$story = get_posts( $args );

			foreach ( $story as $post ) : setup_postdata( $post ); ?>
			
			<?php get_template_part( 'template-parts/content-story-one' ); ?>

			<?php endforeach; 
			wp_reset_postdata();?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
