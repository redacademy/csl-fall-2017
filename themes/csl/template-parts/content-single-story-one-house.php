<?php
/**
 * Template part for displaying Story - One House post.
 *
 * @package CSL_Theme
 */
 ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php 
    $alt_title = get_post_meta( get_the_ID(), '_story_alt_title', true ); 
    $team_member_group = get_post_meta( get_the_ID(), '_story_team_member_group', true ); 
  ?>

  <header class="entry-header">
    
    <h1 class="story__one-house-title">
      <?php the_title() ?>
      <span class="story__one-house-alt-title"><?php echo $alt_title ?></span> 
    </h1>

    <?php if ( has_post_thumbnail() ) : ?>
			<div class="story__one-house-hero">
        <?php the_post_thumbnail( 'large' ); ?>
      </div>
    <?php endif; ?>
    
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

  <?php if ( get_post_meta(get_the_ID(), '_story_team_member_group', true ) ) : ?>
  
  <section class="meet-our-team">

    <?php ?>

    <div class="our-team-title">
      <h2>Meet our Team</h2>
    </div>

    <?php
      foreach( $team_member_group as $team_member ){
        if(isset($team_member['_story_name'])){ ?>
      <?php  $team_member_image = wp_get_attachment_image( $team_member['_story_member_image_id'], 'medium' ); ?>
        <section class="team-member">
          <div class="team-member__image">
            <?php echo $team_member_image; ?>
          </div>
          <h3 class="team-member__name" ><?php echo ( $team_member['_story_name'] ); ?></h3>

          <h3 class="team-member__title"><?php echo ( $team_member['_story_title'] ); ?></h3>

          <p class="team_member__description"><?php echo ( $team_member['_story_member_description'] ); ?></p>
        </section>
    <?php
        }
      }
    ?>
		<?php endif; ?>
  
  </section>
</article><!-- #post-## -->
