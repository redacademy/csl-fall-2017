<?php
/**
 * Template part for displaying posts.
 *
 * @package CSL_Theme
 */

?>

<?php $news_url = get_post_meta( get_the_ID(), '_article_url', true); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>style="background-image: url(<?php 
			$news_article_image_url = wp_get_attachment_url( get_post_meta( get_the_ID(), '_article_image_id', 1 ), 'medium' );
			echo $news_article_image_url;
			?>);">
	<a href="<?php echo $news_url ?>">
			<h2 class="article-title"><?php the_title(); ?></h2>
	</a>
</article><!-- #post-## -->