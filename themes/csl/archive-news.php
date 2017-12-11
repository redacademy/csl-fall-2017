<?php

get_header('desktop');
get_header(); ?>

<<<<<<< HEAD
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
=======
		<div id="primary">
			<div id="content" role="main">
			<h2>In the News</h2>
			<?php if(have_posts()): ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'news' ); ?>


				<?php endwhile; // End of the loop. ?>
			<?php else : ?>
						
				<?php get_template_part( 'template-parts/content', 'none' ); ?>
		
			<?php endif; ?>
			<a class="twitter-timeline" href="https://twitter.com/cultrsaveslives?ref_src=twsrc%5Etfw">Tweets by cultrsaveslives</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
>>>>>>> 1b3a012732abaed0964a2b3fcedafeed137b9de8

<?php get_footer(); ?>