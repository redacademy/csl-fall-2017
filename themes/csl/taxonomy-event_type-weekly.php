<?php
/**
 * The template for displaying product archive page.
 *
 *
 * @package inhabitent_Theme
 */
get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			<?php
			$alt_title = get_post_meta( get_the_ID(), '_event_alt_title', true );
			$location = get_post_meta( get_the_ID(), '_event_location', true );
			$days = get_post_meta( get_the_ID(), '_event_day', true );
			$time = get_post_meta( get_the_ID(), '_event_time', true );
			$icon = wp_get_attachment_image( get_post_meta( get_the_ID(), '_event_icon_id', 1 ), 'thumbnail' );
			?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'medium_large' ); ?>
				<?php endif; ?>
				
				<!-- .entry-header -->

				<div class="entry-title">
					<span class="title"><?php the_title(); ?></span>
					<?php if ( $alt_title ) : ?>
					<span class="alt-title"><?php echo $alt_title ?></span>
					<?php endif; ?>
				</div><!-- .entry-title -->
				<div class="entry-content">
					<?php if ( $time ) : ?>
					<span class="time"><?php echo ltrim($time, '0' ); ?></span>
					<?php endif; ?>
					<?php if ( $days ) : ?>
					<span class="days"><?php

					$m = 'monday';
					$t = 'tuesday';
					$w = 'wednesday';
					$r = 'thursday';
					$f = 'friday';
					$u = 'saturday';
					$s = 'sunday';
					$days_str = '';
					if ( count( $days ) === 1 ) {
						echo ucfirst( $days[0] );
					} elseif ( count( $days ) === 7 ) {
						echo 'Daily';
					} else {
						foreach( $days as $i => $day ) {
							switch ($day) {
								case $m:
									$days_str .= 'Mon';
									if ( $days[$i + 1] === $t) {
										$days_str .= ' - ';
									} else {
										$days_str .= ',';
									}
									break;
								case $t:
									$days_str .= 'Tues';
									if (count( $days ) === $i + 1 ) {
										break;
									} 
									if ( $days[$i + 1] === $w) {
										$days_str .= ' - ';
									} else {
										$days_str .= ',';
									}
									break;
								case $w:
									$days_str .= 'Wed';
									if (count( $days ) === $i + 1 ) {
										break;
									} 
									if ( $days[$i + 1] === $r) {
										$days_str .= ' - ';
									} else {
										$days_str .= ',';
									}
									break;
								case $r:
									$days_str .= 'Thurs';
									if (count( $days ) === $i + 1 ) {
										break;
									} 
									if ( $days[$i + 1] === $f) {
										$days_str .= ' - ';
									} else {
										$days_str .= ',';
									}
									break;
								case $f:
									$days_str .= 'Fri';
									if (count( $days ) === $i + 1 ) {
										break;
									} 
									if ( $days[$i + 1] === $u) {
										$days_str .= ' - ';
									} else {
										$days_str .= ',';
									}
									break;
								case $u:
									$days_str .= 'Sat';
									if (count( $days ) === $i + 1 ) {
										break;
									} 
									if ( $days[$i + 1] === $s) {
										$days_str .= ' - ';
									} else {
										$days_str .= ',';
									}
									break;
								case $s:
									$days_str .= 'Sun';
									if ( $days[0] === $m) {
										$days_str .= ' - ';
										$j = strrpos( $days_str, ',');
										$substr = substr($days_str, $j+1 );
										$days_str = str_replace( $substr, '', $days_str );
										$days_str = $substr . $days_str;
										$days_str = rtrim( $days_str, ',' );
									} 
									break;
							}
						}
						if ( ! empty( $days_str ) ) {
							$mid_days = array('- Mon ', '- Tues ', '- Wed ', '- Thurs ', '- Fri ', '- Sat ', '- Sun ');
							$days_str = str_replace( $mid_days, '', $days_str );
							$days_str = str_replace( ',', ', ', $days_str );
						}
						echo $days_str;
					} 
					?>
					</span>

					<?php endif; ?>
					<?php if ( $icon ) : ?>
					<div class="icon">
						<?php echo $icon ?>
					</div>
					<?php endif; ?>
					<?php if ( $location ) : ?>
					<span class="location"><?php echo $location ?></span>
					<?php endif; ?>
					<div class="content"><?php the_content(); ?></div>
				</div><!-- .entry-content -->
			</article><!-- #post-## -->
			<?php endwhile; ?>


		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>