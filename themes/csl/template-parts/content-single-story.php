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

// $array_length = count( $team_member_group );
// d($array_length);
// d( $team_member_group[0]['_story_name'] ); 

  $team_member_group = get_post_meta( get_the_ID(), '_story_team_member_group', true );



  foreach( $team_member_group as $team_member ){
    if(isset($team_member['_story_name'])){ ?>
    <h2><?php echo ($team_member['_story_name']); ?></h2>
    <p><?php echo ( $team_member['_story_title']); ?></p>
    <p><?php echo ($team_member['_story_member_description']); ?></p>
    <div class="team-member-image"><img src="<?php echo ( $team_member['_story_member_image']); ?>" alt="Team member image" />
    </div>
    <?php
    }
  }

?>

<?php echo ( $team_member_name ); ?>

<h3><?php echo ( $team_member_title); ?> </h3>

  


  </div>
</article><!-- #post-## -->
