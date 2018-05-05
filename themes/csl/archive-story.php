<?php
/**
 * The template for displaying Story archive.
 *
 * @package CSL_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">

      <ul class="sub-nav">
        <li><a href="#one-house">One-House</One-House></a></li>
        <li><a href="#movement">Movement</a></li>
        <li><a href="#vision">Vision</a></li>
        <li><a href="#acknowledgement">Acknowledgement</a></li>
      </ul>

		<main id="main" class="site-main" role="main">

			<?php
					$one_house_query = new WP_Query( array( 'name' => 'one-house', 'post_type' => 'story', 'post_per_page' => 1  ) );
				if ($one_house_query -> have_posts() ) {
					
						$one_house_query -> the_post();
						get_template_part( 'template-parts/content-single-story-one-house');
					}
					wp_reset_postdata();
				?>

			<?php
					$movement_query = new WP_Query( array( 'name' => 'movement', 'post_type' => 'story', 'post_per_page' => 1  ) );
				if ($movement_query -> have_posts() ) {
					
						$movement_query -> the_post(  );
						get_template_part( 'template-parts/content-single-story-movement');
					}
					wp_reset_postdata();
				?>

			<?php
					$vision_query = new WP_Query( array( 'name' => 'vision', 'post_type' => 'story', 'post_per_page' => 1  ) );
				if ($vision_query -> have_posts() ) {
					
						$vision_query -> the_post();
						get_template_part( 'template-parts/content-single-story-vision');
					}
					wp_reset_postdata();
				?>

			<?php
					$acknowledgement_query = new WP_Query( array( 'name' => 'acknowledgement', 'post_type' => 'story', 'post_per_page' => 1  ) );
				if ($acknowledgement_query -> have_posts() ) {
					
						$acknowledgement_query -> the_post();
						get_template_part( 'template-parts/content-single-story-acknowledgement');
					}
					wp_reset_postdata();
				?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
