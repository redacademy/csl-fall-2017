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
        <li><a href="#origin">Origin</a></li>
        <li><a href="#vision">Vision</a></li>
        <li><a href="#heritage">Heritage</a></li>
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
					$origin_query = new WP_Query( array( 'name' => 'origin', 'post_type' => 'story', 'post_per_page' => 1  ) );
				if ($origin_query -> have_posts() ) {
					
						$origin_query -> the_post(  );
						get_template_part( 'template-parts/content-single-story-origin');
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
					$heritage_query = new WP_Query( array( 'name' => 'heritage', 'post_type' => 'story', 'post_per_page' => 1  ) );
				if ($heritage_query -> have_posts() ) {
					
						$heritage_query -> the_post();
						get_template_part( 'template-parts/content-single-story-heritage');
					}
					wp_reset_postdata();
				?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
