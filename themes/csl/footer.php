<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
				<div>
					<ul class="footer-nav">
						<div>
							<a href="#"><li>Home</li></a>
							<a href="#"><li>Story</li></a>
							<a href="#"><li>Events</li></a>
						</div>
						<div>
							<a href="#"><li>Gallery</li></a>
							<a href="#"><li>News</li></a>
							<a href="#"><li>Contact</li></a>
						</div>
					</ul>
				</div>
				<div class="footer-container">
					<div class="footer-logo-container">
						<!-- -->
					</div>
					<div class="footer-contact-info">
						<p><?php echo get_theme_mod( 'title_value' ); ?></p>		
						<p><?php echo get_theme_mod( 'address_value' ); ?></p>
						<p><?php echo get_theme_mod( 'date_value' ); ?></p>
					</div>
				</div>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->
		<?php wp_footer(); ?>

	</body>
</html>
