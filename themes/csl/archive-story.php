<?php
/**
 * The template for displaying story archive.
 *
 * @package csl
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
			<?php
			// The Query
			$query1 = new WP_Query( array( 'slug' => 'one-house', 'post_type' => 'story' ) );
			
			if ( $query1->have_posts() ) {
				
				$query1->the_post();
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
			
			
				<?php if ( get_post_meta(get_the_ID(), '_story_team_member_group', true ) ) : ?>
				<div class="meta-data">
			
			<?php 
			
			// $array_length = count( $team_member_group );
			// d($array_length);
			// d( $team_member_group[0]['_story_name'] ); 
			
				$team_member_group = get_post_meta( get_the_ID(), '_story_team_member_group', true );
			?>
			
			
					<h2>Meet our Team</h2>
			<?php
				foreach( $team_member_group as $team_member ){
					if(isset($team_member['_story_name'])){ ?>
			
					<h3><?php echo ( $team_member['_story_name'] ); ?></h3>
					<p><?php echo ( $team_member['_story_title'] ); ?></p>
					<p><?php echo ( $team_member['_story_member_description'] ); ?></p>
					<div class="team-member-image"><img src="<?php echo ( $team_member['_story_member_image'] ); ?>" alt="Team member image" />
					</div>
					<?php
					}
				}
			
			?>
						<?php endif; ?>
			
				
			
			
				</div>
			</article><!-- #post-## -->
			<?php
				/* Restore original Post Data 
				 * NB: Because we are using new WP_Query we aren't stomping on the 
				 * original $wp_query and it does not need to be reset with 
				 * wp_reset_query(). We just need to set the post data back up with
				 * wp_reset_postdata().
				 */
				wp_reset_postdata();
			}
			
			/* The 2nd Query (without global var) */
			$query2 = new WP_Query( array( 'name' => 'heritage' ) );
			
			if ( $query2->have_posts() ) {
				// The 2nd Loop
				while ( $query2->have_posts() ) {
					$query2->the_post();
					echo '<li>' . get_the_title( $query2->post->ID ) . '</li>';
				}
			
				// Restore original Post Data
				wp_reset_postdata();
			}

			?><?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
