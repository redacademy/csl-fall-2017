<?php
/**
 * The main template file.
 *
 * @package CSL_Theme
 */

get_header(); ?>


<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		
		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

				<div class= "hero-container"<?php if ( is_page('home-feature') ) : 
						echo 'style="background: url(' . "'" . wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' )[0] . "')" . '"';
						endif;
						?>>
					
						
					
						<img src="<?php echo get_template_directory_uri() . '/images/csl-text.svg'; ?>" alt="hero-image">
				</div>

	<section class="desktop-bg">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post() ; ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="mission-eagles">
			<img src="<?php echo get_template_directory_uri() . '/images/eagle2.svg'; ?>" alt="eagle left" class="eagle-left">
			<header class="entry-header">
			
				<h2><?php the_title(); ?></h2>

			</header><!-- .entry-header -->
			<img src="<?php echo get_template_directory_uri() . '/images/eagle1.svg'; ?>" alt="eagle right" class="eagle-right">
    </div>
			<div class="entry-content">
				<?php the_excerpt(); ?>
			</div><!-- .entry-content -->
		</article><!-- #post-## -->
	<?php endwhile; ?>
	<?php endif; ?>

<?php $args = array(
	'posts_per_page'   => 3,
	'orderby'          => 'date',
	'order'            => 'DESC',
	'post_type'        => 'news',
);
$news_posts = get_posts( $args ); ?>

<section class="front-page-news">

		<h2>In The News</h2>

		<section class="front-page-news-gallery">

<?php foreach ( $news_posts as $post ) : setup_postdata( $post ); ?>


	<!-- start of the loops -->
	

		<?php $news_url = get_post_meta( get_the_ID(), '_article_url', true); ?>
		
		<div class="news-archive-image-wrapper">
		<?php if ( has_post_thumbnail() ): ?>
	<?php ( the_post_thumbnail('medium') ); ?>
	<?php endif; ?>
		<a href="<?php echo $news_url ?>">
		<h3><?php the_title(); ?></h3>

					<?php 
					$news_article_image = wp_get_attachment_image( get_post_meta( get_the_ID(), '_article_image_id', 1 ), 'medium' );
					echo $news_article_image; 
					?>
				</a>
		</div>
		
	
	<?php endforeach; wp_reset_postdata(); ?>
	</section>
	</section>
	


	


	<!-- end of the loops -->

		<div class="front-page-see-more">
			<a href="<?php echo get_post_type_archive_link( 'news' ); ?>" class="front-page-button">
				<img src="<?php echo get_template_directory_uri() . '/images/white-button.png'; ?>" alt="see more button">
				<span class="see-more">See More</span>
			</a>
		</div>
	</section> <!-- Desktop Background -->
<?php get_footer(); ?>
