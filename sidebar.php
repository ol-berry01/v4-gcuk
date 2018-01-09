<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gcwoo
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<aside id="sidebar" class="col-md-4 widget-area" role="complementary" style="margin-top:75px;padding-top:50px;">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #sidebar -->
