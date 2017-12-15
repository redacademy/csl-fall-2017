<?php
/**
 * Template part for displaying Story - One House post.
 *
 * @package CSL_Theme
 */
 ?>

  <?php 
    $alt_title = get_post_meta( get_the_ID(), '_story_alt_title', true ); 
    
    $team_member_group = get_post_meta( get_the_ID(), '_story_team_member_group', true ); 
    
    if ( $one_house_hero = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium-large' ) ) :
  ?>


<article class="one-house-container">
  <div class="hash-holder" id="one-house"></div>
  <header class="entry-header">
  
    <h1 class="one-house-title-mobile"> <!-- mobile title -->
      <?php the_title() ?>
      <span class="alt-title"><?php echo $alt_title ?></span> 
    </h1>

    <div role="image" class="one-house-hero" aria-label="<?php echo get_post_meta(get_post_thumbnail_id( $post->ID ), '_wp_attachment_image_alt', true); ?>" style="background: url('<?php echo $one_house_hero[0]; ?>');"> 
    
      <div class="one-house-wrapper-desktop">

        <h1 class="one-house-title-desktop"> <!-- desktop title -->
          <?php the_title() ?>
          <span class="alt-title"><?php echo $alt_title ?></span> 
        </h1>

        <div class="entry-content-desktop"> <!-- desktop content -->
          <?php the_content(); ?>
        </div><!-- .entry-content -->

      </div>

    </div>

  <?php endif; ?>
  
	</header><!-- .entry-header -->
  <section class="one-house-content-wrapper">
    <div class="entry-content-mobile entry-content"> <!-- mobile content -->
      <?php the_content(); ?>
    </div><!-- .entry-content -->
   

    <?php if ( get_post_meta(get_the_ID(), '_story_team_member_group', true ) ) : ?>
    
      <?php $team_member_group = get_post_meta( get_the_ID(), '_story_team_member_group', true ); ?>
    <section class="meet-our-team-wrapper">
      <div class="meet-our-team-title">
        <h2>Meet our Team</h2>
      </div>
    <section class="meet-our-team">
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

            <p class="team-member__description"><?php echo ( $team_member['_story_member_description'] ); ?></p>
          </section>
      <?php
          }
        }
      ?>
      <?php endif; ?>
    </section>
    </section>
  </section>
</article><!-- #post-## -->
