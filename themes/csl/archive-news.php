<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */
get_header('desktop');
get_header(); ?>

<<<<<<< HEAD
	<?php if(have_posts()): ?>

  

		<?php while ( have_posts() ) : the_post(); ?>

   
			<?php get_template_part( 'template-parts/content-news' ); ?>
      
			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>
			<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->
=======
  <h2>In The News</h2>
  
<?php	$news_query = new WP_Query( array( 
  'post_type' => 'news', 
  'posts_per_page' => 8 
));?>

<?php if ($news_query -> have_posts()):  while ( $news_query->have_posts() ) : $news_query -> the_post(); ?>
    
  <?php $news_url = get_post_meta( get_the_ID(), '_article_url', true); ?>

  <h3><?php the_title(); ?></h3>
	
	<div class="news-archive-image-wrapper">
	  <a href="<?php echo $news_url ?>">
		  <?php $news_article_image = wp_get_attachment_image( get_post_meta( get_the_ID(), '_article_image_id', 1 ), 'medium' );
      echo $news_article_image;
      ?></a>
	</div>

<?php endwhile; ?>
<?php endif; ?>
>>>>>>> 3530f08ece7a6256ad936a0a4fc5262775b7f691

<?php get_sidebar(); ?>
<?php get_footer(); ?>