<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-header">

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>


<?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
			<div class="news-wrapper">
				<div class="news-archive-image-wrapper">
				<a href="<?php echo the_permalink()?>"><?php the_post_thumbnail('large');?></a>
				</div>
				<div class="news-archive-text-wrapper">
					
				</div>
			</div>
		<?php endforeach; wp_reset_postdata(); ?> 
		
	</div><!-- .entry-header -->


</article><!-- #post-## -->