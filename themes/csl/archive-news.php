<?php


get_header(); ?>

		<div id="primary">
			<div id="content" role="main">
			<?php if(have_posts()): ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'news' ); ?>


				<?php endwhile; // End of the loop. ?>
			<?php else : ?>
						
				<?php get_template_part( 'template-parts/content', 'none' ); ?>
		
			<?php endif; ?>
			<a class="twitter-timeline" href="https://twitter.com/cultrsaveslives?ref_src=twsrc%5Etfw">Tweets by cultrsaveslives</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 

<?php get_footer(); ?>