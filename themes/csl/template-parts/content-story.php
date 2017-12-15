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
			<div class="story-wrapper">
				<div class="products-archive-image-wrapper">
				<a href="<?php echo the_permalink()?>"><?php the_post_thumbnail('large');?></a>
				</div>
				<div class="products-archive-text-wrapper">
					<h3 class="entry-title">
						<?php the_title();?>
					</h3>
	
				</div>
			</div>
		<?php endforeach; wp_reset_postdata(); ?> 

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</div><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article>#post-##
