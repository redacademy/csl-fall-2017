<?php
/**
 * Template part for displaying single posts.
 *
 * @package QOD_Starter_Theme
 */



//  $team_member_name = get_post_meta( get_the_ID(), '_story_team_member_group_name', true );

//  $team_member_title = get_post_meta( get_the_ID(), '_story_title', true );

//  $team_member_description = get_post_meta( get_the_ID(), '_story_description', true );


 ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

  <div class="meta-data">

<?php 

$array_length = count( $vision_secondary_image );
d($array_length);
d( $vision_secondary_image[0]['_story_vision_image'] ); 


  $vision_secondary_image = wp_get_attachment_image( get_post_meta( get_the_ID(), '_story_vision_image', 1 ), 'medium' );

?>

    <div class="vision-image"><img src="<?php echo ( $vision_secondary_image['_story_vision_image'] ); ?>" alt="Vision secondary image" />
    </div>

		

</div>
</article>