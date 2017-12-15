<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package RED_Starter_Theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<img src="<?php echo get_template_directory_uri() . '/images/eagle1.svg'; ?>" class="eagle-logo" alt="eagle logo" />
</div><!-- #secondary -->
