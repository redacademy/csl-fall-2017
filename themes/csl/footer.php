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
					<ul class="footer-nav-wrapper">
						
					<?php wp_nav_menu (array('theme_location' => 'footer-menu','menu_class' => 'footer-nav'));?>
					</ul>
					
				<div class="footer-container">
					<a href="https://www.phs.ca/index.php/project/aboriginal-services/" class="footer-logo-container">
					</a>
					<div class="footer-contact-info">
						<p><?php echo get_theme_mod( 'title_value' ); ?></p>		
						<p><?php echo get_theme_mod( 'address_value' ); ?></p>
						<p><?php echo get_theme_mod( 'province_value' ); ?></p>
						<div class="weekday-hours">
							<p><?php echo get_theme_mod( 'weekdays_value' ); ?></p>
							<p><?php echo get_theme_mod( 'weekday_hours_value' ); ?></p>
						</div>	
						<div class="weekend-hours">
						<p><?php echo get_theme_mod( 'weekend_value' ); ?></p>
							<p><?php echo get_theme_mod( 'weekend_hours_value' ); ?></p>
						</div>
					</div>
				</div>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->
		<?php wp_footer(); ?>

	</body>
</html>
