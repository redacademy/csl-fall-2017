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

				<div class= "hero-container">
					<img src="<?php echo get_template_directory_uri() . '/images/csl-text.svg'; ?>" alt="hero-image">
				</div>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post() ; ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<h2><?php the_title(); ?></h2>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
<?php endwhile; ?>
<?php endif; ?>


		<?php	$news_query = new WP_Query( array( 
			'post_type' => 'news',
			'posts_per_page' => 3  
			));
		?>
<section class="front-page-news">

		<h2>In The News</h2>
		
<!-- start of the loops -->
<?php if ($news_query -> have_posts()): ?>


		<?php while ( $news_query -> have_posts() ) : $news_query -> the_post(); ?>


		<?php $news_url = get_post_meta( get_the_ID(), '_article_url', true); ?>

	<h3><?php the_title(); ?></h3>

	<div class="news-archive-image-wrapper">
		<a href="<?php echo $news_url ?>">
			<?php 
			$news_article_image = wp_get_attachment_image( get_post_meta( get_the_ID(),
			 '_article_image_id', 1 ), 'medium' );
			echo $news_article_image; 
			?>
		</a>
	</div>

	<?php endwhile; ?>

	<a href="/csl/news">
		<img src="<?php echo get_template_directory_uri() . '/images/teal-button.png'; ?>" alt="see more button">
	</a>
</section>


<?php endif; ?>
<!-- end of the loops -->
	

<?php get_footer(); ?>
